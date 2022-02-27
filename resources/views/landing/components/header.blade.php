<header class="text-black body-font bg-white">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
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

        <span class="ml-3 text-xl">{{ config('app.name') }}</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
        <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">About Us</a>
        <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Pricing</a>
        <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Careers</a>
      </nav>
      <a 
      href="{{ route('register') }}"
      class="inline-flex items-center bg-blue-500 border-0 py-1 px-5 focus:outline-none hover:bg-blue-300 rounded-full text-base text-white mx-3 mt-4 md:mt-0">Register
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
      </a>
      <a 
      href="{{ route('login') }}"
      class="inline-flex items-center bg-purple-500 border-0 py-1 px-5 focus:outline-none hover:bg-purple-600 rounded-full text-base text-white mx-3 mt-4 md:mt-0">Login
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
        </svg>
      </a>
    </div>
</header>