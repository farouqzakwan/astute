<div>
    <div class="w-full mt-8 bg-white dark:bg-gray-800 py-5 px-3 flex flex-row-reverse">
        <a href="{{ route('dashboard.customers.new') }}" class="flex items-center justify-left px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Create Customers</span>
        </a>
    </div>

    <div class="w-full mt-8 rounded-lg shadow-xs">
        <div class="w-full">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">ROC</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Contact</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($listing as $client)
                        <tr class="text-gray-700 dark:text-gray-400 ">
                            <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block bg-purple-100 p-1">
                                    <img 
                                        src="{{ asset('image/icons/image.png') }}" 
                                        alt=""
                                        class="object-cover w-full h-full rounded-full">    
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                <div>
                                <p class="font-semibold">{{ $client->name }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{ $client->business_nature }}
                                </p>
                                </div>
                            </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $client->roc }}
                            </td>
                            <td class="px-4 py-3 text-xs">
                                {{ $client->email }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $client->phone_number }}
                            </td>
                            <td class="px-4 py-3 static">
                                <div class="absolute" x-data="{ isOpen: false }">
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
                                    
                                </div>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('dashboard.components.template.table_footer')
    </div>
</div>
