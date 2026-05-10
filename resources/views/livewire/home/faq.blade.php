<section class="bg-white px-6 py-20 lg:px-10">
    <div class="mx-auto max-w-4xl">
        <h2 class="text-center text-4xl font-black text-indigo-600">{{ $sectionTitles['faq_title'] ?? 'Frequently Asked Questions' }}</h2>
        <div class="mt-10 space-y-6">
            @foreach ($faqs as $faq)
                <article class="rounded border border-slate-200 bg-white p-7 shadow-sm">
                    <h3 class="text-lg font-black text-slate-950">{{ $faq['q'] }}</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $faq['a'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
