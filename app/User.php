<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \stdClass;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFreePoints()
    {
        $level = $this->level;

        $max_atributes = $this->strength + $this->agility;
        $max_profi = $this->Throwing + $this->Firearms + $this->Archery + $this->Polearms + $this->TwoHanded + $this->OneHanded;
        $max_skills = $this->Ironflesh + $this->Shooting_from_Horseback + $this->PowerStrike + $this->Grenade_Throwing + $this->PowerDraw + $this->Shield + $this->Athletics + $this->Riding;

        $FreePoints = new stdClass();
        $FreePoints->profi = 2 * $level - $max_profi;
        $FreePoints->skill = $level - $max_skills;
        $FreePoints->atributes = $level - $max_atributes;
        return $FreePoints;
    }
}
