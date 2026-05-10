<section id="about" class="bg-[#f4f6ff] px-6 py-24 lg:px-10">
    <div class="mx-auto max-w-7xl">
        <div class="mx-auto max-w-4xl rounded-3xl bg-white/90 px-8 py-14 text-center shadow-2xl shadow-indigo-100">
            <h2 class="mx-auto max-w-3xl text-4xl font-black leading-tight text-indigo-950 sm:text-5xl">
                {{ $about['title'] ?? '' }}
            </h2>
            <p class="mx-auto mt-7 max-w-3xl text-base leading-8 text-slate-600">
                {{ $about['description'] ?? '' }}
            </p>
        </div>
    </div>
</section>
