<section class="bg-slate-50 px-6 py-24 lg:px-10">
    <div class="mx-auto grid max-w-7xl gap-16 lg:grid-cols-[.85fr_1.15fr]">
        <div class="rounded-3xl bg-white p-10 shadow-2xl shadow-indigo-100">
            <div class="grid size-16 place-items-center rounded-2xl bg-violet-100 text-3xl text-indigo-600">●</div>
            <h2 class="mt-8 text-4xl font-black text-indigo-600">{{ $vision['title'] ?? '' }}</h2>
            <p class="mt-7 text-base leading-8 text-slate-600">
                {{ $vision['description'] ?? '' }}
            </p>
        </div>

        <div>
            <h2 class="text-4xl font-black text-indigo-600">Our Core Strategies</h2>
            <p class="mt-4 max-w-2xl text-slate-600">We don't just execute; we strategize for ROI. Our approach combines creative branding with hard data to turn clicks into loyal clients.</p>

            <div class="mt-10 space-y-8">
                @foreach ($strategies as $strategy)
                    <article class="strategy-card">
                        <span class="text-5xl font-black text-violet-300">{{ $strategy['number'] }}</span>
                        <div>
                            <h3 class="text-xl font-black text-slate-950">{{ $strategy['title'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-500">{{ $strategy['copy'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
