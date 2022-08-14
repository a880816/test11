<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //指定對應table name
    protected $table = 'products';
    protected $primaryKey = 'pid';
    
    use HasFactory;
}
