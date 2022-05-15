@extends('layouts.default')

@section('content')
    <div class="container flex-grow flex flex-col items-center justify-center">
        <div class="auth-card">
            <div class="text-xl mb-6">
                <i class="fa-solid fa-user-plus"></i>
                {{ __('Create a new account') }}
            </div>

            <form method="POST" action="{{ route('postRegister') }}">
                @csrf

                <div class="input-field input-with-label">
                    <input type="text" id="first_name" name="first_name" class="peer"
                        value="{{ old('first_name') }}" placeholder="{{ __('First Name') }}" required autocomplete="first_name" autofocus>
                    <label for="first_name">{{ __('First Name') }}</label>
                    @error('first_name')
                        <span class="error-message" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field input-with-label">
                    <input type="text" id="last_name" name="last_name" class="peer"
                        value="{{ old('last_name') }}" placeholder="{{ __('Last Name') }}" required autocomplete="last_name" autofocus>
                    <label for="last_name">{{ __('Last Name') }}</label>
                    @error('last_name')
                        <span class="error-message" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field input-with-label">
                    <input type="email" id="email" name="email" class="peer" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required />
                    <label for="email">{{ __('Email') }}</label>
                    @error('email')
                        <span class="error-message" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field input-with-label" password-toggle>
                    <input type="password" id="password" name="password" class="peer" placeholder="{{ __('Password') }}" required password-toggle-input />
                    <label for="password">{{ __('Password') }}</label>
                    <button type="button" tabindex="-1" password-toggle-button>
                        <i class="fa-solid fa-fw fa-eye-slash"></i>
                    </button>
                    @error('password')
                        <span class="text-danger text-sm font-light" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field input-with-label" password-toggle>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="peer" placeholder="{{ __('Confirm Password') }}" required password-toggle-input />
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <button type="button" tabindex="-1" password-toggle-button>
                        <i class="fa-solid fa-fw fa-eye-slash"></i>
                    </button>
                    @error('password_confirmation')
                        <span class="text-danger text-sm font-light" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="button button-primary block w-full m-field-row">
                    <i class="fa-solid fa-check-circle"></i>
                    {{ __('Sign Up') }}
                </button>

                <div class="m-field-row">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}">{{ __('Sign In') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection
