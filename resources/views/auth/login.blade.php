@extends('layouts.default')

@section('content')
    <div class="container flex-grow flex flex-col items-center justify-center">
        <div class="auth-card">
            <div class="text-xl mb-6">
                <i class="fa-solid fa-shield-alt"></i>
                {{ __('Sign in to your account') }}
            </div>

            <form method="POST" action="{{ route('postLogin') }}">
                @csrf

                <div class="input-field input-with-label">
                    <input type="email" id="email" name="email" class="peer" value="{{ old('email') }}"
                        placeholder="{{ __('Email') }}" required />
                    <label for="email">{{ __('Email') }}</label>
                    @error('email')
                        <span class="error-message" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field input-with-label" password-toggle>
                    <input type="password" id="password" name="password" class="peer" placeholder="{{ __('Password') }}" required
                        password-toggle-input />
                    <label for="password">{{ __('Password') }}</label>
                    <button type="button" tabindex="-1" password-toggle-button>
                        <i class="fa-solid fa-fw fa-eye-slash"></i>
                    </button>
                    @error('password')
                        <span class="text-danger text-sm font-light" role="alert">{{ $message }}</span>
                    @enderror
                    @if (Route::has('password.request'))
                        <div class="mt-1">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <i class="fa-solid fa-circle-info text-gray-400"></i>
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </div>

                <div class="check-field">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">{{ __('Remember Me') }}</label>
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
