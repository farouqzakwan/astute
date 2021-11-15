<div>
        <div x-data="{ isOpen: false }" class="relative">
            <input 
                @click = "isOpen = !isOpen " 
                wire:model="search"
                type="text" 
                class="border-2 rounded h-8 w-full" 
                autocomplete="off"
                value="{{ $client['name'] ?? '' }}"
            >
            <div 
                x-show="isOpen" 
                @click.away="isOpen = false"
                class="absolute block z-50 bg-gray-50 rounded-lg shadow-xl">
                @foreach ($customers as $customer)
                    <a 
                        wire:click="selectCustomer({{$customer['id']}})" 
                        class="block py-2 px-4 text-dark hover:text-purple-600 leading-5 hover:bg-purple-100"> {{ $customer['name'] }}</a>
                @endforeach
            </div>
            <input type="text" value="{{ $client['name'] ?? '' }}" placeholder=""><br>
            <input type="text" value="{{ $client['address']['address1'] ?? ''}}" placeholder=""><br>
            <input type="text" value="{{ $client['address']['address2'] ?? ''}}" placeholder=""><br>
            <input type="text" value="{{ $client['address']['postcode'] ?? '' }}" placeholder=""> <br/>
            <input type="text" value="{{ $client['addres']['city'] ?? '' }}" placeholder=""> <br>
            <input type="text" value="{{ $client['address']['state'] ?? '' }}" placeholder=""> <br>
            
        </div>  
    
        <a href="#" class="text-underline text-purple-500">Edit {{ $client['name'] ?? ''}}</a> 
        <span class="text-purple-500">.</span> 
        <a href="#" class="text-purple-500">Choose a different client</a>
</div>
