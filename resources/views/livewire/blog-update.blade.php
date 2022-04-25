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
                        
                        <input wire:model.lazy="title"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-title" name="grid-title" type="text"
                            placeholder="{{ $selected_blog_title }}" value="{{ $selected_blog_title }}">
                        @error('title')
                            <span class="error text-red-700 font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Text Field -->
                    <div class="w-full px-5 mb-6">
                        
                        <textarea wire:model.lazy="text" rows="20"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-text" name="grid-text" placeholder="{{ $selected_blog_text }}" value="{{ $selected_blog_text }}"> </textarea>
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
