<div class="admin-front-card">
    <div class="mb-6 flex items-center justify-between gap-4">
        <h3 class="text-2xl font-black">Our Viral Videos & Results</h3>
        <button type="button" wire:click="openEditor" class="admin-preview-edit">Edit Work</button>
    </div>
    <div class="flex gap-5 overflow-x-auto pb-2">
        @foreach ($data as $reel)
            <a href="{{ $reel['url'] ?? '#' }}" class="reel-card" style="background-image:url('{{ asset($reel['image'] ?? 'images/sample/01.jpg') }}')">
                <span class="insta-mark">◎</span>
                <span class="reel-views">◉ {{ $reel['views'] ?? '' }}</span>
            </a>
        @endforeach
    </div>
</div>
