<div class="grid gap-6 lg:grid-cols-[.75fr_1.25fr]">
    <article class="admin-front-card">
        <h3 class="text-3xl font-black">{{ $data['title'] ?? '' }}</h3>
        <p class="mt-6 text-sm leading-7 text-slate-600">{{ $data['description'] ?? '' }}</p>
        <button type="button" wire:click="openEditor" class="admin-preview-edit mt-8">Edit Location</button>
    </article>
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-xl shadow-slate-100">
        <img src="{{ asset($data['image'] ?? 'images/sample/05.jpg') }}" class="h-80 w-full rounded-xl object-cover">
    </div>
</div>
