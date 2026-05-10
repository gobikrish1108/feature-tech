<div class="mb-5 flex justify-end"><button type="button" wire:click="addItem" class="admin-add">Add Reel</button></div>
<div class="grid gap-5">
    @foreach ($data as $index => $reel)
        <div class="admin-repeat">
            <div class="admin-grid">
                <label>Views<input wire:model="data.{{ $index }}.views" type="text"></label>
                <label>Instagram URL<input wire:model="data.{{ $index }}.url" type="url"></label>
                <label>Image, 200-300KB<input wire:model="itemUploads.{{ $index }}" type="file" accept="image/*"></label>
                @if (! empty($reel['image']))
                    <div><span class="admin-label">Current Image</span><img src="{{ asset($reel['image']) }}" class="mt-2 h-36 w-24 rounded-xl object-cover"></div>
                @endif
            </div>
            <button type="button" wire:click="removeItem({{ $index }})" class="admin-remove mt-4">Remove Reel</button>
        </div>
    @endforeach
</div>
