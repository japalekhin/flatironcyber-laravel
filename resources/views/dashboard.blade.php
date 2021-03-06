@extends('layouts.default')

@section('content')
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 px-9 p-section">
        <img alt="Requests graph" class="w-full mx-auto" src="{{ asset('img/graph-placeholders/average.jpg') }}" />
        <img alt="Bad credentials graph" class="w-full mx-auto" src="{{ asset('img/graph-placeholders/bad.jpg') }}" />
        <img alt="Average requests" class="w-full mx-auto" src="{{ asset('img/graph-placeholders/requests.jpg') }}" />
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 px-9 p-section">
        <div class="sdk">
            <h2 class="font-medium text-2xl mb-6">Download SDK</h2>
            <div class="flex flex-row space-x-4">
                <button type="button" class="button button-primary">
                    <i class="fa-brands fa-node-js mr-1"></i>
                    Node JS
                </button>

                <button type="button" class="button cursor-not-allowed bg-gray-400 text-gray-100" disabled>
                    <i class="fa-brands fa-php mr-1"></i>
                    PHP
                </button>

                <button type="button" class="button cursor-not-allowed bg-gray-400 text-gray-100" disabled>
                    <i class="fa-brands fa-php mr-1"></i>
                    Python
                </button>
            </div>
        </div>

        <div class="api-key">
            <div class="font-medium text-2xl mb-6">Api Key</div>
            <div class="flex flex-row items-center">
                <div class="flex-grow">
                    {{ __('You have') }}
                    <span class="font-bold">{{ $apiKeyCount }}</span>
                    {{ __('API Keys') }}.
                    <span class="text-primary font-bold">{{ $activeApiKeyCount }}</span>
                    @if ($activeApiKeyCount === 1)
                        {{ __('of them is active') }}.
                    @else
                        {{ __('of them are active') }}.
                    @endif
                </div>
                <a href="{{ route('api-keys.index') }}" class="button button-primary">Manage API Keys</a>
            </div>
        </div>
    </section>
@endsection
