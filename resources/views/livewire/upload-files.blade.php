<div wire:model="uploadFilesModal">
    <form class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        @csrf
        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="file" id="file" ref="file" wire:model="files" multiple>
            @error('files.*') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button wire:click.prevent="saveAttachments"></button>
    </form>
</div>