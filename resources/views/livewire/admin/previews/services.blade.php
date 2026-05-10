<div class="admin-front-band">
    <div class="mb-8 flex flex-wrap items-center justify-between gap-4 text-center md:text-left">
        <div>
            <h3 class="text-3xl font-black">High-Impact Digital Services</h3>
            <p class="mt-2 text-slate-500">Service cards exactly as the frontend section structure.</p>
        </div>
        <button type="button" wire:click="openEditor" class="admin-preview-edit">Edit Services</button>
    </div>
    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        @foreach ($data as $service)
            <article class="service-card service-{{ $service['color'] ?? 'blue' }}">
                <div class="service-icon">@include('livewire.home.icons', ['name' => $service['icon'] ?? 'megaphone'])</div>
                @if (! empty($service['image']))
                    <img src="{{ asset($service['image']) }}" class="mx-auto mt-5 h-20 w-20 rounded-xl object-cover">
                @endif
                <h4 class="mt-7 text-xl font-black">{{ $service['title'] ?? '' }}</h4>
                <p class="mt-5 text-sm leading-7 text-slate-500">{{ $service['copy'] ?? '' }}</p>
            </article>
        @endforeach
    </div>
</div>
