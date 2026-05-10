<div class="admin-front-card hero-grid overflow-hidden">
    <div class="grid items-center gap-10 lg:grid-cols-[1.05fr_.95fr]">
        <div>
            <span class="inline-flex rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-slate-700">♥ {{ $data['badge'] ?? '' }}</span>
            <h3 class="mt-6 text-5xl font-black leading-tight">{{ $data['title'] ?? '' }} <span class="text-gradient">{{ $data['highlight'] ?? '' }}</span></h3>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">{{ $data['description'] ?? '' }}</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <span class="rounded-xl bg-blue-600 px-6 py-3 text-sm font-black text-white">{{ $data['primary_button'] ?? '' }} →</span>
                <span class="rounded-xl border border-slate-200 bg-white px-6 py-3 text-sm font-black">{{ $data['secondary_button'] ?? '' }}</span>
            </div>
        </div>
        <div class="relative">
            <img src="{{ asset($data['image'] ?? 'images/sample/01.jpg') }}" class="aspect-[4/5] w-full max-w-md rounded-3xl object-cover shadow-2xl shadow-slate-300">
            <div class="absolute -bottom-4 -left-4 rounded-2xl bg-white p-4 shadow-xl">
                <p class="text-xs font-black uppercase tracking-[0.18em] text-indigo-500">{{ $data['stat_label'] ?? '' }}</p>
                <p class="text-3xl font-black">{{ $data['stat_value'] ?? '' }}</p>
            </div>
        </div>
    </div>
    <button type="button" wire:click="openEditor" class="admin-preview-edit mt-8">Edit Hero</button>
</div>
