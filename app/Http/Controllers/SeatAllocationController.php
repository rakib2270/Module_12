<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    // Show the form to select seats
    public function showSelectForm()
    {
        // Fetch available seats and other necessary data
        // Adjust the logic based on your requirements
        $availableSeats = ['Seat 1', 'Seat 2', 'Seat 3']; // Example data

        return view('seats.select', compact('availableSeats'));
    }

    // Process the selected seats and create seat allocations
    public function bookSeats(Request $request)
    {
        // Validate the selected seats
        $request->validate([
            'seats' => 'required|array',
            'seats.*' => 'string',
        ]);

        // Save seat allocations to the database
        foreach ($request->seats as $seat) {
            SeatAllocation::create([
                'user_id' => auth()->user()->id,
                'trip_id' => 1, // Adjust with the actual trip ID
                'seat_number' => $seat,
            ]);
        }

        // Redirect or perform any additional actions as needed
        return redirect()->route('dashboard')->with('success', 'Seats booked successfully.');
    }
}
