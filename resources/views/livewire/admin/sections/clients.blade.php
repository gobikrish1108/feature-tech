<div class="mb-5 flex justify-end"><button type="button" wire:click="addItem" class="admin-add">Add Client</button></div>
<div class="grid gap-3 md:grid-cols-2">
    @foreach ($data as $index => $client)
        <div class="flex gap-2 rounded-xl border border-slate-200 bg-slate-50 p-3">
            <input wire:model="data.{{ $index }}" type="text" class="admin-input">
            <button type="button" wire:click="removeItem({{ $index }})" class="admin-remove">Remove</button>
        </div>
    @endforeach
</div>
