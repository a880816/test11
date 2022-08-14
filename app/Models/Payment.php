<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //指定對應table name
    protected $table = 'payments';

    
    use HasFactory;
}
