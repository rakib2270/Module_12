<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the trips associated with the location as the starting point.
     */
    public function fromTrips()
    {
        return $this->hasMany(Trip::class, 'from_location_id');
    }

    /**
     * Get the trips associated with the location as the destination.
     */
    public function toTrips()
    {
        return $this->hasMany(Trip::class, 'to_location_id');
    }
}
