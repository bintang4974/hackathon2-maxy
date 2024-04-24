@extends('layouts.template')

@section('content')
    <div class="container">
        <h2>Edit Event User</h2>
        <form action="{{ route('event_users.update', $eventUser->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="event_id">Event ID:</label>
                <input type="text" class="form-control" id="event_id" name="event_id" value="{{ $eventUser->event_id }}">
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $eventUser->user_id }}">
            </div>
            <div class="form-group">
                <label for="is_paid">Is Paid:</label>
                <input type="text" class="form-control" id="is_paid" name="is_paid" value="{{ $eventUser->is_paid }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('event_users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
