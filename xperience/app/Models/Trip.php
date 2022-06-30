<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout;



class Trip extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['title', 'price'];

   
}
