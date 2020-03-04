<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \stdClass;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $exp
 * @property int $exp_next_level
 * @property int $level
 * @property string $secret_key
 * @property string $unique_id
 * @property int $kills
 * @property int $deaths
 * @property int $gold
 * @property int $strength
 * @property int $agility
 * @property int $Ironflesh
 * @property int $PowerStrike
 * @property int $PowerThrow
 * @property int $PowerDraw
 * @property int $Shooting_from_Horseback
 * @property int $Shield
 * @property int $Athletics
 * @property int $Riding
 * @property int $OneHanded
 * @property int $TwoHanded
 * @property int $Polearms
 * @property int $Archery
 * @property int $Throwing
 * @property int $Firearms
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAgility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereArchery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAthletics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeaths($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereExpNextLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirearms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIronflesh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereKills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOneHanded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePolearms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePowerDraw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePowerStrike($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePowerThrow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRiding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSecretKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereShield($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereShootingFromHorseback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereThrowing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTwoHanded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    public function items()
    {
        return $this->hasMany('App\UserItem', 'user_id', 'id');
    }

    public function getWeapon1()
    {
        $item = UserItem::find($this->weapon_1);
        return $item->ItemData ?? null;
    }
    public function getWeapon2()
    {
        $item = UserItem::find($this->weapon_2);
        return $item->ItemData ?? null;
    }
    public function getWeapon3()
    {
        $item = UserItem::find($this->weapon_3);
        return $item->ItemData ?? null;
    }
    public function getWeapon4()
    {
        $item = UserItem::find($this->weapon_4);
        return $item->ItemData ?? null;
    }
    public function getHead()
    {
        $item = UserItem::find($this->head);
        return $item->ItemData ?? null;
    }
    public function getBody()
    {
        $item = UserItem::find($this->body);
        return $item->ItemData ?? null;
    }
    public function getGloves()
    {
        $item = UserItem::find($this->gloves);
        return $item->ItemData ?? null;
    }
    public function getBoots()
    {
        $item = UserItem::find($this->boots);
        return $item->ItemData ?? null;
    }
    public function getHorse()
    {
        $item = UserItem::find($this->horse);
        return $item->ItemData ?? null;
    }

}
