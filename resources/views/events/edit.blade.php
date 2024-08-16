<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
</head>
<body>
    <h1>Edit Event</h1>
    <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $event->title) }}" required>
        @error('title')
            <div>{{ $message }}</div>
        @enderror

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ old('description', $event->description) }}</textarea>
        @error('description')
            <div>{{ $message }}</div>
        @enderror

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ old('date', $event->date) }}" required>
        @error('date')
            <div>{{ $message }}</div>
        @enderror

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="{{ old('location', $event->location) }}" required>
        @error('location')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Update Event</button>
    </form>
    <a href="{{ route('events.index') }}">Back to Events List</a>
</body>
</html>
