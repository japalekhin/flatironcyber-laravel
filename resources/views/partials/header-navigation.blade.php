<header>
    <div class="flex flex-row items-center justify-between container my-4">
        <nav class="flex flex-row gap-4 items-center">
            <a href="{{ route('index') }}" class="font-medium uppercase">
                {{ env('APP_NAME', __('FlatIron Cyber')) }}
            </a>
            @if (Auth::check())
                <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                <a href="{{ route('api-keys.index') }}">{{ __('API Keys') }}</a>
            @endif
        </nav>
        <nav class="flex flex-row gap-4 items-center">
            <a href="{{ route('demo') }}" class="button button-success">{{ __('Demo') }}</a>
            @if (Auth::check())
                <a href="{{ route('logout') }}">
                    <i class="fa-solid fa-sign-out"></i>
                    {{ __('Sign Out') }}
                </a>
            @else
                <a href="{{ route('login') }}" class="">
                    <i class="fa-solid fa-sign-in-alt mr-2"></i>
                    {{ __('Sign In') }}
                </a>
                <a href="{{ route('register') }}" class="">
                    <i class="fa-solid fa-user-plus mr-2"></i>
                    {{ __('Sign Up') }}
                </a>
            @endif
        </nav>
    </div>
</header>
