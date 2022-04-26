<div wire:model="uploadFiles">
    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="file" id="attachment" ref="attachment" wire:model="attachments" multiple>
            @error('files.*') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
</div>