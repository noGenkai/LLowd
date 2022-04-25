<div>
    {{-- 
        This blade is set up as a model.  
        We do not want to set this up as a model, we want to add it to the new blog and update blog modal.

        1 Create Attachments Database.
            > Columns: blog_id / user_id; file_name; file_path
    --}}
    <x-jet-dialog-modal wire:model="uploadFilesModal">

        <!-- Modal Header -->
        <x-slot name="title">Upload files to Blog #: {{ $selected_project_id }}</x-slot>

        <!-- Modal Content -->
        <x-slot name="content">
            <form class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                @csrf
                <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="file" id="file" ref="file" wire:model="files" multiple>
                    @error('files.*') <span class="error">{{ $message }}</span> @enderror
                </div>
            </form>
        </x-slot>

        <!-- Modal Footer -->
        <x-slot name="footer">
            <x-jet-button wire:click.prevent="saveAttachments">Upload File(s)</x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
