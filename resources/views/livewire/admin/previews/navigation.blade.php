<div class="admin-front-card">
    <div class="flex flex-wrap items-center justify-between gap-6 border-b border-slate-100 pb-6">
        <div class="flex items-center gap-3">
            <span class="grid size-14 place-items-center rounded-xl bg-indigo-600 text-sm font-black text-white">UN</span>
            <strong class="text-xl font-black">Header Navigation</strong>
        </div>
        <button type="button" wire:click="openEditor" class="admin-preview-edit">Edit Navigation</button>
    </div>

    <div class="mt-6 flex flex-wrap items-center justify-between gap-6">
        <div class="flex flex-wrap gap-8 text-sm font-bold text-slate-700">
            @foreach (($data['links'] ?? []) as $index => $link)
                <a class="{{ $index === 0 ? 'text-indigo-600' : '' }}" href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a>
            @endforeach
        </div>
        <span class="inline-flex items-center gap-2 rounded-full bg-indigo-600 px-5 py-3 text-sm font-black text-white">
            {{ $data['cta_label'] ?? '' }} <span class="grid size-7 place-items-center rounded-full bg-white/20">↗</span>
        </span>
    </div>
</div>
