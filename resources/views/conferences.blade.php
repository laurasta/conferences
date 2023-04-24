@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Conferences</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Address</th>
            </tr>
            </thead>
            <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->title }}</td>
                    <td>{{ $conference->description }}</td>
                    <td>{{ $conference->date }}</td>
                    <td>{{ $conference->address }}</td>
                    <td>
                        <form method="POST" action="{{ route('conferences.destroy', $conference->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
