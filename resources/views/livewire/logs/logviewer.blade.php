<div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Log Files
            </h2>
        </x-slot>
        <div class="px-4 py-2 mx-4 my-8 bg-gray-300 shadow-xl sm:rounded-lg">
            <div class="flex justify-around">
                <select wire:model="file" class="px-4 py-2 font-mono text-sm bg-red-200 rounded">
                    @foreach($files as $file)
                    <option value="{{ $loop->index }}">{{ $file->getFilename() }}</option>
                    @endforeach
                </select>
            </div>
            @include('dashboard.components.logs-paginator')
            
            @if($log->count()>0)
                <ul class='font-mono text-xs'>
                    
                    @for($i=0; $i < $log->count(); $i++)
                        @if(Illuminate\Support\Str::startsWith($log[$i],'[stacktrace]') || Illuminate\Support\Str::startsWith($log[$i],'#'))
                            <li x-data="{expanded:false}" x-on:click="expanded = !expanded" class="text-green-300 bg-gray-600">[stacktrace]
                                <ul class="ml-8" x-show="expanded" x-cloak >
                                    @while($i < $log->count())
                                        <li wire:key="{{$page}}-line-{{ $i }}">{{ $log[$i] }}</li>
                                        @break(Illuminate\Support\Str::startsWith($log[$i++],'"}'))
                                    @endwhile
                                </ul>
                            </li>
                        @endif
                        @break($i>=$log->count())
                        
                        <br>
                        <li wire:key="{{ $page }}-line-{{ $i }}" class="font-mono text-xs leading-5  
                            {{ Illuminate\Support\Str::contains($log[$i], '.CRITICAL:') ? 'text-red-800':''}}
                            {{ Illuminate\Support\Str::contains($log[$i], '.ERROR:') ? 'text-red-500':'' }}
                            {{ Illuminate\Support\Str::contains($log[$i], '.INFO:') ? 'text-blue-900':'' }}
                            {{ Illuminate\Support\Str::contains($log[$i], '.WARNING:') ? 'text-indigo-700':'' }}
                            ">{{ $log[$i] }}
                        </li>
                    @endfor
                </ul>
            @endif
        </div>
</div>
