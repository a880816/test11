<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //指定對應table name
    protected $table = 'payments';
    protected $primaryKey = 'payment_id';
    


    public function paymentDetail() {
        return $this->hasOne('App\Models\PaymentDetail');
    }
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // protected $fillable = [];

    use HasFactory;
}
