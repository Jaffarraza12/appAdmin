<?php

namespace App\Http\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table = 'category';
    protected $connection = 'mysql';
    protected $primaryKey = 'category_id';


}
