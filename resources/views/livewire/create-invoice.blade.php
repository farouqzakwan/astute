<div>
    {{-- @livewire('invoices.action-widgets') --}}
    <div class="px-4 py-3 mb-8 mt-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="grid mb-8 md:grid-cols-2">
            <div class="items-baseline md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <img 
                    src="{{ asset($userCompany['companyLogo']) }}" 
                    class="object-cover w-36 h-36 rounded-full border-4 border-purple-200 filter drop-shadow-lg">
                <br>
                <div class="mx-3">
                    <label class="flex items-center text-center justify-between px-4 py-2 text-sm font-medium leading-5 text-dark transition-colors duration-150 bg-gray-300 border border-transparent rounded-lg active:bg-gray-400 hover:bg-gray-400 focus:outline-none focus:shadow-outline-purple cursor-pointer">
                        <span>Browse Company Logo</span>
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            class="w-4 h-4 ml-2 -mr-1" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <input type="file" name="" class="invisible" accept="image/png, image/jpeg" >
                    </label>
                </div>
            </div>

            <p class="text-right p-4 dark:text-white ">
                <input type="text" value="{{ $userCompany['name'] ?? '' }}" placeholder=""><br>
                <input type="text" value="{{ $userCompany['address']['address1'] ?? ''}}" placeholder=""> <br>
                <input type="text" value="{{ $userCompany['address']['address2'] ?? ''}}" placeholder=""><br>
                <input type="text" value="{{ $userCompany['address']['postcode'] ?? '' }}" placeholder=""><br>
                <input type="text" value="{{ $userCompany['address']['city'] ?? '' }}" placeholder=""><br>
                <input type="text" value="{{ $userCompany['address']['State'] ?? '' }}" placeholder="">
            </p>
        </div>
    
        <hr>
    
        <div class="grid mb-8 md:grid-cols-2">
            <div class="p-4 dark:text-white">
                @livewire('invoices.company-search')
            </div>
            
            <div class="p-4">
                <div class="grid md:grid-cols-2">
                    <h6 class="font-semibold dark:text-white mt-8 ">Invoice Number </h6> 
                    <input 
                    wire:model="invoiceNumber"
                    class="inline-block w-50 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                    placeholder="Invoice Number" 
                    type="text">
                </div>
                
                <div class="grid md:grid-cols-2">
                    <h6 class="font-semibold dark:text-white mt-8">Invoice Date</h6> 
                    <input 
                        wire:model="invoiceDate"
                        class="inline-block w-50 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        placeholder="Invoice Date" 
                        type="date">
                </div>
    
                <div class="grid md:grid-cols-2">
                    <h6 class="font-semibold dark:text-white mt-8">Payment Due</h6> 
                    <input 
                        wire:model="invoiceDue"
                        class="inline-block w-50 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        placeholder="Invoice Date" 
                        type="date">
                </div>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="w-full overflow-x-auto">
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
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                <input 
                                    rows="1" 
                                    type="text" 
                                    class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input overflow-y-auto" 
                                    placeholder="Item" 
                                    autocomplete="off">
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <input 
                                    type="text" 
                                    class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                    placeholder="Description" 
                                    autocomplete="off">
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span class="font-semibold text-right">
                                    <input 
                                        type="text" 
                                        class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                        placeholder="Amount" 
                                        autocomplete="off">
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm text-right">
                                <input 
                                    type="text" 
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
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            <input wire:model="item" type="text" class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input overflow-y-auto" placeholder="Item" autocomplete="off">
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <input wire:model="description" type="text" class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Description" autocomplete="off">
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span class="font-semibold text-right">
                                <input wire:model="price" type="text" class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Amount" autocomplete="off">
                            </span>
                        </td>
                        <td class="px-4 py-3 text-sm text-right">
                            <input wire:model="quantity" type="text" class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Quantity" autocomplete="off">
                        </td>
                        <td class="px-4 py-3 text-sm text-right">
                            <span class="font-semibold text-right dark:text-white">
                                {{ number_format($total,2) }}
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-right px-4 py-3">
                            <span class="font-semibold dark:text-white">Tax</span>
                        </td>
                        <td colspan="2" class="px-4 py-3 text-sm">
                            <select class="block w-full mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                                @foreach ($taxes as $tax)
                                    <option>{{ $tax->name }}  {{ $tax->rate }}%</option>
                                @endforeach
                            </select>
                        </td>
                        <td class="px-4 py-3 text-sm text-right">
                            <span class="font-semibold text-right dark:text-white">
                                0.00
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
    </div>
    
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="grid mb-8 md:grid-cols-2">
            <div class="p-4 dark:text-white">
                
            </div>
            <div class="p-4">
                <div class="grid md:grid-cols-2">
                    <h6 class="font-semibold dark:text-white mt-8 ">Subtotal </h6> 
                    <span class="text-font-semibold dark:text-white mt-8">{{ number_format($subtotal,2) }}</span>
                </div>
                
                <div class="grid md:grid-cols-2">
                    <h6 class="font-semibold dark:text-white mt-8">GST 8%</h6> 
                    <span class="text-font-semibold dark:text-white mt-8">0.00</span>
                </div>
    
                <div class="grid md:grid-cols-2">
                    <h6 class="font-semibold dark:text-white mt-8">Currency</h6> 
                    <select name="" id="" class="inline-block w-50 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outine-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                       @foreach ($currencies as $currency)
                            <option value="{{ $currency->id }}">{{ $currency->ISO }} - {{ $currency->name }}</option>
                       @endforeach
                    </select>
                </div>

                <div class="grid mt-5 md:grid-cols-2">
                    <button 
                            wire:click="saveInvoice()" 
                            wire:loading.attr="disabled"
                            class="px-4 py-2 text-lg font-medium leading-10 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            <span class="font-medium" wire:loading.remove wire:target="saveInvoice">Create Invoice</span>
                            <span  wire:loading wire:target="saveInvoice" class="text-sm text-white">
                                <div class="la-ball-newton-cradle text-white">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>