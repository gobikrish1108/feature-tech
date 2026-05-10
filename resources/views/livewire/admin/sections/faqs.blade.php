<div class="mb-5 flex justify-end"><button type="button" wire:click="addItem" class="admin-add">Add FAQ</button></div>
<div class="grid gap-5">
    @foreach ($data as $index => $faq)
        <div class="admin-repeat">
            <label>Question<input wire:model="data.{{ $index }}.q" type="text"></label>
            <label class="mt-4">Answer<textarea wire:model="data.{{ $index }}.a" rows="4"></textarea></label>
            <button type="button" wire:click="removeItem({{ $index }})" class="admin-remove mt-4">Remove FAQ</button>
        </div>
    @endforeach
</div>
