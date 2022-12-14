<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //指定對應table name
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    
    public function productCategory() {
        return $this->hasOne(ProductCategory::class);
    }

    protected $fillable = [
        'product_id',
        'size',
        'color',
        'amount'
    ];

    use HasFactory;
}
