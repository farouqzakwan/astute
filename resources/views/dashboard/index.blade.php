<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
      @include('dashboard.components.template.head')
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      @include('dashboard.components.template.sidebar')
      <div class="flex flex-col flex-1">
        @include('dashboard.components.template.header')
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            @stack('contents')
            @include('dashboard.components.notification')
          </div>
        </main>
      </div>
    </div>
    <script defer src="{{ asset('js/alpinejs/cdn.min.js') }}"></script>
    <script src="{{ asset('js/alpinejs/alpine.min.js') }}"></script>
    {{-- 
      <script defer src="https://unpkg.com/@alpinejs/trap@3.x.x/dist/cdn.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> 
    --}}
    
    @livewireScripts
    <script src="{{ asset('windmill/assets/js/init-alpine.js')}}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    @stack('scripts')
  </body>
</html>