<div class="admin-shell">
    @include('livewire.admin.partials.sidebar', ['sections' => $sections, 'section' => $section])

    <div class="admin-main">
    @include('livewire.admin.partials.topbar', ['title' => $meta['title'], 'subtitle' => $meta['description']])

    <main class="px-6 py-8">
        @if ($status)
            <div class="mb-5 rounded-xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-bold text-emerald-700">{{ $status }}</div>
        @endif

        <section class="admin-preview-stage">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
                <div>
                    <p class="text-xs font-black uppercase tracking-[0.18em] text-indigo-600">{{ $meta['badge'] }} Section</p>
                    <h2 class="mt-2 text-3xl font-black">Frontend Preview</h2>
                    <p class="mt-2 text-sm text-slate-500">This preview shows the selected homepage part only. Use Edit to update content.</p>
                </div>
                <button type="button" wire:click="openEditor" class="rounded-xl bg-indigo-600 px-5 py-3 text-sm font-black text-white shadow-lg shadow-indigo-600/20">Edit {{ $meta['title'] }}</button>
            </div>

            @includeIf('livewire.admin.previews.'.$section)
        </section>

        @if ($showEditor)
            <div class="admin-modal-backdrop" wire:click.self="closeEditor">
                <form wire:submit="save" class="admin-modal admin-panel">
                    <div class="mb-6 flex items-start justify-between gap-4 border-b border-slate-100 pb-5">
                        <div>
                            <p class="text-xs font-black uppercase tracking-[0.18em] text-indigo-600">Edit Content</p>
                            <h2 class="mt-2 text-2xl font-black">{{ $meta['title'] }}</h2>
                        </div>
                        <button type="button" wire:click="closeEditor" class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-black">Close</button>
                    </div>

                    @if ($errors->any())
                        <div class="mb-5 rounded-xl border border-rose-200 bg-rose-50 px-5 py-4 text-sm font-bold text-rose-700">
                            Upload failed. Logo max is 100KB. Other images max is 300KB.
                        </div>
                    @endif

                    @includeIf('livewire.admin.sections.'.$section)

                    <div class="sticky bottom-0 mt-6 flex justify-end gap-3 border-t border-slate-100 bg-white pt-5">
                        <button type="button" wire:click="closeEditor" class="rounded-xl border border-slate-200 px-5 py-3 text-sm font-black">Cancel</button>
                        <button class="rounded-xl bg-indigo-600 px-5 py-3 text-sm font-black text-white shadow-lg shadow-indigo-600/20">Save Changes</button>
                    </div>
                </form>
            </div>
        @endif
    </main>
    </div>
</div>
