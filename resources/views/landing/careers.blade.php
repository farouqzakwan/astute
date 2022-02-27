<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config('app.name') }}</title>
        <link href="/css/app.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
        <style>
            body 
            {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @livewireStyles
    </head>
    <body class="bg-gray-200">
        @include('landing.components.header')
        
        {{-- careers page --}}
        <section class="py-24 bg-white" style="background-image: url('flex-ui-assets/elements/pattern-white.svg'); background-position: center;">
            <div class="container px-4 mx-auto">
              <div class="max-w-4xl mx-auto mb-12 text-center">
                <span class="inline-block py-px px-2 mb-4 text-xs leading-5 text-green-500 bg-green-100 font-medium uppercase rounded-full shadow-sm">We are hiring</span>
                <h3 class="mb-4 text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter">Join our team</h3>
                <p class="text-lg md:text-xl text-coolGray-500 font-medium">Our philosophy is simple &mdash; hire a team of diverse, passionate people and foster a culture that empowers you to do you best work.</p>
              </div>
              <div class="max-w-3xl mx-auto">

                <a class="group block mb-6" href="#">
                  <div class="flex items-center justify-between flex-wrap p-10 bg-coolGray-50 group-hover:bg-coolGray-100 rounded-md shadow-md transition duration-200">
                    <div class="w-full md:w-1/2 mb-2 md:mb-0">
                      <h3 class="text-lg md:text-xl text-coolGray-800 group-hover:text-coolGray-900 font-semibold line-through">Front-end Developer</h3>
                      <small class="text-gray-400">Please visit us again. We will notify you when we open for new vacancy</small>
                    </div>
                    <div class="w-full md:w-1/2 md:text-right">
                      <div class="inline-flex items-center leading-6 text-red-500 group-hover:text-red-600 font-medium transition duration-200">
                        <span class="mr-2">Vacancy Closed</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>

                <a class="group block mb-6" href="#">
                  <div class="flex items-center justify-between flex-wrap p-10 bg-coolGray-50 group-hover:bg-coolGray-100 rounded-md shadow-md transition duration-200">
                    <div class="w-full md:w-1/2 mb-2 md:mb-0">
                      <h3 class="text-lg md:text-xl text-coolGray-800 group-hover:text-coolGray-900 font-semibold line-through">Back-end Developer</h3>
                      <small class="text-gray-400">Please visit us again. We will notify you when we open for new vacancy</small>

                    </div>
                    <div class="w-full md:w-1/2 md:text-right">
                      <div class="inline-flex items-center leading-6 text-red-500 group-hover:text-red-600 font-medium transition duration-200">
                        <span class="mr-2">Vacancy Closed</span>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>
          </section>


        {{-- careers page --}}
        @include('landing.components.footer')
        @livewireScripts
    </body>
</html>
