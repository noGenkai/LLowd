    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Calendar') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div 
                x-cloak
                x-data="{ open: false }" 
                class="max-w-7xl mx-auto sm:px-6 lg:px-8"
                >

                <!-- Render Calendar -->
                <livewire:comp2 />

                <!-- Render Modal -->
                <livewire:appt-modal />

            </div>
        </div>
    </x-app-layout>