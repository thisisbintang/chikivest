<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DOC extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd_o_cs';

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
    protected $fillable = ['typeChicken', 'chickenPrice', 'unit', 'breeder_id'];

    
}
