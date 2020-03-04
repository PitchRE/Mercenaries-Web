<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Item
 *
 * @property int $id
 * @property int $game_id
 * @property string $type
 * @property string $name
 * @property string $code_name
 * @property int $price
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCodeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Item extends Model
{
    public function isWeapon()
    {
        $state = false;
        $weapons = array("itp_type_one_handed_wpn", "itp_type_two_handed_wpn", "itp_type_polearm", "itp_type_arrows", "itp_type_bolts", "itp_type_shield", "itp_type_bow", "itp_type_crossbow", "itp_type_thrown", "itp_type_pistol", "itp_type_musket", "itp_type_bullets");

        if (in_array($this->type, $weapons)) {
            $state = true;
        }

        return $state;
    }
}
