<div class="admin-front-band">
    <div class="mx-auto max-w-4xl rounded-3xl bg-white p-10 text-center shadow-2xl shadow-indigo-100">
        <h3 class="text-4xl font-black text-indigo-950">{{ $data['title'] ?? '' }}</h3>
        <p class="mt-6 text-base leading-8 text-slate-600">{{ $data['description'] ?? '' }}</p>
        <button type="button" wire:click="openEditor" class="admin-preview-edit mt-8">Edit About</button>
    </div>
</div>
