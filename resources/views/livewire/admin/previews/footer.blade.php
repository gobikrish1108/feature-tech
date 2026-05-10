<footer class="admin-front-card border-t-4 border-indigo-500">
    <div class="grid gap-10 md:grid-cols-3">
        <div>
            <div class="mb-6 grid size-16 place-items-center rounded bg-white text-center text-2xl font-black text-orange-500 shadow-sm">UN</div>
            <p class="leading-7 text-slate-600">{{ $data['description'] ?? '' }}</p>
            <button type="button" wire:click="openEditor" class="admin-preview-edit mt-8">Edit Footer</button>
        </div>
        <div>
            <h4 class="font-black">{{ $data['quick_links_heading'] ?? 'Quick Links' }}</h4>
            <div class="mt-4 grid gap-3 text-slate-500">
                @foreach (($data['quick_links'] ?? []) as $link)
                    <a href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a>
                @endforeach
            </div>
        </div>
        <div>
            <h4 class="font-black">{{ $data['contact_heading'] ?? 'Say Hello' }}</h4>
            <div class="mt-4 grid gap-3 text-slate-500">
                @foreach (($data['contact_links'] ?? []) as $item)
                    <a href="{{ $item['url'] ?? '#' }}">{{ $item['label'] ?? '' }}: {{ $item['value'] ?? '' }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
