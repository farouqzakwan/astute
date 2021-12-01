<div>
    <table class="w-full">
        <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">Item</th>
            <th class="px-4 py-3 w-1/2">Description</th>
            <th class="px-4 py-3">Price</th>
            <th class="px-4 py-3">Quantity</th>
            <th class="px-4 py-3">Total</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($invoiceItems as $key => $invoicedItem)
                <tr class="text-gray-700 dark:text-gray-400" wire:key="{{ $key }}">
                    <td class="px-4 py-3 text-sm">
                        <input 
                            wire:model="invoiceItems.{{ $loop->index }}.item"
                            rows="1" 
                            type="text" 
                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input overflow-y-auto" 
                            placeholder="Item" 
                            autocomplete="off">
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <input 
                            wire:model="invoiceItems.{{ $loop->index }}.description"
                            type="text" 
                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="Description" 
                            autocomplete="off">
                    </td>
                    <td class="px-4 py-3 text-xs">
                        <span class="font-semibold text-right">
                            <input 
                                wire:model="invoiceItems.{{ $loop->index }}.price"
                                type="number" 
                                class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                placeholder="Amount" 
                                autocomplete="off">
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm text-right">
                        <input 
                            wire:model="invoiceItems.{{ $loop->index }}.quantity"
                            type="number" 
                            class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="Quantity" 
                            autocomplete="off">
                    </td>
                    <td class="px-4 py-3 text-sm text-right">
                        <span class="font-semibold text-right dark:text-white">
                            {{ number_format($invoicedItem['total'] ?? 0,2) }}
                        </span>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2" class="text-right px-4 py-3">
                    <span class="font-semibold dark:text-white">Tax</span>
                </td>
                <td colspan="2" class="px-4 py-3 text-sm">
                    <select 
                        wire:model="selectedTax"
                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        @foreach ($taxes as $tax)
                            <option value="{{ $loop->index }}">{{ $tax->name }}  {{ $tax->rate }}%</option>
                        @endforeach
                    </select>
                </td>
                <td class="px-4 py-3 text-sm text-right">
                    <span class="font-semibold text-right dark:text-white">
                        {{ number_format($subtotal,2) }}
                    </span>
                </td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">
                    <a 
                        wire:click="addItem" 
                        class="w-100 duration-150 cursor-pointer text-purple-800 font-semibold border-dashed border-light-blue-500 border-2 py-3 rounded block align-middle px-auto hover:bg-purple-400 hover:text-white">
                        <span class="ml-3 capitalize">Add an item</span> 
                    </a>
                </th>
            </tr>
        </tfoot>
    </table>
</div>
