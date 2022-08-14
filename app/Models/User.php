<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //指定對應table name
    protected $table = 'users';
    protected $primaryKey = 'uid';

    use HasFactory;
}
