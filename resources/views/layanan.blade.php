@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-start lg:pt-40 pt-32 lg:px-20 md:px-10 px-5 w-full">
        <div class="lg:w-[80%] w-full mx-auto mb-10">
            <form method="post" action="/laporan" class="rounded-xl p-10"
                style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                @csrf
                <h2 class="capitalize text-primary font-bold text-lg">form pengaduan online</h2>
                <hr class="my-4 bg-black h-[2px]">
                <p class="mb-4 font-semibold">Field dengan tanda "<span class="text-red-300">*</span>"" wajib untuk diisi,
                    pastikan data sudah diisi dengan benar</p>

                <div>
                    <h2 class="text-primary font-bold text-lg mb-10">Data Pengadu/Pelapor</h2>
                    <div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Nama Pelapor<span class="text-red-300">*</span></label>
                            <input required name="nama_pelapor" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: Agus Setiawan" value="{{ old('title') }}">
                                @error('nama_pelapor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Jenis Kelamin<span class="text-red-300">*</span></label>
                            <div class="lg:min-w-[65%] lg:w-fit w-full">
                                <input required type="radio" name="gender_pelapor" class="p-2 @error('gender_pelapor') is-invalid @enderror" value="laki-laki">
                                <label for="laki-laki">Laki - laki</label>
                                <input required type="radio" name="gender_pelapor" class="@error('gender_pelapor') is-invalid @enderror" value="perempuan">
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Nomor identitas<span class="text-red-300">*</span></label>
                            <input required name="no_iden_pelapor" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: 12345">
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Program Studi pelapor<span class="text-red-300">*</span></label>
                            <select name="prodi_pelapor" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: 12345">
                                <option value="TI">TI</option>
                                <option value="TIF">TIF</option>
                                <option value="SI">SI</option>
                                <option value="PTI">PTI</option>
                                <option value="TEKKOM">TEKKOM</option>
                            </select>
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Nomor HP Pelapor<span class="text-red-300">*</span></label>
                            <input required name="no_hp_pelapor" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: 081xxxxxxxxx">
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Email Pelapor<span class="text-red-300">*</span></label>
                            <input required name="email_pelapor" type="email"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: agussetiawan@gmail.com">
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Nama Korban<span class="text-red-300">*</span></label>
                            <input required name="nama_korban" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: Agus Setiawan">
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Jenis Kelamin<span class="text-red-300">*</span></label>
                            <div class="lg:min-w-[65%] lg:w-fit w-full">
                                <input required type="radio" name="gender_korban" class="p-2" value="laki-laki">
                                <label for="laki-laki">Laki - laki</label>
                                <input required type="radio" name="gender_korban" value="perempuan">
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
            
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Nomor identitas korban<span class="text-red-300">*</span></label>
                            <input required name="no_iden_korban" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: 12345">
                        </div>

                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Prodi Korban<span class="text-red-300">*</span></label>
                            <select name="prodi_korban" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: 12345">
                                <option value="TI">TI</option>
                                <option value="TIF">TIF</option>
                                <option value="SI">SI</option>
                                <option value="PTI">PTI</option>
                                <option value="TEKKOM">TEKKOM</option>
                            </select>
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Nomor HP Korban<span class="text-red-300">*</span></label>
                            <input required name="no_hp_korban" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: 081xxxxxxxxx">
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Email Korban<span class="text-red-300">*</span></label>
                            <input required name="email_korban" type="email"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Contoh: agussetiawan@gmail.com">
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Perihal<span class="text-red-300">*</span></label>
                            <input required name="perihal" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="perihal">
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Lokasi Kejadian<span class="text-red-300">*</span></label>
                            <div class="lg:w-[65%] w-full">
                                <textarea required name="lokasi_kejadian"
                                    class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                    placeholder="tempat kejadian perkara"></textarea>
                            </div>
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Deskripsi Kejadian<span class="text-red-300">*</span></label>
                            <div class="lg:w-[65%] w-full">
                                <textarea required name="deskripsi_kejadian"
                                    class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                    placeholder="ceritakan permasalahan anda di sini..."></textarea>
                            </div>
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Tanggal Waktu Kejadian<span class="text-red-300">*</span></label>
                            <textarea required name="tgl_waktu_kejadian" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="Uraikan tanggal dan waktu kejadian"></textarea>
                        </div>
                        <div class="name flex lg:flex-row flex-col items-center justify-between flex-wrap my-5">
                            <label class="lg:w-[30%] lg:mb-0 mb-3 text-left w-full">Gambar</label>
                            <input required name="image" type="text"
                                class="lg:w-[65%] w-full placeholder:text-sm p-2 rounded-lg border-2 transition duration-200 border-gray-400 placeholder:text-gray-400"
                                placeholder="paste url gambar pendukung keterangan anda di sini">
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="flex items-center rounded-md bg-primary hover:opacity-80 transition duration-300 text-white px-5 py-3 focus:ring-white focus:ring-4 font-semibold">
                    <p class="mr-2">Kirim</p>
                    {{-- <x-fas-paper-plane class="text-white w-5" /> --}}
                </button>
            </form>
        </div>
    </div>
@endsection
