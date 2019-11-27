<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestmentPackage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'investment_packages';

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
    protected $fillable = ['breeder_id', 'grazier_id', 'seller_id'];

    
}
