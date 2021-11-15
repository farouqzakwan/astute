<div>    
    <div class="flex px-4 py-3 mb-8 mt-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="md:w-1/2 px-2 ">
            <img
                src="{{ (!empty($avatar))?$avatar->temporaryUrl():asset($user->main_company->company_logo) }}"
                class="object-cover w-36 h-36 mt-5 mx-auto rounded-full border-4 border-purple-200 filter drop-shadow-lg">
            <div class="mx-3">
                <label class="flex items-center text-center justify-between px-4 py-2 text-sm font-medium leading-5 text-dark transition-colors duration-150 bg-gray-300 border border-transparent rounded-lg active:bg-gray-400 hover:bg-gray-400 focus:outline-none focus:shadow-outline-purple cursor-pointer">
                    <span>Browse Profile Image</span>
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        class="w-4 h-4 ml-2 -mr-1" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <input type="file" wire:model="avatar" class="invisible" accept="image/png, image/jpeg" >
                </label>
            </div>
            <div class="md:ml-auto w-full md:mt-5 relative mb-4 mt-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.name') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="username" 
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.name') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.dob') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="dob"
                            type="date" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.dob') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">Mobile</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="mobile"
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            +60
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 px-2">
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.address1') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="address1"
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.address1') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.address2') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="address2"
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.address2') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.city') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="city"
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.city') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.state') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="state"
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.state') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.postcode') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="postcode"
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.postcode') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:ml-auto w-full mt-10 md:mt-5 relative mb-4">
                <div class="px-3 mt-3">
                    <h4 class="my-1 text-gray-400 dark:text-white">{{ __('profiles.forms.country') }}</h4>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input 
                            wire:model="country"
                            type="text" 
                            class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" 
                            placeholder="{{ __('profiles.form_placeholders.country') }}" 
                            autocomplete="off">
                        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-3 w-full mt-10 md-mt-5 relative mb-4">
                <button wire:click="updateProfile()" class="px-4 py-2 text-lg font-medium leading-10 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <span wire:loading.remove wire:target="updateProfile" class="font-medium">Update Profile</span>
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

    {{-- 
        <div class="absolute lg:w-1/3 md:w-1/2 inset-0 bg-gray-300">
            <iframe 
                width="100%" 
                height="100%" 
                frameborder="0" 
                marginheight="0" 
                marginwidth="0" 
                title="map" 
                scrolling="no" 
                src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={{ $city ?? 'Kuala Lumpur' }}&ie=UTF8&t=&z=14&iwloc=B&output=embed" 
                style="filter: grayscale(1) contrast(1.2) opacity(0.4);">
            </iframe>
        </div> 
    --}}
</div>