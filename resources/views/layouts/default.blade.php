@extends('wrappers.wrapper')

@section('header')
    <header>
        <div class="flex flex-row items-center justify-between container mx-auto my-4">
            <nav class="font-medium">
                <a href="{{ route('index') }}">
                    <span class="text-primary">FlatIron Cyber</span>
                </a>
            </nav>
            <nav class="flex flex-row gap-4 items-center font-medium">
                <a href="/" class="">
                    <i class="fa-solid fa-sign-in-alt text-xs"></i>
                    <span>Sign In</span>
                </a>
                <a href="/" class="">
                    <i class="fa-solid fa-user-plus text-xs"></i>
                    <span>Sign Up</span>
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
            Copyright <a href="{{ route('index') }}">FlatIron Cyber</a> {{ date('Y') }}. All rights reserved.
        </div>
    </footer>
@endsection
