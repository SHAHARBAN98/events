<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
</head>
<body>
    <h1>Create New Event</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')
            <div>{{ $message }}</div>
        @enderror

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea>
        @error('description')
            <div>{{ $message }}</div>
        @enderror

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ old('date') }}" required>
        @error('date')
            <div>{{ $message }}</div>
        @enderror

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="{{ old('location') }}" required>
        @error('location')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Create Event</button>
    </form>
    <a href="{{ route('events.index') }}">Back to Events List</a>
</body>
</html>