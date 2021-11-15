<div>
    <div class="grid w-full mt-8">
        <div class="container flex px-5 bg-white rounded-lg shadow-md dark:bg-gray-800">
            
            <div class="flex items-baseline md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <img 
                    src="{{ (!empty($photo))? $photo->temporaryUrl():asset($user->main_company->company_logo)}}" 
                    class="object-cover w-36 h-36 rounded-full border-4 border-purple-200 filter drop-shadow-lg">

                <div class="mx-3">
                    <label class="flex items-center text-center justify-between px-4 py-2 text-sm font-medium leading-5 text-dark transition-colors duration-150 bg-gray-300 border border-transparent rounded-lg active:bg-gray-400 hover:bg-gray-400 focus:outline-none focus:shadow-outline-purple cursor-pointer">
                        <span>Browse Client Logo</span>
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            class="w-4 h-4 ml-2 -mr-1" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <input type="file" wire:model="photo" class="invisible" accept="image/png, image/jpeg" >
                    </label>
                </div>
            </div>

            <div class="grid md:w-4/5">
                <div class="md:ml-auto w-full relative">
                    <div class="px-3 mt-3">
                        <h4 class="my-1 dark:text-white">Name</h4>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input 
                                wire:model="clientName" 
                                type="text" 
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                placeholder="Client Name" 
                                autocomplete="off">
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="md:ml-auto w-full relative">
                    <div class="px-3 mt-3">
                        <h4 class="my-1 dark:text-white">ROC</h4>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input 
                                wire:model="roc" 
                                type="text" 
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                placeholder="ROC" 
                                autocomplete="off">
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="md:ml-auto w-full relative">
                    <div class="px-3 mt-3">
                        <h4 class="my-1 dark:text-white">Email</h4>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input 
                                wire:model="email" 
                                type="email" 
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                placeholder="email@customer.com" 
                                autocomplete="off">
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="md:ml-auto w-full relative">
                    <div class="px-3 mt-3">
                        <h4 class="my-1 dark:text-white">Contact</h4>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input 
                                wire:model="phoneNumber" 
                                type="text" 
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                placeholder="60123456789" 
                                autocomplete="off">
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="px-3 w-full mt-10 md-mt-5 relative mb-4">
                    <button 
                        wire:click="updateClientInfo()" 
                        wire:loading.attr="disabled"
                        class="px-4 py-2 text-lg font-medium leading-10 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        <span class="font-medium" wire:loading.remove wire:target="updateClientInfo">Create Customer</span>
                        <span  wire:loading wire:target="updateClientInfo" class="text-sm text-white">
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
