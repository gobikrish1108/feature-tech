<div class="admin-grid">
    <label>CTA Button Label<input wire:model="data.cta_label" type="text"></label>
    <label>CTA Button URL<input wire:model="data.cta_url" type="text"></label>
</div>

<div class="mt-8 rounded-xl border border-slate-200 bg-slate-50 p-4">
    <div class="mb-4 flex items-center justify-between gap-4">
        <h3 class="font-black">Header Page Links</h3>
        <button type="button" wire:click="addNestedItem('links')" class="admin-add">Add Link</button>
    </div>

    <div class="grid gap-4">
        @foreach (($data['links'] ?? []) as $index => $link)
            <div class="admin-repeat">
                <div class="admin-grid">
                    <label>Label<input wire:model="data.links.{{ $index }}.label" type="text"></label>
                    <label>URL<input wire:model="data.links.{{ $index }}.url" type="text"></label>
                </div>
                <button type="button" wire:click="removeNestedItem('links', {{ $index }})" class="admin-remove mt-4">Remove Link</button>
            </div>
        @endforeach
    </div>
</div>
