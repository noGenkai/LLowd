<div class="lg:flex lg:h-full lg:flex-col">

    <!-- 
        TODO: Give functionality to the day menu.
        TODO: Create Modal for Add Event Button.
        TODO: Create linkk to Modal button.
     -->
    <header class="relative z-20 flex items-center justify-between border-b border-gray-200 py-4 px-6 lg:flex-none">

        <!-- Name of Month -->
        <h1 class="text-lg font-semibold text-gray-900">
            <time datetime="2022-01">February 2022</time>
        </h1>

        <!-- Right side container:
        ex: Today
        ex: Monthly View
        ex: Add Event button
        -->
        <div class="flex items-center">

            <!-- This is the DIV that holds this three buttons together. -->
            <div class="flex items-center rounded-md shadow-sm md:items-stretch">

                <!-- Previous Month Button -->
                <button type="button" class="flex items-center justify-center rounded-l-md border border-r-0 border-gray-300 bg-white py-2 pl-3 pr-4 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                    <span class="sr-only">Previous month</span>
                    <!-- Heroicon name: solid/chevron-left -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Javascript will Fill this button. -->
                <button type="button" class="hidden border-t border-b border-gray-300 bg-white px-3.5 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:relative md:block">Today</button>
                <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>

                <!-- Next Month Button -->
                <button type="button" class="flex items-center justify-center rounded-r-md border border-l-0 border-gray-300 bg-white py-2 pl-4 pr-3 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                    <span class="sr-only">Next month</span>
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>

            </div>

            <!-- Calendar Dropdown view Menu for medium to larger screens. -->
            <div class="hidden md:ml-4 md:flex md:items-center">
                <div class="relative">
                    <button @click="open = ! open" type="button" class="flex items-center rounded-md border border-gray-300 bg-white py-2 pl-3 pr-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">Month view
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!-- Drop down for medium to large screens -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="focus:outline-none absolute right-0 mt-3 w-36 origin-top-right overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Day view</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Week view</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Month view</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Year view</a>
                        </div>
                    </div>
                </div>
                <div class="ml-6 h-6 w-px bg-gray-300"></div>
                <button wire:click="$emit('showApptModal')" type="button" class="focus:outline-none ml-6 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add event</button>
            </div>

            <!-- Calendar Dropdown view Menu for small screens. -->
            <div class="relative ml-6 md:hidden">
                <button @click="open = ! open" type="button" class="-mx-2 flex items-center rounded-full border border-transparent p-2 text-gray-400 hover:text-gray-500" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: solid/dots-horizontal -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </button>

                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="focus:outline-none absolute right-0 mt-3 w-36 origin-top-right divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-0">Create event</a>
                    </div>
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-1">Go to today</a>
                    </div>
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-2">Day view</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-3">Week view</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-4">Month view</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-5">Year view</a>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <!-- MAIN CALENDAR VIEW -->
    <div class="shadow ring-1 ring-black ring-opacity-5 lg:flex lg:flex-auto lg:flex-col">
        <div class="grid grid-cols-7 gap-px border-b border-gray-300 bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700 lg:flex-none">
            <div class="bg-white py-2">M<span class="sr-only sm:not-sr-only">on</span></div>
            <div class="bg-white py-2">T<span class="sr-only sm:not-sr-only">ue</span></div>
            <div class="bg-white py-2">W<span class="sr-only sm:not-sr-only">ed</span></div>
            <div class="bg-white py-2">T<span class="sr-only sm:not-sr-only">hu</span></div>
            <div class="bg-white py-2">F<span class="sr-only sm:not-sr-only">ri</span></div>
            <div class="bg-white py-2">S<span class="sr-only sm:not-sr-only">at</span></div>
            <div class="bg-white py-2">S<span class="sr-only sm:not-sr-only">un</span></div>
        </div>
        <div class="flex bg-gray-200 text-xs leading-6 text-gray-700 lg:flex-auto">
            <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px">
                <!--
          Always include: "relative py-2 px-3"
          Is current month, include: "bg-white"
          Is not current month, include: "bg-gray-50 text-gray-500"
        -->
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <!--
            Is today, include: "flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white"
          -->
                    <time datetime="2021-12-27">27</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2021-12-28">28</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2021-12-29">29</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2021-12-30">30</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2021-12-31">31</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-01">1</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-01">2</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-03">3</time>
                    <ol class="mt-2">
                        <li>
                            <a href="#" class="group flex">
                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Design review</p>
                                <time datetime="2022-01-03T10:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">10AM</time>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex">
                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sales meeting</p>
                                <time datetime="2022-01-03T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                            </a>
                        </li>
                    </ol>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-04">4</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-05">5</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-06">6</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-07">7</time>
                    <ol class="mt-2">
                        <li>
                            <a href="#" class="group flex">
                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Date night</p>
                                <time datetime="2022-01-08T18:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">6PM</time>
                            </a>
                        </li>
                    </ol>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-08">8</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-09">9</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-10">10</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-11">11</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-12" class="relative bg-white py-2 px-3">12</time>
                    <ol class="mt-2">
                        <li>
                            <a href="#" class="group flex">
                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sam's birthday party</p>
                                <time datetime="2022-01-25T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                            </a>
                        </li>
                    </ol>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-13">13</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-14">14</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-15">15</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-16">16</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-17">17</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-18">18</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-19">19</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-20">20</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-21">21</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-22">22</time>
                    <ol class="mt-2">
                        <li>
                            <a href="#" class="group flex">
                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Maple syrup museum</p>
                                <time datetime="2022-01-22T15:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">3PM</time>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex">
                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Hockey game</p>
                                <time datetime="2022-01-22T19:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">7PM</time>
                            </a>
                        </li>
                    </ol>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-23">23</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-24">24</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-25">25</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-26">26</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-27">27</time>
                </div>
                <div class="flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">
                    <time datetime="2022-01-28">28</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-29">29</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-30">30</time>
                </div>
                <div class="relative bg-white py-2 px-3">
                    <time datetime="2022-01-31">31</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2022-02-01">1</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2022-02-02">2</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2022-02-03">3</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2022-02-04">4</time>
                    <ol class="mt-2">
                        <li>
                            <a href="#" class="group flex">
                                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Cinema with friends</p>
                                <time datetime="2022-02-04T21:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">9PM</time>
                            </a>
                        </li>
                    </ol>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2022-02-05">5</time>
                </div>
                <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                    <time datetime="2022-02-06">6</time>
                </div>
            </div>
            <div class="isolate grid w-full grid-cols-7 grid-rows-6 gap-px lg:hidden">
                <!--
          Always include: "flex h-14 flex-col py-2 px-3 hover:bg-gray-100 focus:z-10"
          Is current month, include: "bg-white"
          Is not current month, include: "bg-gray-50"
          Is selected or is today, include: "font-semibold"
          Is selected, include: "text-white"
          Is not selected and is today, include: "text-indigo-600"
          Is not selected and is current month, and is not today, include: "text-gray-900"
          Is not selected, is not current month, and is not today: "text-gray-500"
        -->
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <!--
            Always include: "ml-auto"
            Is selected, include: "flex h-6 w-6 items-center justify-center rounded-full"
            Is selected and is today, include: "bg-indigo-600"
            Is selected and is not today, include: "bg-gray-900"
          -->
                    <time datetime="2021-12-27" class="ml-auto">27</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2021-12-28" class="ml-auto">28</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2021-12-29" class="ml-auto">29</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2021-12-30" class="ml-auto">30</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2021-12-31" class="ml-auto">31</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-01" class="ml-auto">1</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-02" class="ml-auto">2</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-03" class="ml-auto">3</time>
                    <p class="sr-only">2 events</p>
                    <div class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                        <div class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></div>
                        <div class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></div>
                    </div>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-04" class="ml-auto">4</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-05" class="ml-auto">5</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-06" class="ml-auto">6</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-07" class="ml-auto">7</time>
                    <p class="sr-only">1 event</p>
                    <div class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                        <div class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></div>
                    </div>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-08" class="ml-auto">8</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-09" class="ml-auto">9</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-10" class="ml-auto">10</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-11" class="ml-auto">11</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-12" class="ml-auto">12</time>
                    <p class="sr-only">1 event</p>
                    <div class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                        <div class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></div>
                    </div>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-13" class="ml-auto">13</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-14" class="ml-auto">14</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-15" class="ml-auto">15</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-16" class="ml-auto">16</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-17" class="ml-auto">17</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-18" class="ml-auto">18</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-19" class="ml-auto">19</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-20" class="ml-auto">20</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-21" class="ml-auto">21</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 font-semibold text-white hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-22" class="ml-auto flex h-6 w-6 items-center justify-center rounded-full bg-gray-900">22</time>
                    <p class="sr-only">2 events</p>
                    <div class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                        <div class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></div>
                        <div class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></div>
                    </div>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-23" class="ml-auto">23</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-24" class="ml-auto">24</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-25" class="ml-auto">25</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-26" class="ml-auto">26</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-27" class="ml-auto">27</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-28" class="ml-auto">28</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-29" class="ml-auto">29</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-30" class="ml-auto">30</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-01-31" class="ml-auto">31</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-02-01" class="ml-auto">1</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-02-02" class="ml-auto">2</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-02-03" class="ml-auto">3</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-02-04" class="ml-auto">4</time>
                    <p class="sr-only">1 event</p>
                    <div class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                        <div class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></div>
                    </div>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-02-05" class="ml-auto">5</time>
                    <p class="sr-only">0 events</p>
                </button>
                <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                    <time datetime="2022-02-06" class="ml-auto">6</time>
                    <p class="sr-only">0 events</p>
                </button>
            </div>
        </div>
    </div>


    
    <!-- AGENDA VIEW: Hides after large -->
    <div class="py-10 px-4 sm:px-6 lg:hidden">
        <ol class="divide-y divide-gray-100 overflow-hidden rounded-lg bg-white text-sm shadow ring-1 ring-black ring-opacity-5">
            <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                <div class="flex-auto">
                    <p class="font-semibold text-gray-900">Maple syrup museum</p>
                    <time datetime="2022-01-15T09:00" class="mt-2 flex items-center text-gray-700">
                        <!-- Heroicon name: solid/clock -->
                        <svg class="mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        3PM
                    </time>
                </div>
                <a href="#" class="ml-6 flex-none self-center rounded-md border border-gray-300 bg-white py-2 px-3 font-semibold text-gray-700 opacity-0 shadow-sm hover:bg-gray-50 focus:opacity-100 group-hover:opacity-100">Edit<span class="sr-only">, Maple syrup museum</span></a>
            </li>

            <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                <div class="flex-auto">
                    <p class="font-semibold text-gray-900">Hockey game</p>
                    <time datetime="2022-01-22T19:00" class="mt-2 flex items-center text-gray-700">
                        <!-- Heroicon name: solid/clock -->
                        <svg class="mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        7PM
                    </time>
                </div>
                <a href="#" class="ml-6 flex-none self-center rounded-md border border-gray-300 bg-white py-2 px-3 font-semibold text-gray-700 opacity-0 shadow-sm hover:bg-gray-50 focus:opacity-100 group-hover:opacity-100">Edit<span class="sr-only">, Hockey game</span></a>
            </li>
        </ol>
    </div>



</div>