@extends('wrappers.wrapper')

@section('header')
    <header class="hero h-screen flex flex-col bg-gradient-to-r from-primary/30 to-primary/15">
        @include('partials.header-navigation')
        <div class="flex-grow flex flex-row">


            <div class="flex flex-col lg:flex-row-reverse items-center justify-center gap-12 lg:gap-9 container pb-20">
                <div
                    class="w-full max-w-[30rem] lg:max-w-[37.5rem] bg-index-hero bg-cover bg-center bg-no-repeat aspect-[57/41]">
                </div>

                <div class="relative text-center lg:text-left">
                    <h1 class="font-medium text-4xl text-gray-800 mb-5">Lorem ipsum dolor sit amet consectetur.</h1>
                    <div class="text-xl text-gray-700 mb-12">Officiis bastus fugiat asperiores tempore tenetur</div>
                    <a href="/sign-up"
                        class="inline-block bg-primary hover:bg-opacity-90 text-lg text-gray-100 px-6 py-3 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2 shadow-md">
                        <i class="fa-solid fa-user-plus mr-2"></i>
                        <span>Sign up now</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('body')
    <main class="flex-grow">
        @yield('content')
    </main>
@endsection

@section('footer')
    @include('partials.site-footer')
@endsection
