<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChickenPriceOffer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chicken_price_offers';

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
    protected $fillable = ['codePriceOffer', 'chickenPriceOffer', 'seller_id'];


}
