<?php

namespace App\Models;

use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripPackage extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['trip_id','name'];
  
}
