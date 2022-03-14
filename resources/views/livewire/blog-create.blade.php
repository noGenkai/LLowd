<x-jet-dialog-modal wire:model="showModal">
    <x-slot name="title">
        Enter Appointment Details
    </x-slot>

    <!-- Form Content-->
    <x-slot name="content">
        <form class="w-full">

            <div class="flex flex-wrap -mx-3 mb-2">

                <!-- Company Fieldset 1 -->
                <fieldset class="w-full border p-2" id="companyFS1">

                    <!-- Title Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-title">
                            Title
                        </label>
                        <input wire:model.lazy="title"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-title" name="grid-title" type="text" placeholder="Enter title" required>
                        @error('title')
                            <span class="error text-red-700 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Date Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-date">
                            Date
                        </label>
                        <input wire:model.lazy="date"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-date" name="grid-date" type="date" placeholder="Enter date"
                            required>
                        @error('date')
                            <span class="error text-red-700 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                </fieldset>

                <!-- Company Fieldset 2 -->
                <fieldset class="w-full border p-2" id="companyFS2">

                    <!-- text Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-text">
                            Text
                        </label>
                        <input wire:model.lazy="text"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-text" name="grid-text" type="text" placeholder="Enter text" required>
                        @error('text')
                            <span class="error text-red-700 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Liked Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-liked">
                            Likes
                        </label>
                        <input wire:model.lazy="liked"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-liked" name="grid-liked" type="checkbox" placeholder="Enter Liked" required>
                        @error('text')
                            <span class="error text-red-700 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                </fieldset>
            </div>

        </form>
    </x-slot>

    <!-- Form Footer -->
    <x-slot name="footer">
        <x-jet-button wire:click="saveBlog">Save Blog</x-jet-button>
    </x-slot>

</x-jet-dialog-modal>
