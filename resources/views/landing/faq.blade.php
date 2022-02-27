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

        {{-- faq contents --}}
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">

              <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Is it really free?</h2>
                    <p class="leading-relaxed">
                        All features for managing invoices are free including dashboard reporting and mailing invoices to the customer. Payment Gateway fees may varies depends on payment gateway providers.
                    </p>
                  </div>
                </div>
              </div>

              <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                  <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">What is payment gateway and why I need to sign up for it?</h2>
                    <p class="leading-relaxed">
                        Payment gateway are system providers that provide service to collect payments on your behalf. 
                        You dont need to sign up for a payment gateway unless you want {{ config('app.name') }} to handle payment for your invoices.
                    </p>
                  </div>
                </div>
              </div>

            </div>
        </section>
        {{-- faq contents --}}

        @include('landing.components.footer')
        @livewireScripts
    </body>
</html>
