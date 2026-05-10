<section class="bg-slate-50 px-6 py-20 lg:px-10">
    <div class="mx-auto grid max-w-7xl gap-8 lg:grid-cols-[.75fr_1.25fr]">
        <article class="rounded-2xl border border-slate-200 bg-white p-10 shadow-xl shadow-slate-100">
            <h2 class="text-3xl font-black text-slate-950">{{ $location['title'] ?? 'Address.' }}</h2>
            <p class="mt-7 font-bold leading-7">{{ $brand['address'] ?? '' }}</p>
            <p class="mt-8 text-sm leading-7 text-slate-500">{{ $location['description'] ?? '' }}</p>
        </article>
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-xl shadow-slate-100">
            <img src="{{ $this->mediaUrl($location['image'] ?? null) }}" alt="Location preview map placeholder" class="h-80 w-full rounded-xl object-cover">
        </div>
    </div>
</section>
