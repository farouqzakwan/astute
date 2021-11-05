<div>
    <div class="grid w-full mt-8">
        <div class="container flex px-5 bg-white rounded-lg shadow-md dark:bg-gray-800">
            
            <div class="grid md:w-full">
                <div class="md:ml-auto w-full relative">
                    <div class="px-3 mt-3">
                        <h4 class="my-1 dark:text-white">Tax Name</h4>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input 
                                wire:model="name" 
                                type="text" 
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                placeholder="Tax Name" 
                                autocomplete="off">
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="md:ml-auto w-full relative">
                    <div class="px-3 mt-3">
                        <h4 class="my-1 dark:text-white">Tax Rate</h4>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input 
                                wire:model="rate" 
                                type="text" 
                                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                                placeholder="Tax Rate" 
                                autocomplete="off">
                            <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
    
                
    
                <div class="px-3 w-full mt-10 md-mt-5 relative mb-4">
                    <button 
                        wire:click="saveRate()" 
                        wire:loading.attr="disabled"
                        class="px-4 py-2 text-lg font-medium leading-10 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        <span 
                            class="font-medium" 
                            wire:loading.remove 
                            wire:target="saveRate">Create Tax Rate</span>
                        <span  
                            wire:loading 
                            wire:target="saveRate" class="text-sm text-white">
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