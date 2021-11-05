@include('dashboard.components.template.meta')
<title>
    @yield('page-title') - @yield('page-subtitle')
</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('windmill/assets/css/tailwind.output.css') }}" />
@livewireStyles

@stack('styles')
@stack('prescripts')