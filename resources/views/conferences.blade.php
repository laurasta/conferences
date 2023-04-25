@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ trans('messages.conferences') }}</h1>
        <table class="table">
            <thead>
            <tr>
                <th>{{ trans('messages.title') }}</th>
                <th>{{ trans('messages.description') }}</th>
                <th>{{ trans('messages.date') }}</th>
                <th>{{ trans('messages.address') }}</th>
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
                            <button type="submit" class="btn btn-danger">{{ trans('messages.delete') }}</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-primary">{{ trans('messages.edit') }}</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
