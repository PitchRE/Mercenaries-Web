<?php

namespace App;

use App\Item;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\UserItem
 *
 * @property int $id
 * @property int $user_id
 * @property int $item_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserItem whereUserId($value)
 * @mixin \Eloquent
 */
class UserItem extends Model
{
    public function ItemData()
    {

        return $this->belongsTo('App\Item', 'item_id', 'id');

    }

    public function getUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function isEquiped()
    {
        $state = false;
        $user = $this->getUser;

        switch ($this->id) {
            case $user->head:
                $state = true;
                break;
            case $user->body:
                $state = true;
                break;
            case $user->gloves:
                $state = true;
                break;
            case $user->boots:
                $state = true;
                break;
            case $user->weapon_1:
                $state = true;
                break;
            case $user->weapon_2:
                $state = true;
                break;
            case $user->weapon_3:
                $state = true;
                break;
            case $user->weapon_4:
                $state = true;
                break;
            case $user->horse:
                $state = true;
                break;

            default:
                $state = false;
                # code...
                break;
        }

        return $state;

    }

}
