<section class="overflow-hidden bg-slate-100 py-14">
    <div class="mx-auto grid max-w-7xl items-center gap-8 px-6 lg:grid-cols-[220px_1fr] lg:px-10">
        <div class="border-l-4 border-cyan-400 bg-violet-50 px-6 py-5">
            <p class="text-sm font-black uppercase tracking-[0.25em] text-slate-800">Our Valuable <br> Clients</p>
        </div>

        <div class="space-y-4 overflow-hidden">
            @for ($row = 0; $row < 3; $row++)
                <div class="marquee {{ $row === 1 ? 'marquee-reverse' : '' }}">
                    <div class="marquee-track">
                        @foreach (array_merge($clients, $clients) as $client)
                            <span class="client-pill">{{ $client }}</span>
                        @endforeach
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
