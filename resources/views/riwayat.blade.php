@extends('layouts.app')

@section('content')

    @if(session()->has('success'))
    <div id="info-popup" tabindex="-1" class="font-poppins popup-close bg-[#a7a7a744] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full flex items-center justify-center">
        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
                <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
                    <h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">{{session('loginError')}}</h3>
                    <p class="text-lg">
                        {{ session('success') }}
                    </p>
                </div>
                <div class="justify-between items-center pt-0 space-y-4 sm:flex sm:space-y-0">
                    <div class="items-center space-y-4 sm:space-x-4 sm:flex sm:space-y-0">
                        <button id="close-modal" type="button"  class="btn-close py-2 px-4 w-full text-sm font-medium  rounded-lg border border-gray-200 sm:w-auto  focus:ring-4 focus:outline-none focus:ring-primary-300  focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 bg-primary text-white hover:bg-primary-light transition duration-300">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="pt-20 px-10">
        <div class="my-10">
            <h1 class="text-primary font-bold text-2xl">Riwayat Pelaporan Anda</h1>
            <p class="text-gray-400 text-md mt-3">Lihat riwayat pemesanan untuk modifikasi dan melihat detail riwayat</p>

            <div class="riwayat-box p-3 bg-white border mt-20 min-h-[300px] overflow-x-auto">
                <div class="riwayat-1 border md:w-full w-fit p-3 flex items-center mb-2">
                    <p class="md:w-[20%] min-w-[50px] font-bold">ID</p>
                    <p class="md:w-[25%] min-w-[300px] font-bold">Nama Pelapor</p>
                    <p class="md:w-[25%] min-w-[300px] font-bold  md:ml-0 ml-5">Created At</p>
                    <p class="md:w-[25%] min-w-[250px] font-bold  md:ml-0 ml-5">Action</p>
                </div>
                <div>
                    @foreach ($laporans as $laporan)
                        <div class="riwayat-1 border md:w-full w-fit p-3 flex items-center mb-2 text-sm">
                            <p class="md:w-[20%] min-w-[50px]">{{ $loop->iteration }}</p>
                            <p class="md:w-[25%] min-w-[300px]">{{ $laporan->nama_pelapor }}</p>
                            <p class="md:w-[25%] min-w-[300px] md:ml-0 ml-5">
                                {{ date_format($laporan->created_at, 'D, d M Y') }}</p>
                            <div class="lg:w-[25%] min-w-[250px] md:ml-0 ml-5 flex items-center flex-wrap">
                                <a href="/laporan/{{ $laporan->id }}">
                                    <button
                                    type="submit"
                                        class="bg-yellow-400 p-3 rounded-lg flex items-center focus:ring-2 ring-yellow-300 translate duration-200 outline-none">
                                        
                                        <p class="ml-2 text-sm">Edit</p>
                                    </button>
                                </a>
                                <form action="/laporan/delete/{{ $laporan->id }}" method="post">
                                    @csrf
                                    <button
                                    type="submit" onclick="return confirm('Are you sure?')"
                                        class="bg-red-400 p-3 rounded-lg flex items-center ml-2 focus:ring-2 ring-red-300 translate duration-200 outline-none">
                                     
                                        <p class="ml-2 text-sm">Delete</p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

    <script>
        const btnClose = document.querySelector('.btn-close');
        const popupClose = document.querySelector('.popup-close');

        btnClose.addEventListener('click', () => {
            popupClose.classList.add('hidden')
        })

    </script>
    
@endsection
