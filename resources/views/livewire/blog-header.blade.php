    <!-- 
        TODO: Give functionality to the day menu.
        TODO: Create Modal for Add Event Button.
        TODO: Create linkk to Modal button.
     -->
     <header class="relative z-20 flex items-center justify-between border-b border-gray-200 py-4 px-6 lg:flex-none">

        <!-- Name of Month -->
        <h1 class="text-lg font-semibold text-gray-900">
            Blog List
        </h1>

        <div class="flex items-center">

                <!-- Dropdown view Menu for medium to larger screens. -->
                
                    @if ($isAdmin)
                        <h1>ADMIN USER</h1>

                        <div class="hidden md:ml-4 md:flex md:items-center">

                            <div class="ml-6 h-6 w-px bg-gray-300"></div>
                            <button wire:click="$emit('showBlogModal')" type="button" class="focus:outline-none ml-6 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add Blog</button>
                        </div>
                        
                    @else
                        <h1>NOT ADMIN</h1>
                    @endif
             
                

            

            <!-- Dropdown view Menu for small screens. -->
            <div class="relative ml-6 md:hidden">
                <button @click="open = ! open" type="button" class="-mx-2 flex items-center rounded-full border border-transparent p-2 text-gray-400 hover:text-gray-500" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: solid/dots-horizontal -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </button>


            </div>
        </div>
    </header>
