<div class="admin-front-card max-w-2xl">
    <div class="grid size-16 place-items-center rounded-2xl bg-violet-100 text-3xl text-indigo-600">●</div>
    <h3 class="mt-8 text-4xl font-black text-indigo-600">{{ $data['title'] ?? '' }}</h3>
    <p class="mt-7 text-base leading-8 text-slate-600">{{ $data['description'] ?? '' }}</p>
    <button type="button" wire:click="openEditor" class="admin-preview-edit mt-8">Edit Vision</button>
</div>
