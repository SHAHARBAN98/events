<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
</head>
<body>
    <h1>Event Details</h1>
    <p><strong>Title:</strong> {{ $event->title }}</p>
    <p><strong>Description:</strong> {{ $event->description }}</p>
    <p><strong>Date:</strong> {{ $event->date }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>

    <h2>Sessions</h2>
    <ul>
        @forelse($event->sessions as $session)
            <li>{{ $session->title }} ({{ $session->start_time }} - {{ $session->end_time }}) with {{ $session->speaker }}</li>
        @empty
            <li>No sessions scheduled.</li>
        @endforelse
    </ul>

    <a href="{{ route('events.edit', $event) }}">Edit Event</a>

    <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Event</button>
    </form>

    <a href="{{ route('events.index') }}">Back to Events List</a>
</body>
</html>
