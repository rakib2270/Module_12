<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'trip_id',
        'seat_number',
    ];

    /**
     * Get the user associated with the seat allocation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the trip associated with the seat allocation.
     */
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
