<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email', 
        'password',
    ];

    protected $dispatchesEvents = [
       'created' => UserCreated::class,
       'updated' => UserUpdated::class,
       'deleted' => UserDeleted::class,
   ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Setter Functions
     */
    public function setUserNameAttribute($value) {
        $this->attributes['username'] = strtolower($value);
    }
    public function setEmailAttribute($value) {
        $this->attributes['email'] = strtolower($value);
    }
    public function setFirstNameAttribute($value) {
        $this->attributes['firstname'] = strtolower($value);
    }
    public function setLastNameAttribute($value) {
        $this->attributes['lastname'] = strtolower($value);
    }

    public function getFullNameAttribute() {
        $f = ucfirst($this->firstname);
        $l = ucfirst($this->lastname);
        return "{$f} {$l}";
    }
    
    public function getCreatedAttribute() {
        return $this->created_at->toFormattedDateString();
    }
}
