<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

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

    public function getIsActiveAttribute()
    {
        if(!$this->LastActiveUserSubscription){
            return false;
        }
        $dateNow = Carbon::now();
        $dateExpired = Carbon::create($this->LastActiveUserSubscription->expired_date);
        return $dateNow->lessThanOrEqualTo($dateExpired);
    }

    public function LastActiveUserSubscription()
    {
        return $this->hasOne(UserSubscription::class)->wherePaymentStatus('paid')->latest();
    }
}
