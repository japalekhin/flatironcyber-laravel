@extends('layouts.default')

@section('content')
    <section class="container p-section">
        <div class="flex flex-row justify-between items-center">
            <h2 class="text-3xl mb-6">API Keys</h2>
            <a href="{{ route('api-keys.generate') }}" class="button button-primary">Generate API Key</a>
        </div>

        @if (session('success'))
            <div class="bg-success/10 px-4 py-3 border border-success rounded mb-6">{{ session('success') }}</div>
        @endif

        @if ($apiKeys->isEmpty())
            <p>No API Keys found.</p>
        @else
            <div class="responsive-table w-full">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">{{ __('API Key') }}</th>
                            <th scope="col">{{ __('Status') }}</th>
                            <th scope="col">{{ __('Last Used') }}</th>
                            <th scope="col">{{ __('Generated') }}</th>
                            <th scope="col">
                                <span class="sr-only">{{ __('Actions') }}</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apiKeys as $apiKey)
                            <tr>
                                <th scope="row">
                                    <div class="flex flex-row items-center gap-2">
                                        <input type="text" value="{{ $apiKey->key }}" class="display-field flex-grow"
                                            readonly click-to-copy-source />
                                        <button type="button" class="button" click-to-copy>copy</button>
                                    </div>
                                </th>
                                <td>{{ $apiKey->is_active_display }}</td>
                                <td>{{ $apiKey->last_used_at_display }}</td>
                                <td>{{ $apiKey->created_at }}</td>
                                <td class="action-column">
                                    <div class="flex flex-row items-center justify-end gap-2">
                                        @if ($apiKey->is_active)
                                            <a
                                                href="{{ route('api-keys.deactivate', ['id' => $apiKey->id]) }}">{{ __('Deactivate') }}</a>
                                        @else
                                            <a
                                                href="{{ route('api-keys.activate', ['id' => $apiKey->id]) }}">{{ __('Activate') }}</a>
                                        @endif
                                        <a href="{{ route('api-keys.delete', ['id' => $apiKey->id]) }}"
                                            class="button button-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </section>
@endsection
