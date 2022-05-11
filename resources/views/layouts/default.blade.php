@extends('wrappers.wrapper')

@section('header')
    <header class="bg-gray-300">
        <div class="flex flex-row items-center justify-between container mx-auto my-4">
            <nav>
                <a href="{{ route('homepage') }}">
                    <span class="text-primary text-2xl font-black uppercase">KONEK</span>
                </a>
            </nav>
            <nav class="flex flex-row gap-4 items-center">
                <a href="/" class="button primary-button">
                    <i class="fa-solid fa-truck-ramp-box"></i>
                    <span>Book a Delivery</span>
                </a>
                <a href="/" class="flex flex-row items-center gap-2">
                    <i class="fa-solid fa-circle-user"></i>
                    <span>My Account</span>
                    <i class="fa-solid fa-chevron-down text-gray-500"></i>
                </a>
            </nav>
        </div>
    </header>
@endsection

@section('body')
    <main class="flex-grow">
        @yield('content')
    </main>
@endsection

@section('footer')
    <footer class="bg-gray-300">
        <div class="container text-center mx-auto my-4">
            Copyright <a href="{{ route('homepage') }}">KONEK</a> {{ date('Y') }}. All rights reserved.
        </div>
    </footer>
@endsection
