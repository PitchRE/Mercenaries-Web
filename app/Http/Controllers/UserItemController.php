<?php

namespace App\Http\Controllers;

use App\Item;
use App\UserItem;
use Auth;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    public function buy($id = -1)
    {
        $user = Auth::user();

        if ($id == -1) {
            return redirect()->route('marketplace')->withErrors('Internal error');
        }

        $item = Item::find($id);
        if ($item == null) {
            return redirect()->route('marketplace')->withErrors('Internal error');
        }

        if ($user->gold < $item->price) {
            return redirect()->route('marketplace')->withErrors('Internal error: Gold');
        }

        $useritem = new UserItem();
        $useritem->user_id = $user->id;
        $useritem->item_id = $item->id;
        $user->decrement('gold', $item->price);
        $user->save();
        $useritem->save();
        return redirect()->route('marketplace')->withErrors(`Success. You bought {$item->name} for {$item->price}`);

        return redirect()->route('marketplace')->with('success', ['Bought item.']);
    }

    public function equip(Request $request)
{
        $user = Auth::user();
        $item = UserItem::find($request->item_id);
        if ($item == null || $item->getUser->id != $user->id) {
            return redirect()->route('inventory')->withErrors('Internal error');
        }

        if ($item->ItemData->isWeapon() == true) {
            if ($request->slot == null) {
                return redirect()->route('inventory')->withErrors('Internal error');
            }

            switch ($request->slot) {
                case '1':
                    $user->weapon_1 = $item->id;
                    break;
                case '2':
                    $user->weapon_2 = $item->id;
                    break;
                case '3':
                    $user->weapon_3 = $item->id;
                    break;
                case '4':
                    $user->weapon_4 = $item->id;
                    break;
                case 'none':
                    return redirect()->route('inventory')->withErrors('Please select slot');
                    break;
            }

            $user->save();
            return redirect()->route('inventory')->with('success', ['Equiped item (wpn)']);

        } else if

        ($item->ItemData->isWeapon() == false) {

            switch ($item->ItemData->type) {
                case 'itp_type_head_armor':
                    $user->head = $item->id;
                    break;
                case 'itp_type_body_armor':
                    $user->body = $item->id;
                    break;
                case 'itp_type_foot_armor':
                    $user->boots = $item->id;
                    break;
                case 'itp_type_hand_armor':
                    $user->gloves = $item->id;
                    break;
                case 'itp_type_horse':
                    $user->horse = $item->id;
                    break;
            }

            $user->save();
            return redirect()->route('inventory')->with('success', ['Equiped item']);

        } else {
            return redirect()->route('inventory')->withErrors('Internal error');
        }

    }

    public function unequip(Request $request)
{
        $user = Auth::user();

        $item = UserItem::find($request->id);

        if ($item == null || $item->user_id != $user->id) {
            return redirect()->route('inventory')->withErrors('Internal error');
        }

        if ($item->ItemData->isWeapon() == false) {
            switch ($item->ItemData->type) {
                case 'itp_type_head_armor':
                    $user->head = null;
                    break;
                case 'itp_type_body_armor':
                    $user->body = null;
                    break;
                case 'itp_type_foot_armor':
                    $user->boots = null;
                    break;
                case 'itp_type_hand_armor':
                    $user->gloves = null;
                    break;
                case 'itp_type_horse':
                    $user->horse = null;
                    break;

            }
        } else {

            if ($request->slot == null || $request->slot > 4 || $request->slot < 1) {
                return redirect()->route('inventory')->withErrors('Internal error');
            }

            switch ($request->slot) {
                case '1':
                    $user->weapon_1 = null;
                    break;
                case '2':
                    $user->weapon_2 = null;
                    break;
                case '3':
                    $user->weapon_3 = null;
                    break;
                case '4':
                    $user->weapon_4 = null;
                    break;
                case 'none':
                    return redirect()->route('inventory')->withErrors('Please select slot');
                    break;
            }

        }
        $user->save();
        return redirect()->route('inventory')->with('success', ['Unequiped item']);

    }
}
