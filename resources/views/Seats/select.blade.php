@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Select Your Seat</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('seats.book') }}">
            @csrf

            <!-- Display available seats and allow the user to choose -->
            <div class="mb-3">
                <label for="seats" class="form-label">Available Seats</label>
                <select name="seats[]" multiple class="form-control" required>
                    @foreach ($availableSeats as $seat)
                        <option value="{{ $seat }}">{{ $seat }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Book Selected Seats</button>
        </form>
    </div>
@endsection

