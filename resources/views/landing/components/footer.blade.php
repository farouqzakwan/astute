<footer class="text-white body-font bg-purple-900">
    <div class="container px-5 py-24 mx-auto">

      <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4">
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-red-500 tracking-widest text-lg mb-3">Company</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="{{ route('about-us') }}" class="text-white hover:text-gray-50">About us</a>
            </li>
            <li>
              <a href="{{ route('pricing') }}" class="text-white hover:text-gray-50">Pricing</a>
            </li>
            <li>
              <a href="{{ route('careers') }}" class="text-white hover:text-gray-50">Careers</a>
            </li>
            <li>
              <svg class="w-10 h-10 mt-3" width="480" height="475" viewBox="0 0 480 475" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </li>
          </nav>
        </div>
        
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-red-500 tracking-widest text-lg mb-3">Resources</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="{{ route('about-us') }}" class="text-white hover:text-gray-50">FAQ</a>
            </li>
            <li>
              <a href="{{ route('pricing') }}" class="text-white hover:text-gray-50">PDPA</a>
            </li>
            <li>
              <a href="" class="text-white hover:text-gray-50">Changelog</a>
            </li>
            <li>
              <a href="" class="text-white hover:text-gray-50">Policies</a>
            </li>
          </nav>
        </div>
      </div>

      
    </div>
    <div class="border-t border-gray-200 bg-gray-900">
      <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
      
        <div class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
          <p class="text-red text-lg text-center sm:text-left">© {{ date('Y').' '.config('app.name') }} —
            <a href="{{ config('social_media.twitter.url') }}" class="text-red-500 ml-1" target="_blank" rel="noopener noreferrer">{{ '@'.config('social_media.twitter.handler') }}</a>
          </p>
        </div> 
        
        <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
          <a href="" class="text-white">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a href="" class="ml-3 text-white">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a href="" class="ml-3 text-white">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a href="" class="ml-3 text-white">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
</footer>