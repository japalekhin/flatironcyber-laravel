@extends('layouts.default')

@section('content')
    <div class="flex-grow flex flex-col items-center justify-center gap-6 container p-section">

        <div class="max-w-lg bg-info/10 text-center px-4 py-3 border border-info rounded">
            <span class="text-info font-bold uppercase">{{ __('Note:') }}</span>
            {{ __('This is a demo page and will not be accessible in production. You can use it to test your API keys.') }}
        </div>

        <div class="w-full max-w-lg bg-primary/10 px-6 py-8 border border-gray-300 rounded shadow-lg">
            <form method="POST" action="{{ route('post-demo') }}">
                @csrf

                <div class="input-field input-with-label">
                    <input type="text" id="api_key" name="api_key" class="peer" value="aaaa"
                        placeholder="{{ __('API Key') }}" required autocomplete="api_key" autofocus>
                    <label for="api_key">{{ __('API Key') }}</label>
                    @error('api_key')
                        <span class="error-message" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field input-with-label">
                    <input type="email" id="email" name="email" class="peer" value="example@email.com"
                        placeholder="{{ __('Email') }}" required />
                    <label for="email">{{ __('Email') }}</label>
                    @error('email')
                        <span class="error-message" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-field input-with-label" password-toggle>
                    <input type="password" id="password" name="password" class="peer" value="asdf"
                        placeholder="{{ __('Password') }}" required password-toggle-input />
                    <label for="password">{{ __('Password') }}</label>
                    <button type="button" tabindex="-1" password-toggle-button>
                        <i class="fa-solid fa-fw fa-eye-slash"></i>
                    </button>
                    @error('password')
                        <span class="text-danger text-sm font-light" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="button button-primary block w-full m-field-row">
                    {{ __('Check Credentials') }}
                </button>

            </form>

            @if (session()->has('demo-results'))
                <div class="flex flex-col items-stretch gap-2">
                    @if (session()->has('demo-email-compromised'))
                        <div class="flex flex-row justify-between">
                            <div>Is my email compromised?</div>
                            @if (session('demo-email-compromised'))
                                <div class="text-danger font-bold">Yes</div>
                            @else
                                <div class="text-success font-bold">No</div>
                            @endif
                        </div>
                    @endif
                    @if (session()->has('demo-password-compromised'))
                        <div class="flex flex-row justify-between">
                            <div>Is my password compromised?</div>
                            @if (session('demo-password-compromised'))
                                <div class="text-danger font-bold">Yes</div>
                            @else
                                <div class="text-success font-bold">No</div>
                            @endif
                        </div>
                    @endif
                    @if (session()->has('demo-risk'))
                        <div class="flex flex-row justify-between">
                            <div>Risk of using these credentials:</div>
                            <div class="text-success font-bold">{{ session('demo-risk') }}%</div>
                        </div>
                    @endif
                </div>
            @endif

        </div>

    </div>
@endsection
