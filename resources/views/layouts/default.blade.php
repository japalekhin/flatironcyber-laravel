@extends('wrappers.wrapper')

@section('header')
    <header class="bg-primary text-white">
        @include('partials.header-navigation')
    </header>
@endsection

@section('body')
    <main class="flex-grow flex flex-col">
        @yield('content')
    </main>
@endsection

@section('footer')
    @include('partials.site-footer')
@endsection
