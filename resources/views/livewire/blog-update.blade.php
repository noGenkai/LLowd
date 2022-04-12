<x-jet-dialog-modal wire:model="showUpdateModal">
    <x-slot name="title">
        Update Blog Details
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
                            {{ $selected_blog_title }}
                        </label>
                        <input wire:model.lazy="title"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-title" name="grid-title" type="text"
                            placeholder="Insert the title of your blog here!" required>
                        @error('title')
                            <span class="error text-red-700 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Text Field -->
                    <div class="w-full px-5 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-text">
                            {{ $selected_blog_text }}
                        </label>
                        <textarea wire:model.lazy="text" rows="5"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-text" name="grid-text" placeholder="Enter text for your blog!"
                            required> </textarea>
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
        <x-jet-button wire:click="updateBlog()">Update Blog</x-jet-button>
    </x-slot>

</x-jet-dialog-modal>
