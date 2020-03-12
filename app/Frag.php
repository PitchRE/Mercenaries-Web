<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frag extends Model
{
    public function ItemData()
    {

        return $this->belongsTo('App\Item', 'weapon_id', 'id');

    }
}
