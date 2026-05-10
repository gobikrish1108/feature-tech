<div class="mb-5 flex justify-end"><button type="button" wire:click="addItem" class="admin-add">Add Strategy</button></div>
<div class="grid gap-5">
    @foreach ($data as $index => $strategy)
        <div class="admin-repeat">
            <div class="admin-grid">
                <label>Number<input wire:model="data.{{ $index }}.number" type="text"></label>
                <label>Title<input wire:model="data.{{ $index }}.title" type="text"></label>
                <label class="md:col-span-2">Copy<textarea wire:model="data.{{ $index }}.copy" rows="4"></textarea></label>
            </div>
            <button type="button" wire:click="removeItem({{ $index }})" class="admin-remove mt-4">Remove Strategy</button>
        </div>
    @endforeach
</div>
