<div>
    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Invoice Amount
    </p>
    @if (count($userInvoices) >1 )
        @foreach ($userInvoices as $invoice)
            <div class="-m-2 text-left">
                <div class="p-2">
                <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-sm">
                    <span class="inline-flex bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">{{ ($invoice->currency)?$invoice->currency->ISO:'undefined' }}</span>
                    <span class="inline-flex px-2">{{ number_format($invoice->total,2) }}</span>
                </div>
                </div>
            </div>
        @endforeach   
    @else
        <div class="-m-2 text-left">
            <div class="p-2">
                <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-sm">
                    <span class="inline-flex bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">OOPS! its empty</span>
                    <span class="inline-flex px-2"><a href="{{ route('dashboard.invoices.new') }}">Create a new invoice</a></span>
                </div>
            </div>
        </div>
    @endif
</div>
