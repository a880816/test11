<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentDetail extends Model
{
    //指定對應table name
    protected $table = 'payment_details';
    protected $primaryKey = 'uid';

    use HasFactory;
}
