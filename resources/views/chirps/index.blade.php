@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('h1')
    {{ config('app.name') }}
@endsection

@section('content')
    {{-- Search Bar --}}
    <form action="" method="GET" class="form-group">
        <input class="form-control m-1" type="text" id="search" name="search" placeholder="{{ __('Search') }}"
            value="{{ request('search') }}">
    </form>
    {{-- Search Bar --}}

    {{-- Session Message  --}}
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{-- Session Message  --}}

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

        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            @include('chirps.form')
        </form>
    </div>
    {{-- Form --}}

    {{-- Chirps --}}
    <div class="chirps">
        @foreach ($chirps as $chirp)
            <div class="card m-1" id="{{ $chirp->id }}">
                <div class="card-header">
                    <div class="card-title">{{ __('Created by') }}: <b>{{ $chirp->user->name }}</b></div>
                </div>
                <div class="card-body">
                    <div class="card-text">

                        <p>
                            {{ $chirp->message }}
                        </p>
                    </div>
                    <div class="d-flex justify-content-end m-1">
                        @can('update', $chirp)
                            <a class="btn btn-sm btn-warning m-1"
                                href="{{ route('chirps.edit', $chirp) }}">{{ __('Edit') }}</a>
                        @endcan
                        @can('delete', $chirp)
                            
                        <form action="{{ route('chirps.destroy', $chirp) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-sm btn-danger m-1"
                            href="{{ route('chirps.destroy', $chirp) }}"
                            onclick="event.preventDefault(); this.closest('form').submit()"
                            >{{ __('Delete') }}</a>
                        </form>
                        @endcan
                        {{-- <form action="{{ route('chirps.delete',$chirp) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger m-1 ">{{__('Delete')}}</button>
                            </form> --}}
                    </div>
                </div>
                <div class="card-footer blockquote-footer">
                    {{ __('Created at') }}: <cite> {{ $chirp->created_at->diffForHumans() }}</cite>
                    @if ($chirp->created_at != $chirp->updated_at)
                        | {{ __('Edited') }}: <cite>{{ $chirp->updated_at->diffForHumans() }}</cite>
                    @endif
                </div>

            </div>
        @endforeach
        <div class="card-title text-center m-1">
            {{ $chirps->links() }}
        </div>

    </div>
    {{-- Chirps --}}
@endsection
