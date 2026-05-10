<div class="mb-5 flex justify-end"><button type="button" wire:click="addItem" class="admin-add">Add Service</button></div>
<div class="grid gap-5">
    @foreach ($data as $index => $service)
        <div class="admin-repeat">
            <div class="admin-grid">
                <label>Title<input wire:model="data.{{ $index }}.title" type="text"></label>
                <label>Icon<select wire:model="data.{{ $index }}.icon">@foreach (['megaphone','code','target','chart','users','bot','pen'] as $icon)<option value="{{ $icon }}">{{ $icon }}</option>@endforeach</select></label>
                <label>Color<select wire:model="data.{{ $index }}.color">@foreach (['rose','violet','orange','teal','amber','blue','purple'] as $color)<option value="{{ $color }}">{{ $color }}</option>@endforeach</select></label>
                <label>Image, 200-300KB<input wire:model="itemUploads.{{ $index }}" type="file" accept="image/*"></label>
                <label class="md:col-span-2">Copy<textarea wire:model="data.{{ $index }}.copy" rows="4"></textarea></label>
                @if (! empty($service['image']))
                    <div><span class="admin-label">Current Image</span><img src="{{ asset($service['image']) }}" class="mt-2 h-24 w-24 rounded-xl object-cover"></div>
                @endif
            </div>
            <button type="button" wire:click="removeItem({{ $index }})" class="admin-remove mt-4">Remove Service</button>
        </div>
    @endforeach
</div>
