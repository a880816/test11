<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productCategory extends Model
{
    //指定對應table name
    protected $table = 'product_categories';
    protected $primaryKey = 'product_id';
    
    public function product() {
        return $this->belongsTo(Product::class);
    }

    protected $fillable = [
        'productName',
        'productPrice'
    ];

    use HasFactory;
}
