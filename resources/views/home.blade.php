@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="css/styles.css">
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        {{ trans('messages.successLogin') }}
                        <a href="{{ route('conferences.create') }}">{{ trans('messages.createConf') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
