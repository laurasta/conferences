@extends('layouts.app')

@section('content')
    <h1>Edit Conference</h1>

    <form action="{{ route('conferences.update', $conference) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $conference->title }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $conference->description }}</textarea>
        </div>

        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ $conference->date }}" required>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="{{ $conference->address }}" required>
        </div>

        <button type="submit">Update Conference</button>
    </form>
@endsection
