<section id="work" class="bg-white py-24">
    <div class="mx-auto mb-10 max-w-3xl px-6 text-center">
        <h2 class="text-3xl font-black text-slate-950">{{ $sectionTitles['work_title'] ?? 'Our Viral Videos & Results.' }}</h2>
        <p class="mt-4 text-sm text-slate-500">{{ $sectionTitles['work_description'] ?? '' }}</p>
    </div>

    <div class="reels-carousel">
        <div class="reels-track">
            @foreach (array_merge($reels, $reels) as $reel)
                <a href="{{ $reel['url'] ?? '#' }}" target="_blank" class="reel-card" style="background-image: url('{{ $this->mediaUrl($reel['image'] ?? null) }}')">
                    <span class="insta-mark">◎</span>
                    <span class="reel-views">◉ {{ $reel['views'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</section>
