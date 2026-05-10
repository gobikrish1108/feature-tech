<div class="admin-grid">
    <label>Badge<input wire:model="data.badge" type="text"></label>
    <label>Title<input wire:model="data.title" type="text"></label>
    <label>Gradient Text<input wire:model="data.highlight" type="text"></label>
    <label>Primary Button<input wire:model="data.primary_button" type="text"></label>
    <label>Secondary Button<input wire:model="data.secondary_button" type="text"></label>
    <label>Stat Label<input wire:model="data.stat_label" type="text"></label>
    <label>Stat Value<input wire:model="data.stat_value" type="text"></label>
    <label>Hero Image, 200-300KB<input wire:model="imageUpload" type="file" accept="image/*"></label>
    <label class="md:col-span-2">Description<textarea wire:model="data.description" rows="5"></textarea></label>
    @if (! empty($data['image']))
        <div><span class="admin-label">Current Hero Image</span><img src="{{ asset($data['image']) }}" class="mt-2 h-40 w-56 rounded-xl object-cover"></div>
    @endif
</div>
