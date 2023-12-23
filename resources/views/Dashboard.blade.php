@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User Dashboard</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Display user's booked trips and other information -->
        <div>
            <h3>Your Booked Trips</h3>
            <ul>
                @foreach ($bookedTrips as $booking)
                    <li>{{ $booking->trip->from }} to {{ $booking->trip->to }} - Seat: {{ $booking->seat_number }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

