<div>
    <section class="flex flex-col items-center h-screen md:flex-row">
        <div class="container mx-auto">
            <div class="flex justify-center px-2 py-6 ">
            <div class="flex w-full rounded-lg xl:w-3/4 lg:w-11/12 lg:shadow-xl ">
                <div class="relative hidden w-full h-auto bg-white bg-cover border-r rounded-l-lg lg:block lg:w-6/12">
                <div class="relative z-10 m-12 text-left ">
                    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                        <svg class="w-10 h-10" width="480" height="475" viewBox="0 0 480 475" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="91.683" y="146.519" width="59" height="133" transform="rotate(43.2917 91.683 146.519)" fill="black"/>
                            <ellipse cx="112.812" cy="167.111" rx="29.5" ry="30.5" transform="rotate(43.2917 112.812 167.111)" fill="black"/>
                            <rect x="137.538" y="292.174" width="59" height="133" transform="rotate(133.54 137.538 292.174)" fill="black"/>
                            <ellipse cx="116.854" cy="313.214" rx="29.5" ry="30.5" transform="rotate(133.54 116.854 313.214)" fill="black"/>
                            <rect width="59" height="133" transform="matrix(-0.727872 -0.685713 -0.685713 0.727872 335.568 376.807)" fill="black"/>
                            <ellipse rx="29.5" ry="30.5" transform="matrix(-0.727872 -0.685713 -0.685713 0.727872 313.753 356.942)" fill="black"/>
                            <rect width="59" height="133" transform="matrix(-0.682558 0.730831 0.730831 0.682558 187.439 339.714)" fill="black"/>
                            <ellipse rx="29.5" ry="30.5" transform="matrix(-0.682558 0.730831 0.730831 0.682558 167.669 361.615)" fill="black"/>
                            <rect width="59" height="133" transform="matrix(0.727872 0.685713 0.685713 -0.727872 143.768 97.3198)" fill="#8B5CF6"/>
                            <ellipse rx="29.5" ry="30.5" transform="matrix(0.727872 0.685713 0.685713 -0.727872 165.583 117.184)" fill="#8B5CF6"/>
                            <rect width="59" height="133" transform="matrix(0.682558 -0.730831 -0.730831 -0.682558 291.897 134.413)" fill="#8B5CF6"/>
                            <ellipse rx="29.5" ry="30.5" transform="matrix(0.682558 -0.730831 -0.730831 -0.682558 311.667 112.512)" fill="#8B5CF6"/>
                            <rect x="388.181" y="327.048" width="59" height="133" transform="rotate(-136.708 388.181 327.048)" fill="black"/>
                            <ellipse cx="367.052" cy="306.455" rx="29.5" ry="30.5" transform="rotate(-136.708 367.052 306.455)" fill="black"/>
                            <rect x="342.326" y="181.392" width="59" height="133" transform="rotate(-46.4604 342.326 181.392)" fill="black"/>
                            <ellipse cx="363.01" cy="160.352" rx="29.5" ry="30.5" transform="rotate(-46.4604 363.01 160.352)" fill="black"/>
                        </svg>
                        <span class="ml-3 font-semibold text-dark">{{ config('app.name') }}</span>
                    </a>
                    <h2 class="mt-12 mb-2 text-2xl font-semibold tracking-tighter text-black sm:text-3xl title-font"> Create an <span class="text-red-500">account</span>. </h2>
                    <div class="w-full mt-16 mb-8 text-base leading-relaxed text-blueGray-900 sm:md:w-3/3 lg:text-1xl "> Create an account and keep tracks your sale and revenue in one place. Managing your business and teams are much easier with {{ config('app.name') }}.</div>
                </div>
                </div>
                <div class="w-full px-8 py-24 bg-white rounded-lg border-blueGray-100 lg:w-8/12 lg:px-24 lg:py-4 lg:rounded-l-none s">
                <div class="relative z-10 text-left ">
                    <form class="mt-6" wire:submit.prevent="createAccount">
                        <div>
                            <label class="block text-base font-medium leading-relaxed text-blueGray-700">Company Name</label>
                            <input type="text" wire:model="companyName" name="companyName" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-purple-200 focus:bg-transparent focus:border-purple-500 text-base outline-none text-purple-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('companyName')
                                <p class="mt-1 text-xs italic text-black">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block text-base font-medium leading-relaxed text-blueGray-700">Email Address</label>
                            <input type="email" wire:model="email" name="email" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-purple-200 focus:bg-transparent focus:border-purple-500 text-base outline-none text-purple-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">                        
                            @error('email')
                                <p class="mt-1 text-xs italic text-black">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="text-base leading-relaxed text-blueGray-700 font-medium" for="password" minlength="6"> Password </label>
                                <input type="password" wire:model="password" name="password" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-purple-200 focus:bg-transparent focus:border-purple-500 text-base outline-none text-purple-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">                                                
                                @error('password')
                                    <p class="mt-1 text-xs italic text-black">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="block w-full px-4 py-3 mt-6 mb-6 font-semibold text-white transition duration-500 ease-in-out transform rounded bg-gradient-to-r bg-purple-500 hover:bg-purple-600 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">Register</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
