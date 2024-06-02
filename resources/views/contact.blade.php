<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Saling Jaga</title>
    @vite('public/css/style.css')
</head>
<body>
    @include('components.navbar')
    <div class="flex min-h-screen w-full flex-col-reverse lg:flex-row justify-between">
        <div class="lg:mx-32 lg:w-[30%] w-full lg:pt-[150px]">
            <div class=" lg:mt-10 items-center flex flex-col lg:w-full">
                
                <div class="w-full lg:px-12 px-8">
                    <h1 class="text-3xl text-primary font-bold mb-5 py-5">KONTAK</h1>
                    <ul class="w-full cursor-pointer">
                        <a href="http://wa.me/6287852566158">
                            <li class="rounded-md my-5 py-2 mb-5 items-center bg-primary hover:bg-primary-lighter transition duration-300
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/phone.svg" alt=""></span>
                                <span class="px-5 text-xl min-w-[150px]">WhatsApp</span>
                            </li>
                        </a>
                        
                        <a href="https://www.instagram.com/zauhair.jubs/">
                            <li class="rounded-md py-2 mb-5 items-center  bg-primary hover:bg-primary-lighter transition duration-300
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/instagram.svg" alt=""></span>
                                <span class="px-5 text-xl min-w-[150px]">Instagram</span>
                            </li>
                        </a>

                        <a href="mailto:zauhairdy@gmail.com">
                            <li class="rounded-md py-2 mb-5 items-center  bg-primary hover:bg-primary-lighter transition duration-300
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/mail.svg" alt=""></span>
                                <span class="px-5 text-xl min-w-[150px]">Email</span>
                            </li>
                        </a>

                        <a href="https://twitter.com/zauhair_jubs">
                            <li class="rounded-md py-2 mb-5 items-center  bg-primary hover:bg-primary-lighter transition duration-300
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/twitter.svg" alt=""></span>
                                <span class="px-5 text-xl min-w-[150px]">Twitter</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div style="background-image: url('/images/Background.svg')" class="bg lg:w-[50%] flex items-center justify-center w-full">
            <iframe class="rounded-xl mt-20 w-[400px] h:[300px] lg:mr-10 lg:w-[500px] lg:h-[300px] justify-center" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4316200588405!2d112.61250126406294!3d-7.95426908145646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827994694b27%3A0x4eb4fed2fe1b7977!2sGedung%20A%20Fakultas%20Ilmu%20Komputer%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1669711628934!5m2!1sid!2sid"  
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
    </div>
    @include('components.footer')
</body>
</html>