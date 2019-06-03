<?php

namespace App\Http\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    //
    protected $table = 'product_variation';
    protected $connection = 'mysql';
    public $timestamps = false;

    protected $primaryKey = 'product_variation_id';

}
