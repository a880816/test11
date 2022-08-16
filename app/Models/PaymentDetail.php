<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentDetail extends Model
{
    //指定對應table name
    protected $table = 'payment_details';
    protected $primaryKey = 'payment_id';


    
    public function payment() {
        return $this->belongsTo(Payment::class);
    }

    protected $fillable = [
        'payment_id',
        'user_id',
        'orderInfo'
    ];

    use HasFactory;
}
