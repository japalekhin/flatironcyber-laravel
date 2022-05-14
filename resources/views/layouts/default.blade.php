@extends('wrappers.wrapper')

@section('header')
    @include('partials.header-navigation')
@endsection

@section('body')
    <main class="flex-grow">
        @yield('content')
    </main>
@endsection

@section('footer')
    <footer class="bg-gray-300">
        <div class="container text-center mx-auto my-4">
            Copyright <a href="{{ route('index') }}">FlatIron Cyber</a> {{ date('Y') }}. All rights reserved.
        </div>
    </footer>
@endsection
