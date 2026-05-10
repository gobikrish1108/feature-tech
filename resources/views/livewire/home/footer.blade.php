<footer class="border-t-4 border-indigo-500 bg-white px-6 py-16 lg:px-10">
    <div class="mx-auto grid max-w-7xl gap-12 md:grid-cols-3">
        <div>
            @if (! empty($brand['logo']))
                <img src="{{ $this->mediaUrl($brand['logo']) }}" alt="{{ $brand['name'] ?? 'UN Digital Marketing' }}" class="mb-7 h-16 w-auto object-contain">
            @else
                <div class="mb-7 grid size-16 place-items-center rounded bg-white text-center text-2xl font-black leading-none text-orange-500 shadow-sm">UN<small class="block text-[8px] text-slate-800">DIGITAL</small></div>
            @endif
            <p class="max-w-md leading-7 text-slate-600">{{ $footer['description'] ?? '' }}</p>
            <div class="mt-8 flex gap-3">
                <a class="social-dot" href="{{ $brand['facebook'] ?? '#' }}">f</a>
                <a class="social-dot" href="{{ $brand['instagram'] ?? '#' }}">◎</a>
            </div>
        </div>
        <div>
            <h3 class="text-lg font-black">{{ $footer['quick_links_heading'] ?? 'Quick Links' }}</h3>
            <div class="mt-6 grid gap-4 text-slate-600">
                @foreach (($footer['quick_links'] ?? []) as $link)
                    <a href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a>
                @endforeach
            </div>
        </div>
        <div>
            <h3 class="text-lg font-black">{{ $footer['contact_heading'] ?? 'Say Hello' }}</h3>
            <div class="mt-6 grid gap-5 text-slate-600">
                @foreach (($footer['contact_links'] ?? []) as $item)
                    <a href="{{ $item['url'] ?? '#' }}">{{ $item['label'] ?? '' }}: {{ $item['value'] ?? '' }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
