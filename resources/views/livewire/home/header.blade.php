<header class="sticky top-0 z-50 border-b border-slate-100 bg-white/95 backdrop-blur">
    <nav class="mx-auto flex h-24 max-w-7xl items-center justify-between px-6 lg:px-10">
        <a href="#home" class="flex items-center gap-3" aria-label="UN Digital Marketing">
            @if (! empty($brand['logo']))
                <img src="{{ $this->mediaUrl($brand['logo']) }}" alt="{{ $brand['name'] ?? 'UN Digital Marketing' }}" class="h-16 w-auto object-contain">
            @else
                <span class="grid size-14 place-items-center rounded bg-white text-center text-2xl font-black leading-none text-orange-500 shadow-sm">
                    UN
                    <small class="block text-[8px] font-black text-slate-800">DIGITAL</small>
                </span>
            @endif
        </a>

        <div class="hidden items-center gap-10 text-sm font-semibold md:flex">
            @foreach (($navigation['links'] ?? []) as $index => $link)
                <a class="{{ $index === 0 ? 'text-indigo-600' : 'transition hover:text-indigo-600' }}" href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a>
            @endforeach
        </div>

        <a href="{{ $navigation['cta_url'] ?? '#contact' }}" class="inline-flex items-center gap-2 rounded-full bg-indigo-600 px-5 py-3 text-sm font-extrabold text-white shadow-lg shadow-indigo-600/20 transition hover:-translate-y-0.5 hover:bg-violet-600">
            {{ $navigation['cta_label'] ?? 'Free Consultation' }}
            <span class="grid size-7 place-items-center rounded-full bg-white/20">↗</span>
        </a>
    </nav>
</header>
