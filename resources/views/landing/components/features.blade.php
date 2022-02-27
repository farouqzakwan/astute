<section class="text-gray-600 body-font bg-white">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Features</h1>
        {{-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p> --}}
      </div>

      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
              <img src="{{ asset('image/icons/home/features/profit.png') }}" alt="better insights icons">
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Better Insights</h2>
            <p class="leading-relaxed text-base">Send quotes and invoices to get paid faster. Keeps track your sales and revenue in one place.</p>
          </div>
        </div>

        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
              <img src="{{ asset('image/icons/home/features/research.png') }}" alt="access anywhere icons">
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Access anytime, on any device</h2>
            <p class="leading-relaxed text-base">Your data is stored in the cloud, allowing you to run your business from your Mac, PC, tablet or phone.</p>
          </div>
        </div>

             
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
              <img src="{{ asset('image/icons/home/features/loss.png') }}" alt="Receive payment icons">
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Payment Gateways</h2>
            <p class="leading-relaxed text-base">We support <a href="https://senangpay.my/">Senangpay</a>, <a href="https://www.betterpay.me/v2/">Betterpay</a> and <a href="https://www.ipay88.com/">IPay88</a> payment gateways. More on the ways.</p>
          </div>
        </div>
        


       
        <a 
        href="{{ route('register') }}" 
        class="p-5 mx-auto">
          <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-lg">
            <span class="inline-flex px-2">Create your {{ config('app.name') }} account now</span>  
            <span 
            class=" inline-flex bg-purple-500 hover:bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">Sign up now</span>
          </div>
        </a>
    
      </div>  
    </div>
</section>