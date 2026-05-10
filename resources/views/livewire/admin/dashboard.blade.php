<div class="admin-shell">
    @include('livewire.admin.partials.sidebar', ['sections' => $cards])

    <div class="admin-main">
        @include('livewire.admin.partials.topbar', ['title' => 'Dashboard', 'subtitle' => 'Professional content management for the UN Digital Marketing homepage.'])

    <main class="px-6 py-8">
        <section class="grid gap-5 md:grid-cols-3">
            <div class="admin-stat">
                <span>Database</span>
                <strong>{{ $settingCount }}</strong>
                <p>Dynamic content records</p>
            </div>
            <div class="admin-stat">
                <span>Sections</span>
                <strong>{{ count($cards) }}</strong>
                <p>Separate editable areas</p>
            </div>
            <div class="admin-stat">
                <span>Status</span>
                <strong>Live</strong>
                <p>Public site reads SQLite content</p>
            </div>
        </section>

        <section class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/60">
            <div class="mb-6 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-black">Homepage Sections</h2>
                    <p class="mt-2 text-sm text-slate-500">Open a section to edit only that content group.</p>
                </div>
                <a href="{{ route('home') }}" target="_blank" class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-black">Preview Site</a>
            </div>

            <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($cards as $card)
                    <a href="{{ route('admin.sections.edit', $card['key']) }}" class="admin-section-card">
                        <div>
                            <span>{{ $card['badge'] }}</span>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['description'] }}</p>
                        </div>
                        <b>Edit →</b>
                    </a>
                @endforeach
            </div>
        </section>
    </main>
    </div>
</div>
