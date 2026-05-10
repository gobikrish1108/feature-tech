<div class="admin-grid">
    <label>Title<input wire:model="data.title" type="text"></label>
    <label>Map/Image, 200-300KB<input wire:model="imageUpload" type="file" accept="image/*"></label>
    <label class="md:col-span-2">Description<textarea wire:model="data.description" rows="5"></textarea></label>
    @if (! empty($data['image']))
        <div><span class="admin-label">Current Location Image</span><img src="{{ asset($data['image']) }}" class="mt-2 h-32 w-56 rounded-xl object-cover"></div>
    @endif
</div>
