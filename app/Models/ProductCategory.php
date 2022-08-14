<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productCategory extends Model
{
    //指定對應table name
    protected $table = 'product_categories';

    
    use HasFactory;
}
