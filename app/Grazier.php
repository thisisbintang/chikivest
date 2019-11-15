<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grazier extends Model
{
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

    
}
