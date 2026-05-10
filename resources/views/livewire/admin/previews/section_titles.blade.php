<div class="grid gap-5 md:grid-cols-2">
    @foreach ($data as $key => $value)
        <div class="admin-front-card">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-indigo-600">{{ str($key)->replace('_', ' ')->title() }}</p>
            <p class="mt-4 text-xl font-black leading-8">{{ $value }}</p>
            <button type="button" wire:click="openEditor" class="admin-preview-edit mt-6">Edit</button>
        </div>
    @endforeach
</div>
