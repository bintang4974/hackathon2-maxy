@extends('layouts.template')

@section('content')
    <div class="container">
        <h2>Event User Detail</h2>
        <div class="row">
            <div class="col-md-6">
                <p><strong>ID:</strong> {{ $eventUser->id }}</p>
                <p><strong>Event ID:</strong> {{ $eventUser->event_id }}</p>
                <p><strong>User ID:</strong> {{ $eventUser->user_id }}</p>
                <p><strong>Is Paid:</strong> {{ $eventUser->is_paid }}</p>
            </div>
        </div>
    </div>
@endsection
