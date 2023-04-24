<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class addrs extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'addresses';
    protected $primaryKey = "address_id";
    protected $fillable = [
        "address_id",
        "user_id",
        "city",
        "district",
        "zipcode",
        "address",
        "is_default",
    ];
}
