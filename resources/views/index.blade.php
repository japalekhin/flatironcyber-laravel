@extends('layouts.index')

@section('content')
    <section class="features container p-section">
        <h2 class="text-center text-3xl font-bold mb-12">Features</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ([0, 1, 2, 3, 4, 5] as $dummyIndex)
                <div>
                    <h3 class="text-xl text-primary mb-3">
                        <i class="fa-solid fa-shield-alt fa-fw"></i>
                        @if ($dummyIndex % 2 === 0)
                            Reliable
                        @else
                            Secure
                        @endif
                    </h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem amet in odio praesentium numquam
                        minima!
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    <div class="features bg-[#1d3557] text-white p-section">
        <section class="container">
            <h2 class="text-center text-3xl font-bold mb-12">Plans</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl mb-4">
                        <i class="fa-solid fa-box-open fa-fw"></i>
                        Basic Plan
                    </h3>

                    <hr class="border-1 border-gray-100 mb-4" />

                    @foreach ([0, 1, 2, 3, 4, 5, 6, 7] as $dummyCounter)
                        <div class="mb-4 cursor-default">
                            <i class="fa-solid fa-check text-xs text-green-500 mr-2"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                    @endforeach

                    <div class="flex flex-row justify-end items-center mt-6">
                        <a href="#" class="button button-primary">
                            <i class="fa-solid fa-shopping-cart fa-fw mr-2"></i>
                            Get This Plan
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl mb-4">
                        <i class="fa-solid fa-gift fa-fw"></i>
                        Professional
                    </h3>

                    <hr class="border-1 border-gray-100 mb-4" />

                    @foreach ([0, 1, 2, 3, 4, 5, 6, 7] as $dummyCounter)
                        <div class="mb-4 cursor-default">
                            <i class="fa-solid fa-check text-xs text-green-500 mr-2"></i>
                            <span>Lorem ipsum dolor sit amet consectetur.</span>
                        </div>
                    @endforeach

                    <div class="flex flex-row justify-end items-center mt-6">
                        <a href="#" class="button button-primary">
                            <i class="fa-solid fa-shopping-cart fa-fw mr-2"></i>
                            Get This Plan
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl mb-4">
                        <i class="fa-solid fa-gem fa-fw"></i>
                        Premium
                    </h3>

                    <hr class="border-1 border-gray-100 mb-4" />

                    @foreach ([0, 1, 2, 3, 4, 5, 6, 7] as $dummyCounter)
                        <div class="mb-4 cursor-default">
                            <i class="fa-solid fa-check text-xs text-green-500 mr-2"></i>
                            <span>Lorem ipsum dolor sit amet consectetur.</span>
                        </div>
                    @endforeach

                    <div class="flex flex-row justify-end items-center mt-6">
                        <a href="#" class="button button-primary">
                            <i class="fa-solid fa-shopping-cart fa-fw mr-2"></i>
                            Get This Plan
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
