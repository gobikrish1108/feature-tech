<section id="service" class="relative overflow-hidden bg-[#f4f6ff] px-6 py-20 lg:px-10">
    <span class="sparkle left-10 top-24">✳</span>
    <div class="mx-auto max-w-7xl">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-4xl font-black leading-tight text-slate-950 sm:text-5xl">{{ $sectionTitles['services_title'] ?? '' }}</h2>
            <p class="mt-6 text-slate-500">{{ $sectionTitles['services_description'] ?? '' }}</p>
        </div>

        <div class="mt-20 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($services as $service)
                <article class="service-card service-{{ $service['color'] }}">
                    <div class="service-icon">@include('livewire.home.icons', ['name' => $service['icon']])</div>
                    @if (! empty($service['image']))
                        <img src="{{ $this->mediaUrl($service['image']) }}" alt="{{ $service['title'] }}" class="mx-auto mt-5 h-20 w-20 rounded-xl object-cover">
                    @endif
                    <h3 class="mt-7 text-xl font-black text-slate-950">{{ $service['title'] }}</h3>
                    <p class="mt-5 text-sm leading-7 text-slate-500">{{ $service['copy'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
