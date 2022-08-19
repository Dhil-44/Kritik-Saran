<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //new added
    //    public $incrementing = false;
    //    protected $keyType = 'string';

    //    protected static function boot()
    //    {
    //        parent::boot(); //
    //        User::creating(function ($model){
    //            $model->setId();
    //        });
    //    }
    //    public function setId(){
    //        $this->attributes['id'] = Str::uuid();
    //    }

    protected function getLogoAttribute($logo)
    {
        if (!$logo) {
            return asset('dist/img/user/guest.png');
        }
        return asset('storage/users/' . $logo);
    }

    protected $fillable = [
        'name',
        'email',
        'role',
        'logo',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function getAllRoleDeparment()
    {
        return User::query()->where('role', 'department')->get();
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
