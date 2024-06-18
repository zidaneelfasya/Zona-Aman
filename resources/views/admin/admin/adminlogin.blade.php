<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('public/css/style.css')
</head>
<body>
    
    @if(session()->has('loginError'))
      <div id="info-popup" tabindex="-1" class="font-poppins popup-close bg-red overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full flex items-center justify-center">
        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
                <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
                    <h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">{{session('loginError')}}</h3>
                    <p class="text-lg">
                        Silakan masukkan ulang email dan password anda
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

    <div class="font-poppins flex w-full min-h-screen lg:flex-row flex-col-reverse">
        <div class = "lg:mx-20 lg:w-[50%] w-full" >            
            <div class = "lg:ml-20 mt-12 items-center flex flex-col lg:w-fit " >
                <h1 class = "lg:text-5xl lg:font-[600] text-4xl font-[600] lg:mb-5 mb-0`">Login dengan akun</h1>
                <form class= "lg:w-fit w-full lg:px-0 px-20" action="/admin/login/store" method = "post">
                    @csrf
                    <input class = "my-5 border-2  border-slate-700 block rounded-md lg:w-[500px] w-full pr-24 pl-5 py-2 @error('email') is-invalid @enderror"
                    type="text" id = "email" name = "email" placeholder = "Email" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input class = "my-5 border-2  border-slate-700 block rounded-md lg:w-[500px] w-full pr-24 pl-5 py-2"type="password" id = "password" name = "password" placeholder = "Password" required>

                <div class = "items-center flex flex-col w-full mt-8">
                    <div class = "w-full my-3">
                        <hr class = "border-black">
                        <div class="w-full flex justify-center">
                        <p class="-mt-3 text-center w-fit bg-white px-2">Lanjutkan dengan</p>
                        </div>
                    </div>

                    <div class = "flex mb-5">
                        <img src="/images/register/Google.svg" class = "bg-white border  w-10 p-2 rounded-md" alt="">
                        <img src="/images/register/Facebook.svg" class = "bg-[#1877F2] w-10 p-2 rounded-md mx-5" alt="">
                        <img src="/images/register/Apple.svg" class = "bg-black w-10 p-2 rounded-md" alt="">
                    </div>
                <button class="bg-pink-500 px-32 py-3 rounded-md text-white w-[200px] mb-5 flex items-center justify-center" type="submit">Login</button>
                </form>
                <p class="lg:mb-0 mb-8">Belum punya akun? <a href="/register" class="text-[#1877F2]">Register</a></p>
                </div>
            </div>
        </div>

        <div class="bg-[#FF7DA5] lg:w-[50%] flex items-center justify-center w-full">
        <img class="lg:w-[70%] w-[30%] lg:mr-0 mr-5" src="/images/register/saly-14.png" alt="">
        </div>

    </div>
    <script>
        const btnClose = document.querySelector('.btn-close');
        const popupClose = document.querySelector('.popup-close');

        btnClose.addEventListener('click', () => {
            popupClose.classList.add('hidden')
        })

    </script>
    
</body>
</html>