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

        {{-- software changelog--}}
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">

              <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">V0.0.1 - Public Beta Release</h2>
                    <p class="leading-relaxed">
                        First release to the public.
                        <ul>
                            <li>- Release basic features of the application</li>
                        </ul>
                    </p>
                  </div>
                </div>
              </div>

            </div>
        </section>
        {{-- software changelog --}}

        @include('landing.components.footer')
        @livewireScripts
    </body>
</html>
