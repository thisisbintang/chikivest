<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Grazier extends Model
{
    use Notifiable;
    protected $guard = 'grazier';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'graziers';

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
    protected $fillable = ['name', 'address', 'company_name', 'company_address', 'phone_number', 'actor_status', 'short_description', 'email', 'username', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
