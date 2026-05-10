<div class="admin-grid">
    <label class="md:col-span-2">Footer Description<textarea wire:model="data.description" rows="5"></textarea></label>
    <label>Quick Links Heading<input wire:model="data.quick_links_heading" type="text"></label>
    <label>Contact Heading<input wire:model="data.contact_heading" type="text"></label>
</div>

<div class="mt-8 grid gap-6 xl:grid-cols-2">
    <section class="rounded-xl border border-slate-200 bg-slate-50 p-4">
        <div class="mb-4 flex items-center justify-between gap-4">
            <h3 class="font-black">Footer Page Links</h3>
            <button type="button" wire:click="addNestedItem('quick_links')" class="admin-add">Add Link</button>
        </div>
        <div class="grid gap-4">
            @foreach (($data['quick_links'] ?? []) as $index => $link)
                <div class="admin-repeat">
                    <div class="admin-grid">
                        <label>Label<input wire:model="data.quick_links.{{ $index }}.label" type="text"></label>
                        <label>URL<input wire:model="data.quick_links.{{ $index }}.url" type="text"></label>
                    </div>
                    <button type="button" wire:click="removeNestedItem('quick_links', {{ $index }})" class="admin-remove mt-4">Remove Link</button>
                </div>
            @endforeach
        </div>
    </section>

    <section class="rounded-xl border border-slate-200 bg-slate-50 p-4">
        <div class="mb-4 flex items-center justify-between gap-4">
            <h3 class="font-black">Footer Contact Links</h3>
            <button type="button" wire:click="addNestedItem('contact_links')" class="admin-add">Add Contact</button>
        </div>
        <div class="grid gap-4">
            @foreach (($data['contact_links'] ?? []) as $index => $item)
                <div class="admin-repeat">
                    <div class="admin-grid">
                        <label>Label<input wire:model="data.contact_links.{{ $index }}.label" type="text"></label>
                        <label>Value<input wire:model="data.contact_links.{{ $index }}.value" type="text"></label>
                        <label class="md:col-span-2">URL / Link<input wire:model="data.contact_links.{{ $index }}.url" type="text"></label>
                    </div>
                    <button type="button" wire:click="removeNestedItem('contact_links', {{ $index }})" class="admin-remove mt-4">Remove Contact</button>
                </div>
            @endforeach
        </div>
    </section>
</div>
