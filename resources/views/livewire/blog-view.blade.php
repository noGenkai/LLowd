<div class="py-10 px-4 sm:px-6">
    {{-- Ordered list to display appointment entries in MYSQL --}}
    <ol
        class="divide-y divide-gray-100 overflow-hidden rounded-lg bg-white text-sm shadow ring-1 ring-black ring-opacity-5">

        {{-- List item number one --}}
        @foreach ($blogs as $blog)
            <li x-on:click="open = ! open" wire:click="$emit('showBlogDetails', {{ $blog->id }} )" class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                <div class="flex-auto">
                    <p class="font-semibold text-gray-900">{{ $blog->title }}</p>
                    
                    <time datetime="2022-01-15T09:00" class="mt-2 flex items-center text-gray-700">
                        <!-- Heroicon name: solid/clock -->
                        <svg class="mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ $blog->date }}
                    </time>
                </div>




                
                {{-- Delete Button --}}
                <a href="#"
                    wire:click="delete({{ $blog->id }})"
                    class="ml-6 flex-none self-center rounded-md border border-gray-300 bg-white py-2 px-3 font-semibold text-gray-700 opacity-0 shadow-sm hover:bg-gray-50 focus:opacity-100 group-hover:opacity-100">Delete<span
                        class="sr-only">Delete</span></a>
            </li>
        @endforeach

    </ol>
</div>
