<div>
    <div class="w-full mt-8 bg-white dark:bg-gray-800 py-5 px-3 lg:flex lg:flex-row-reverse">
        <a href="{{ route('dashboard.invoices.new') }}" 
          class="flex items-center  px-4 py-2 text-sm font-medium leading-5 
          text-white transition-colors duration-150 
          bg-purple-600 border border-transparent rounded-lg 
          active:bg-purple-600 
          hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Create Invoices</span>
        </a>
    </div>
  
    <div class="mt-8 rounded-lg shadow-xs">
        <div class="container">
          <table class="overflow-hidden w-full">
            <thead>
              <tr class="text-xs 
                font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-5">Client</th>
                  <th class="px-4 py-4">Amount</th>
                  <th class="px-4 py-4">Status</th>
                  <th class="px-4 py-4">Payment Due</th>
                  <th class="px-4 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($invoices as $invoice)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <label></label>
                        <div class="flex items-center text-sm">
                          <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                            <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{ $invoice->user_invoice_buyer->name ?? '' }}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              {{ $invoice->invoice_number ?? '' }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <label></label>
                        <span class="font-bold">{{ $invoice->currency->ISO ?? '' }}</span> {{ number_format($invoice->total ?? 0,2)}}
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <label></label>
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                          Approved
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <label></label>
                        {{ $invoice->payment_due ? date('M d, Y',strtotime($invoice->payment_due)):'' }}
                      </td>
                      <td class="px-4 py-3 static">
                        <label></label>
                        {{-- <div class="absolute" x-data="{ isOpen: false }">
                          <button 
                              @click = "isOpen = !isOpen " 
                              class="focus:outline-none hover:bg-gray-50 px-4 rounded-lg"
                              >
                              <svg 
                                  xmlns="http://www.w3.org/2000/svg" 
                                  class="h-5 w-5" 
                                  :class="{'rotate-90': isOpen}" 
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                              </svg>
                          </button>
                          <div 
                              x-show="isOpen" 
                              @click.away="isOpen = false"
                              class="absolute block right-0 w-48 mr-10 z-50 bg-gray-50 rounded-lg shadow-xl">
                              <a href="" class="block py-2 px-4 text-dark hover:text-purple-600 leading-5 hover:bg-purple-100"> edit</a>
                              <a href="" class="block py-2 px-4 text-dark hover:text-purple-600 leading-5 hover:bg-purple-100"> delete</a>
                          </div>
                          
                        </div> --}}
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        @include('dashboard.components.template.table_footer')
    </div>
</div>
