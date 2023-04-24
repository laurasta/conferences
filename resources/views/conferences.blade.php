@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Conferences</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->title }}</td>
                    <td>{{ $conference->description }}</td>
                    <td>{{ $conference->start_date }}</td>
                    <td>{{ $conference->end_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
