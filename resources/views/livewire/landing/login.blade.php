<div>
    <section class="flex flex-col items-center h-screen bg-blueGray-100 md:flex-row ">
        <div class="relative hidden w-full h-screen bg-blueGray-400 lg:block md:w-1/3 lg:w-2/3">
            <img src="{{ asset('/image/signin.jpg') }}" alt="" class="absolute object-cover w-full h-full">
            <div class="relative z-10 m-12 text-left">
            <a class="flex items-center w-32 mb-4 font-medium text-blueGray-900 title-font md:mb-10">
                <h2 class="text-lg font-bold tracking-tighter text-black uppercase duration-500 ease-in-out transform ttransition hover:text-lightBlue-500 dark:text-blueGray-400">{{ config('app.name') }}</h2>
            </a>
            <h1 class="mb-2 text-2xl font-semibold tracking-tighter text-black-700 tsm:text-5xl title-font"> Sent Invoices <br> Managing your teams and business </h1>
            </div>
        </div>
        <div class="flex w-full h-screen px-6 bg-white md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12 items-left justify-left">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <h2 class="mt-12 mb-2 text-2xl font-semibold tracking-tighter text-black sm:text-3xl title-font">Sign In</h2>
                <form class="mt-6" action="#" method="POST" wire:submit.prevent="signIn">
                    <div>
                        <label class="block text-medium font-medium leading-relaxed tracking-tighter text-blueGray-700">Email Address</label>
                        <input type="email" name="emailAddress" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-purple-200 focus:bg-transparent focus:border-purple-500 text-base outline-none text-purple-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wire:model="email" >
                        @error('email')
                            <p class="mt-1 text-xs italic text-black">{{ $message }}</p>
                        @enderror                        
                    </div>
                    <div class="mt-4">
                        <label class="block text-medium font-medium leading-relaxed tracking-tighter text-blueGray-700">Password</label>
                        <input type="password" name="password" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-purple-200 focus:bg-transparent focus:border-purple-500 text-base outline-none text-purple-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wire:model="password" >                        
                        @error('password')
                            <p class="mt-1 text-xs italic text-black">{{ $message }}</p>
                        @enderror  
                    </div>
                    <div class="mt-2 text-right">
                    <a href="#" class="text-sm font-semibold leading-relaxed text-blueGray-700 hover:text-black-700 focus:text-black-700">Forgot Password?</a>
                    </div>
                    <button type="submit" class="block w-full px-4 py-3 mt-6 mb-6 font-semibold text-white transition duration-500 ease-in-out transform rounded bg-gradient-to-r bg-purple-500 hover:bg-purple-600 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">Log In</button>
                </form>
            </div>
        </div>
    </section>
</div>