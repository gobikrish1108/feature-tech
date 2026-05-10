<section id="home" class="hero-grid relative overflow-hidden bg-slate-50">
    <div class="mx-auto grid min-h-[calc(100vh-6rem)] max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-[1.05fr_.95fr] lg:px-10">
        <div class="reveal">
            <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-5 py-2 text-xs font-black uppercase tracking-[0.18em] text-slate-700 shadow-sm">
                <span class="text-rose-500">♥</span> {{ $hero['badge'] ?? '' }}
            </div>

            <h1 class="max-w-3xl text-5xl font-black leading-[1.05] text-slate-950 sm:text-6xl lg:text-7xl">
                {{ $hero['title'] ?? '' }} <br>
                <span class="text-gradient">{{ $hero['highlight'] ?? '' }}</span>
            </h1>

            <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-600">
                {{ $hero['description'] ?? '' }}
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a href="#contact" class="inline-flex items-center gap-3 rounded-xl bg-blue-600 px-8 py-4 text-sm font-extrabold text-white shadow-xl shadow-blue-600/20 transition hover:-translate-y-1">{{ $hero['primary_button'] ?? 'Boost Your Brand' }} <span>→</span></a>
                <a href="#work" class="inline-flex items-center rounded-xl border border-slate-200 bg-white px-8 py-4 text-sm font-extrabold text-slate-900 shadow-sm transition hover:-translate-y-1 hover:border-indigo-200">{{ $hero['secondary_button'] ?? 'See Our Work' }}</a>
            </div>
        </div>

        <div class="reveal delay-150">
            <div class="relative mx-auto max-w-lg">
                <div class="absolute -inset-6 rounded-[2rem] bg-indigo-100/70 blur-3xl"></div>
                <img src="{{ $this->mediaUrl($hero['image'] ?? null) }}" alt="UN Digital Marketing showcase" class="relative aspect-[4/5] w-full rounded-[2rem] object-cover shadow-2xl shadow-slate-300">
                <div class="absolute -bottom-6 -left-6 rounded-2xl bg-white p-5 shadow-xl">
                    <p class="text-xs font-black uppercase tracking-[0.18em] text-indigo-500">{{ $hero['stat_label'] ?? '' }}</p>
                    <p class="text-3xl font-black text-slate-950">{{ $hero['stat_value'] ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
