@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $conference->title }}</h1>
                <p>{{ $conference->description }}</p>
                <p>Date: {{ $conference->date }}</p>
                <p>Address: {{ $conference->address }}</p>
            </div>
        </div>
    </div>
@endsection
