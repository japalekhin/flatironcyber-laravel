<header>
    <div class="flex flex-row items-center justify-between container my-4">
        <nav class="flex flex-row gap-4 items-center">
            <a href="{{ route('index') }}" class="font-medium uppercase">
                {{ env('APP_NAME', __('FlatIron Cyber')) }}
            </a>
            @if (Auth::check())
                <a href="/dashboard">{{ __('Dashboard') }}</a>
            @endif
        </nav>
        <nav class="flex flex-row gap-4 items-center">
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
