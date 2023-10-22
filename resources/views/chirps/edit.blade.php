@extends('layouts.base')

@section('title')
    {{ __('Edit') }}
@endsection

@section('h1')
    {{ __('Edit') }}
@endsection

@section('content')
    {{-- Error --}}
    @error('user_id')
        <div class="alert alert-warning">
            {{ $message }}
        </div>
    @enderror
    @error('message')
        <div class="alert alert-warning">
            {{ __('Check your message') }}
        </div>
    @enderror
    {{-- Error --}}

    {{-- Form --}}
    <div class="form">

        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('PUT')

            <input type="hidden" name="user_id" id="user_id" value="{{ $chirp->user->id }}">

            <textarea class="form-control" name="message" id="" cols="15" rows="2"
                placeholder="{{ __('What´s on your mind?') }}">{{ old('message', $chirp->message) }}</textarea>

            <div class="d-flex justify-content-end m-1">
                <button class="btn btn-primary btn-sm">{{ __('Submit') }}</button>
                <a class="btn btn-success  m-1" href="{{ route('chirps.index') }}">{{ __('Back') }}</a>
            </div>

        </form>
    </div>
    {{-- Form --}}
@endsection
