<div>
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-1 mr-4 bg-orange-100 rounded-full dark:bg-orange-500">
            <img src="{{ asset('/image/icons/dashboard/receipt.png') }}" />
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Total Invoices
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $totalInvoices}}
            </p>
        </div>
    </div>
</div>
