<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Breeder extends Authenticatable
{
    use Notifiable;
    protected $guard = 'breeder';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'breeders';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'company_name', 'company_address', 'phone_number', 'actor_status', 'short_description', 'email', 'username', 'password', 'photo_profile'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
