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

    <div class="jumbotron pt-20 pl-10 font-poppins bg-cover bg-center min-h-screen text-white pb-5 flex lg:flex-row flex-col-reverse lg:items-start items-center justify-between"
        style="background-image: url('/images/home/ZonaAman_background.png')">
        <div class="lg:w-[45%] w-full lg:mt-10 lg:pb-0 pb-20">
            <h1 class="lg:text-[45px] text-[30px] font-semibold leading-tight">Zona aman pelaporan kasus kekerasan seksual</h1>
            <p class="text-sm my-6 w-[90%]">Anda merasa mengalami kekerasan seksual di perguruan tinggi? Atau Anda
                mengetahui adanya kekerasan
                seksual?
                Segera laporkan di sini.</p>
            <div>
                <form action="/layanan" method="get" class="inline">
                    <button type="submit"
                        class="font-semibold rounded-md bg-white hover:opacity-80 transition duration-300 text-primary px-5 py-3 focus:ring-white focus:ring-4 md:mb-0 mb-2 mr-2">Laporkan
                        sekarang</button>
                </form>
                <form action="/contact" method="get" class="inline">
                    <button type="submit"
                    class="rounded-md px-5 py-3 lg:ml-5 border-2 md:border-transparent border-white hover:border-white transition duration-300">pelajari
                    dahulu</button>
                </form>
                
            </div>
        </div>
        <div>
            <img src="/images/jumbotron-image2.png" class="lg:w-[500px] w-[300px]">
        </div>
    </div>
    <div class="w-full font-poppins">
        <div
            class="card flex lg:flex-row flex-col items-center justify-between lg:w-[50%] w-fit mx-auto lg:p-5 p-3 shadow-xl mt-10 mb-20 rounded-xl">
            <img src="/images/home/logo-ub.png" class="h-20 lg:mb-0 mb-3">
            <img src="/images/home/logo-filkom.png" class="h-6 lg:mb-0 mb-3">
            <img src="/images/home/logo-komnas-ham.png" class="h-20 lg:mb-0 mb-3">
            <img src="/images/home/logo-komnas-perempuan.png" class="h-6 lg:mb-0 mb-3">
            <img src="/images/home/logo-germas.png" class="h-20 lg:mb-0 mb-3">
        </div>
    </div>
    <div class="our-service font-poppins px-20">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-primary">Layanan kami</h1>
            <p class="text-sm mt-3">Berikut ini adalah beberapa layanan yang kami berikan untuk Anda</p>
        </div>

        <div class="font-poppins w-fit flex lg:flex-row flex-col items-center justify-center mt-10">
            <img src="/images/home/humans-1.png" class="lg:w-[30%] w-[200px]">
            <div class="lg:w-[45%] w-full ml-5">
                <h2 class="capitalize font-semibold text-xl mb-5">pengaduan & pelaporan</h2>
                <p class="mb-5 leading-7">Anda bisa langsung melakukan pengaduan dan pelaporan dengan cara mengisi
                    formulir terkait data-data pelapor, korban, dan pelaku. </p>
                <button
                    class="bg-primary rounded-lg shadow text-white capitalize p-3 hover:opacity-80 transition duration-300 focus:ring-primary-light focus:ring-4">pelajari
                    lebih lanjut</button>
            </div>
        </div>
        <div class="font-poppins w-fit flex flex-col items-center lg:flex-row-reverse justify-center mt-10">
            <img src="/images/home/humans-2.png" class="lg:w-[30%] w-[200px]">
            <div class="lg:w-[45%] w-full ml-5">
                <h2 class="capitalize font-semibold text-xl mb-5">pendampingan pasca trauma</h2>
                <p class="mb-5 leading-7">Kami melayani pendampingan pasca trauma terhadap korban yang mengalami
                    kekerasan seksual oleh para psikolog terbaik di Indonesia. </p>
                <button
                    class="bg-primary rounded-lg shadow text-white capitalize p-3 hover:opacity-80 transition duration-300 focus:ring-primary-light focus:ring-4">pelajari
                    lebih lanjut</button>
            </div>
        </div>
        <div class="font-poppins w-fit flex lg:flex-row flex-col items-center justify-center mt-10">
            <img src="/images/home/humans-3.png" class="lg:w-[30%] w-[200px]">
            <div class="lg:w-[45%] w-full ml-5">
                <h2 class="capitalize font-semibold text-xl mb-5">konseling</h2>
                <p class="mb-5 leading-7">Kami memberikan bimbingan konseling tentang pendidikan terkait kekerasan
                    seksual kepada siapa saja yang membutuhkan.</p>
                <button
                    class="bg-primary rounded-lg shadow text-white capitalize p-3 hover:opacity-80 transition duration-300 focus:ring-primary-light focus:ring-4">pelajari
                    lebih lanjut</button>
            </div>
        </div>
    </div>
    <div class="cara-pelaporan font-poppins flex flex-col items-center justify-center">
        <h1 class="text-primary text-3xl font-bold mt-20 mb-10">cara pelaporan</h1>
        <div class="flex flex-wrap justify-center mx-auto">
            <div
                class="card shadow-lg hover:shadow transition duration-300 cursor-pointer  rounded-xl px-7 py-7 sm:w-[350px] m-5">
                <div class="flex items-start mb-4">
                    <h3 class="text-xl text-primary font-bold">01</h3>
                    <h4 class="font-semibold text-lg ml-2">registrasi</h4>
                </div>
                <p class="text-sm">Sebelum menyampaikan pengaduan, Anda harus terdaftar. Klik disini apabila Anda belum
                    terdaftar</p>
            </div>
            <div
                class="card shadow-lg hover:shadow transition duration-300 cursor-pointer  rounded-xl px-7 py-7 sm:w-[350px] m-5">
                <div class="flex items-start mb-4">
                    <h3 class="text-xl text-primary font-bold">02</h3>
                    <h4 class="font-semibold text-lg ml-2">Menerima link aktivasi via email</h4>
                </div>
                <p class="text-sm">Setelah mengisi form pendaftaran dengan lengkap, link aktivasi akun akan dikirm ke
                    email Anda</p>
            </div>
            <div
                class="card shadow-lg hover:shadow transition duration-300 cursor-pointer  rounded-xl px-7 py-7 sm:w-[350px] m-5">
                <div class="flex items-start mb-4">
                    <h3 class="text-xl text-primary font-bold">03</h3>
                    <h4 class="font-semibold text-lg ml-2">Aktivasi akun</h4>
                </div>
                <p class="text-sm">Untuk melakukan aktivasi akun, klik link aktivasi yang Anda terima melalui email.</p>
            </div>
            <div
                class="card shadow-lg hover:shadow transition duration-300 cursor-pointer  rounded-xl px-7 py-7 sm:w-[350px] m-5">
                <div class="flex items-start mb-4">
                    <h3 class="text-xl text-primary font-bold">04</h3>
                    <h4 class="font-semibold text-lg ml-2">Login</h4>
                </div>
                <p class="text-sm">Apabila akun Anda telah aktif, silakan login untuk dapat menyampaikan pengaduan, klik
                    disini untuk login.</p>
            </div>
            <div
                class="card shadow-lg hover:shadow transition duration-300 cursor-pointer  rounded-xl px-7 py-7 sm:w-[350px] m-5">
                <div class="flex items-start mb-4">
                    <h3 class="text-xl text-primary font-bold">05</h3>
                    <h4 class="font-semibold text-lg ml-2">Sampaikan pengaduan</h4>
                </div>
                <p class="text-sm">Baca dengan seksama penjelasan mengenai jenis pengaduan yang akan Anda sampaikan,
                    apabila telah yakin klik tombol “Lakukan Pengaduan”.</p>
            </div>
            <div
                class="card shadow-lg hover:shadow transition duration-300 cursor-pointer  rounded-xl px-7 py-7 sm:w-[350px] m-5">
                <div class="flex items-start mb-4">
                    <h3 class="text-xl text-primary font-bold">06</h3>
                    <h4 class="font-semibold text-lg ml-2">Menerima nomor Tiket</h4>
                </div>
                <p class="text-sm">Pengaduan yang Anda sampaikan akan mengalami validasi, apabila valid nomor tiket
                    pengaduan akan dikirim ke email Anda.</p>
            </div>
            <div
                class="card shadow-lg hover:shadow transition duration-300 cursor-pointer  rounded-xl px-7 py-7 sm:w-[350px] m-5">
                <div class="flex items-start mb-4">
                    <h3 class="text-xl text-primary font-bold">07</h3>
                    <h4 class="font-semibold text-lg ml-2">Telusuri pengaduan</h4>
                </div>
                <p class="text-sm">Telusuri status penanganan pengaduan dengan memasukkan nomor tiket pengaduan yang
                    telah Anda terima.</p>
            </div>
        </div>
    </div>
    <div class="berita font-poppins my-10">
        <div class="text-center my-10">
            <h1 class="text-3xl font-bold text-primary">Berita</h1>
            <p class="text-sm mt-3">Berita terbaru dan terhangat terkait dengan kasus kekerasan seksual di Indonesia.</p>
        </div>
        <div class="flex justify-center lg:flex-row flex-col lg:items-start items-center lg:p-0 p-3">
            <div class="card-berita-primary lg:w-[350px] w-full shadow-lg m-2 rounded-lg">
                <div class="bg-cover bg-center w-full h-[200px] rounded-t-lg"
                    style="background-image: url('https://images.unsplash.com/photo-1511608170515-b4557034155c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
                </div>
                <div class="p-3">
                    <h3 class="font-semibold text-md mb-3">2 Pelajar di Sumbawa Jadi Korban Kekerasan Seksual oleh
                        Seorang Fotografer
                    </h3>
                    <div class="flex items-center">
                        <img src="/images/home/logo-detik.png" class="w-10">
                        <div class="ml-2">
                            <p class="font-semibold text-[12px]">Detik.com</p>
                            <p class="text-[10px]">12 Juni 2021</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards-berita-secondary lg:w-fit w-full">
                <a href="/"
                    class="lg:w-[450px] w-full m-2 rounded-lg flex items-center hover:opacity-90 transition duration-300">
                    <div class="bg-cover bg-center w-[50%] min-h-[120px] rounded-lg"
                        style="background-image: url('https://images.unsplash.com/photo-1511608170515-b4557034155c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
                    </div>
                    <div class="p-1 ml-3">
                        <h3 class="font-semibold text-md mb-3">2 Pelajar di Sumbawa Jadi Korban Kekerasan Seksual oleh
                            Seorang Fotografer
                        </h3>
                        <div class="flex items-center">
                            <img src="/images/home/logo-detik.png" class="w-10">
                            <div class="ml-2">
                                <p class="font-semibold text-[12px]">Detik.com</p>
                                <p class="text-[10px]">12 Juni 2021</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/"
                    class="lg:w-[450px] w-full m-2 rounded-lg flex items-center hover:opacity-90 transition duration-300">
                    <div class="bg-cover bg-center w-[50%] min-h-[120px] rounded-lg"
                        style="background-image: url('https://images.unsplash.com/photo-1511608170515-b4557034155c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
                    </div>
                    <div class="p-1 ml-3">
                        <h3 class="font-semibold text-md mb-3">2 Pelajar di Sumbawa Jadi Korban Kekerasan Seksual oleh
                            Seorang Fotografer
                        </h3>
                        <div class="flex items-center">
                            <img src="/images/home/logo-detik.png" class="w-10">
                            <div class="ml-2">
                                <p class="font-semibold text-[12px]">Detik.com</p>
                                <p class="text-[10px]">12 Juni 2021</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/"
                    class="lg:w-[450px] w-full m-2 rounded-lg flex items-center hover:opacity-90 transition duration-300">
                    <div class="bg-cover bg-center w-[50%] min-h-[120px] rounded-lg"
                        style="background-image: url('https://images.unsplash.com/photo-1511608170515-b4557034155c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
                    </div>
                    <div class="p-1 ml-3">
                        <h3 class="font-semibold text-md mb-3">2 Pelajar di Sumbawa Jadi Korban Kekerasan Seksual oleh
                            Seorang Fotografer
                        </h3>
                        <div class="flex items-center">
                            <img src="/images/home/logo-detik.png" class="w-10">
                            <div class="ml-2">
                                <p class="font-semibold text-[12px]">Detik.com</p>
                                <p class="text-[10px]">12 Juni 2021</p>
                            </div>
                        </div>
                    </div>
                </a>
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

