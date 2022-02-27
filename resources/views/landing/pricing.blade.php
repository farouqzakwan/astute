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

        {{-- pricing --}}
            <div class="antialiased max-w-6xl mx-auto my-12 bg-gray-200 px-8">
                <div class="relative block md:flex items-center">
                        <div class="w-full md:w-1/2 relative z-1 bg-gray-100 rounded shadow-lg overflow-hidden">
                            <div class="text-lg font-medium text-purple-500 uppercase p-8 text-center border-b border-gray-200 tracking-wide">Always Free</div>
                            <div class="flex justify-center mt-3">
                                <ul>
                                <li class="flex items-center">
                                    <div class="bg-purple-200 rounded-full p-2 fill-current text-purple-700">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-umbrella"><path class="primary" d="M11 3.05V2a1 1 0 0 1 2 0v1.05A10 10 0 0 1 22 13c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a10 10 0 0 1 9-9.95z"/><path class="secondary" d="M11 14a1 1 0 0 1 2 0v5a3 3 0 0 1-6 0 1 1 0 0 1 2 0 1 1 0 0 0 2 0v-5z"/></svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">No setup, monthly, or hidden fees</span>
                                </li>
                                <li class="flex items-center mt-3">
                                    <div class="bg-purple-200 rounded-full p-2 fill-current text-purple-700">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-shopping-bag"><path class="primary" d="M5 8h14a1 1 0 0 1 1 .92l1 12A1 1 0 0 1 20 22H4a1 1 0 0 1-1-1.08l1-12A1 1 0 0 1 5 8z"/><path class="secondary" d="M9 10a1 1 0 0 1-2 0V7a5 5 0 1 1 10 0v3a1 1 0 0 1-2 0V7a3 3 0 0 0-6 0v3z"/></svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">Full invoice features</span>
                                </li>
                                <li class="flex items-center mt-3">
                                    <div class="bg-purple-200 rounded-full p-2 fill-current text-purple-700">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-pie-chart"><path class="primary" d="M14 13h6.78a1 1 0 0 1 .97 1.22A10 10 0 1 1 9.78 2.25a1 1 0 0 1 1.22.97V10a3 3 0 0 0 3 3z"/><path class="secondary" d="M20.78 11H14a1 1 0 0 1-1-1V3.22a1 1 0 0 1 1.22-.97c3.74.85 6.68 3.79 7.53 7.53a1 1 0 0 1-.97 1.22z"/></svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">Real-time invoice reporting</span>
                                </li>
                                </ul>
                            </div>
                            <a class="block flex items-center justify-center bg-gray-200 hover:bg-gray-300 p-8 text-md font-semibold text-gray-800 uppercase mt-16" href="{{ route('register') }}">
                                <span>Create account</span>
                                <span class="font-medium text-gray-700 ml-2">➔</span>
                            </a>
                        </div>
                    <div class="w-full md:w-1/2 relative z-0 px-8 md:px-0 md:py-16">
                    <div class="bg-purple-700 text-white rounded-b md:rounded-b-none md:rounded-r shadow-lg overflow-hidden">
                        <div class="text-lg font-medium uppercase p-8 text-center border-b border-purple-800 tracking-wide">Enterprise</div>
                        <div class="text-center text-sm sm:text-md max-w-sm mx-auto mt-8 text-purple-200 px-8 lg:px-0">
                        {{ config('app.name') }} offers everything you needed to run small and medium enterpise.
                        </div>
                        <div class="mt-8 border border-purple-800 mx-8 lg:mx-16 flex flex-wrap">
                            <div class="flex items-center justify-center w-1/2 text-center p-4 border-r border-b border-purple-800">Quotation and Invoices</div>
                            <div class="flex items-center justify-center w-1/2 text-center p-4 border-b border-purple-800">Accounting</div>
                            <div class="flex items-center justify-center w-1/2 text-center p-4 border-r border-purple-800">Project Management</div>
                            <div class="flex items-center justify-center w-1/2 text-center p-4">Email Marketing</div>
                        </div>
                        <a class="block flex items-center justify-center bg-purple-800 hover:bg-purple-700 p-8 text-md font-semibold text-gray-300 uppercase mt-8" href="#">
                            <span>Create Account</span>
                            <span class="font-medium text-gray-300 ml-2">➔</span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        {{-- pricing --}}

        @include('landing.components.footer')
        @livewireScripts
    </body>
</html>
