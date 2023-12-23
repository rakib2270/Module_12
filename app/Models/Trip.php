<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from',
        'to',
        'date',
        'price',
    ];

    /**
     * Get the seat allocations associated with the trip.
     */
    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}
