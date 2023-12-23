@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Trip</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('trips.store') }}">
            @csrf

            <div class="mb-3">
                <label for="from" class="form-label">From</label>
                <input type="text" name="from" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="to" class="form-label">To</label>
                <input type="text" name="to" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Ticket Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Trip</button>
        </form>
    </div>
@endsection
