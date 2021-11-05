<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400 text-center">
      <a class="ml-6 text-lg font-bold text-purple-800 dark:text-gray-200" href="#">
        {{ config('app.name') }}
      </a>
      <ul class="mt-6">
        <li class="relative px-6 py-3 {{ (Route::is('dashboard.index'))?'bg-purple-50 dark:bg-gray-900':'' }}">
          @if (Route::is('dashboard.index'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ Route::is('dashboard.index')?'text-purple-600':'' }} hover:text-purple-800 dark:hover:text-purple-200"
            href="{{ url('/dashboard') }}"
          >
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                ></path>
              </svg>
            <span class="ml-4">Dashboard</span>
          </a>
        </li>
      </ul>
      <ul>
          <li class="relative px-6 py-3 {{ (Route::is('dashboard.invoices.*'))?'bg-purple-50 dark:bg-gray-900':'' }}">
            @if (Route::is('dashboard.invoices.*'))
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
            @endif
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ Route::is('dashboard.invoices.*')?'text-purple-600':'' }} hover:text-purple-800 dark:hover:text-purple-200"
              href="{{ url('invoices') }}">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              <span class="ml-4">Invoices</span>
            </a>
          </li>
          
          <li class="relative px-6 py-3 {{ (Route::is('dashboard.customers.*'))?'bg-purple-50 dark:bg-gray-900':'' }}">
            @if (Route::is('dashboard.customers.*'))
              <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
            @endif
            <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ Route::is('dashboard.customers.*')?'text-purple-600':'' }} hover:text-purple-800 dark:hover:text-purple-200"
                href="{{ url('/customers') }}"
                >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="ml-4">Clients</span>
            </a>
          </li>
      </ul>
    </div>
</aside>