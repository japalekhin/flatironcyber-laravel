<header>
    <div class="flex flex-row items-center justify-between container my-4">
        <nav class="font-medium">
            <a href="{{ route('index') }}">
                <span class="">{{ env('APP_NAME', __('FlatIron Cyber')) }}</span>
            </a>
        </nav>
        <nav class="flex flex-row gap-4 items-center font-normal">
            <a href="{{ route('login') }}" class="">
                <i class="fa-solid fa-sign-in-alt mr-2"></i>
                <span>{{ __('Sign In') }}</span>
            </a>
            <a href="{{ route('register') }}" class="">
                <i class="fa-solid fa-user-plus mr-2"></i>
                <span>{{ __('Sign Up') }}</span>
            </a>
        </nav>
    </div>
</header>
