@extends('wrappers.wrapper')

@section('header')
    @include('partials.header-navigation')
@endsection

@section('body')
    <main class="flex-grow flex flex-col">
        @yield('content')
    </main>
@endsection

@section('footer')
    @include('partials.site-footer')
@endsection
