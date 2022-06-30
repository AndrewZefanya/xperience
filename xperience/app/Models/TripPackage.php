<?php

namespace App\Models;

use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripPackage extends Model
{
    use HasFactory;
    protected $fillable = ['trip_id','name'];
  
}
