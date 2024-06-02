@extends('layouts.app')
@section('content')
    <div class="min-h-screen pt-20 mt-10 flex flex-col items-center font-poppins">
        <h1 class="text-4xl font-bold text-primary text-center">Frequently Asked Questions</h1>
        <div class="w-full lg:px-48 md:px-20 px-10 pb-8">
            @foreach ($faqs as $faq)
                <div class="mt-12 w-full">
                    <button id="dropdownDefault"
                        style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;"
                        class="dropdown-button flex justify-between min-w-[100%] text-primary-dark  bg-white hover:ring-2 hover:ring-primary-lighter focus:ring-2 focus:outline-none transition duration-300 focus:ring-primary-light font-semibold rounded-lg text-lg py-2.5 text-center items-center p-5"
                        type="button">
                        <p>{{ $faq->question }}</p>
                        <svg class="md:block hidden dropdown-arrow transition duration-200 ml-2 w-4 h-4" aria-hidden="true"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="relative dropdown-answer hidden z-10 mt-3 w- bg-white rounded divide-y divide-gray-100 shadow-md text-justify ">
                        <p class="py-3 lg:text-md px-5 text-gray-700 " aria-labelledby="dropdownDefault">
                            {{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script>
        const dropdowns = document.getElementsByClassName('dropdown-button');
        const dropdownAnswers = document.getElementsByClassName('dropdown-answer');
        const dropdownArrows = document.getElementsByClassName('dropdown-arrow');

        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].addEventListener('click', () => {
                dropdownAnswers[i].classList.toggle('hidden');
                dropdownArrows[i].classList.toggle('-rotate-180');
            })
        }
    </script>
@endsection