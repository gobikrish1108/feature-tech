<header class="sticky top-0 z-40 border-b border-slate-200 bg-white/95 backdrop-blur">
    <div class="flex items-center justify-between gap-4 px-6 py-4">
        <div class="min-w-0">
            <div class="flex items-center gap-3">
                <div class="min-w-0">
                    <h1 class="truncate text-2xl font-black">{{ $title }}</h1>
                    <p class="truncate text-sm text-slate-500">{{ $subtitle }}</p>
                </div>
            </div>
        </div>
        <div class="flex shrink-0 items-center gap-3">
            <a href="{{ route('home') }}" target="_blank" class="hidden rounded-xl border border-slate-200 px-4 py-2 text-sm font-black sm:inline-flex">View Site</a>
            <button wire:click="logout" class="rounded-xl bg-slate-950 px-4 py-2 text-sm font-black text-white">Logout</button>
        </div>
    </div>
</header>
