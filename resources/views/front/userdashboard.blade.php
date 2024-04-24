@extends('layouts.userdashboard')

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <p>Your email address is: {{ Auth::user()->email }}</p>

    <h2>Your Event Registrations</h2>
    <table class="table" id="eventUserTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Event Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop through event registrations and display them --}}
            @foreach($eventUsers as $eventUser)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $eventUser->event->title }}</td>
                    <td>{{ $eventUser->event->date }}</td>
                    <td>{{ $eventUser->event->location }}</td>
                    <td>
                        {{-- Add action buttons here --}}
                        <a href="{{ route('events.show', $eventUser->event->id) }}" class="btn btn-primary">View Event</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#eventUserTable').DataTable();
        });
    </script>
@endpush
