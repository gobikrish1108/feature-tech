<div class="grid gap-6">
    @foreach ($data as $strategy)
        <article class="strategy-card">
            <span class="text-5xl font-black text-violet-300">{{ $strategy['number'] ?? '' }}</span>
            <div>
                <h3 class="text-xl font-black">{{ $strategy['title'] ?? '' }}</h3>
                <p class="mt-3 text-sm leading-7 text-slate-500">{{ $strategy['copy'] ?? '' }}</p>
                <button type="button" wire:click="openEditor" class="admin-preview-edit mt-5">Edit</button>
            </div>
        </article>
    @endforeach
</div>
