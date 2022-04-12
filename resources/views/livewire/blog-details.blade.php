<div x-show="open" wire:model="showBlogDetails" id="blogDetails" class="py-10 px-4 sm:px-6">

    <div class="divide-y divide-gray-100 overflow-hidden rounded-lg bg-white text-sm shadow ring-1 ring-black ring-opacity-5">


        <div class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
            <div class="flex-auto">

                <p class="font-bold text-gray-900 text-center p-2"> {{ $selected_blog_title }} </p>
                <p class="font-bold text-gray-900 text-center p-2"></p>

                <p class="font-semibold text-gray-700 text-justify">{{ $selected_blog_text}}</p>

                <div class="w-full p-4">
                    <img class="mx-auto" src="https://via.placeholder.com/350x150">
                </div>
            </div>

            <!-- 
                    Update and Delete is only available for Blogger
                    You will need an if statement saying if you are a blogger, then show these buttons. 
                -->
            @if ($isAdmin)
            {{-- Update Button --}}
            <a href='#' wire:click="update( {{ $selected_blog_id }} )" class="ml-6 flex-none self-center rounded-md border border-gray-300 bg-white py-2 px-3 font-semibold text-gray-700 opacity-0 shadow-sm hover:bg-gray-50 focus:opacity-100 group-hover:opacity-100">Update<span class="sr-only">Update</span></a>

            {{-- Delete Button --}}
            <a href="#" wire:click="delete( {{ $selected_blog_id }} )" class="ml-6 flex-none self-center rounded-md border border-gray-300 bg-white py-2 px-3 font-semibold text-gray-700 opacity-0 shadow-sm hover:bg-gray-50 focus:opacity-100 group-hover:opacity-100">Delete<span class="sr-only">Delete</span></a>

            @else
            <h1>NOT ADMIN</h1>
            @endif
        </div>


    </div>
</div>