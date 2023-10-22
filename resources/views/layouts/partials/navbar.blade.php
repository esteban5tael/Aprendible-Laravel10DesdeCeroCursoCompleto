<div >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @if (Route::has('login'))
            {{--  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
            <ul class="navbar-nav mr-auto">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">{{ __('Home') }}</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chirps.index') }}">{{ __('Chirps') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">{{__('Dashboard')}}: {{ Auth::user()->name }}</a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Log in') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        
                    @endif
                @endauth
            </ul>

            
        @endif
    </nav>
</div>