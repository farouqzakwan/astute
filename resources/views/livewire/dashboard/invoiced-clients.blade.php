<div>
    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Invoiced Clients
    </p>
    @if (count($userInvoiceBuyers) >1 )
        @foreach ($userInvoiceBuyers as $invoice)
            <div class="-m-2 text-left">
                <div class="p-2">
                <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                    <span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">{{ $invoice->name ?? 'undefined' }}</span>
                    <span class="inline-flex px-2">{{ $invoice->total }}</span>
                </div>
                </div>
            </div>
        @endforeach   
    @else
        <div class="-m-2 text-left">
            <div class="p-2">
                <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                    <span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">OOPS! its empty</span>
                    <span class="inline-flex px-2"><a href="{{ route('dashboard.invoices.new') }}">Create a new invoice</a></span>
                </div>
            </div>
        </div>
    @endif
</div>
