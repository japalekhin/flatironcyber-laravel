@extends('layouts.default')

@section('content')
    <div class="container flex-grow flex flex-col items-center justify-center">
        <div class="w-full max-w-sm bg-primary/10 px-6 py-8 border border-gray-300 rounded shadow-lg">
            <div class="text-xl">
                <i class="fa-solid fa-shield-alt"></i>
                {{ __('Sign in to your account') }}
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-field">
                    <input type="email" id="email" class="peer" placeholder="johndoe@example.com" />
                    <label for="email">{{ __('Email') }}</label>
                    @error('email')
                        <span class="error-message" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field" password-toggle>
                    <input type="password" id="password" class="peer" placeholder="secret" password-toggle-input />
                    <label for="password">{{ __('Password') }}</label>
                    <button type="button" tabindex="-1" password-toggle-button>
                        <i class="fa-solid fa-fw fa-eye-slash"></i>
                    </button>
                    @error('password')
                        <span class="text-danger text-sm font-light" role="alert">{{ $message }}</span>
                    @enderror
                    @if (Route::has('password.request'))
                        <div class="mt-1">
                            <a class="btn btn-link"
                                href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        </div>
                    @endif
                </div>

                <div class="check-field">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                </div>

                <button type="submit" class="button button-primary block w-full m-field-row">
                    <i class="fa-solid fa-sign-in-alt"></i>
                    {{ __('Sign In') }}
                </button>

                <div class="m-field-row">
                    {{ __('Don\'t have an account yet?') }}
                    <a href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection
