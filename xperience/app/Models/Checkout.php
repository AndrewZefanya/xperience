<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'trip_id', 'card_number', 'expired', 'cvc','is_paid'];
   
    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    public function Trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}