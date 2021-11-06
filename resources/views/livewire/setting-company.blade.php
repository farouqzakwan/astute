<div>
    <div class="flex px-4 py-3 mb-8 mt-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <div class="md:w-1/2 px-2 ">

            <img 
                src="{{ (!empty($companyLogo))? $companyLogo->temporaryUrl():($user->main_company->company_logo ? asset('storage/'.$user->main_company->company_logo):asset('image/icons/image.png')) }}" 
                class="object-cover w-36 h-36 mt-5 mx-auto rounded-full border-4 border-purple-200 filter drop-shadow-lg">
            
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
                    <input type="file" wire:model="companyLogo" class="invisible" accept="image/png, image/jpeg" >
                </label>
            </div>

            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">Company Name</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="companyName"
                        type="text" 
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
            </div>
    
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">ROC</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="roc"
                        type="text" 
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                          </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 px-2">
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">Address 1</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="address"
                        type="text" 
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
            </div>
    
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">Address 2</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="address2"
                        type="text" 
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
            </div>
    
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">City</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="city"
                        type="text"
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
            </div>
    
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">State</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="state"
                        type="text" 
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
            </div>
    
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">Postcode</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="postcode"
                        type="text" 
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
            </div>
    
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <h4 class="my-1 text-gray-400 dark:text-white">Country</h4>
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                    <input 
                        wire:model="country"
                        type="text" 
                        class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                        placeholder="" 
                        autocomplete="off">
                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="px-3 w-full mt-10 md-mt-5 relative mb-4">
                <button 
                    wire:click="updateProfile()" 
                    class="px-4 py-2 text-lg font-medium leading-10 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <span wire:loading.remove wire:target="updateProfile" class="font-medium">Update Company Profile</span>
                    <span  wire:loading wire:target="updateProfile" class="text-sm text-white">
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