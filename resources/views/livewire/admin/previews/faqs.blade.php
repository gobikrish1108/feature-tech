<div class="mx-auto max-w-4xl">
    <div class="mb-6 flex items-center justify-between gap-4">
        <h3 class="text-3xl font-black text-indigo-600">Frequently Asked Questions</h3>
        <button type="button" wire:click="openEditor" class="admin-preview-edit">Edit FAQs</button>
    </div>
    <div class="space-y-5">
        @foreach ($data as $faq)
            <article class="rounded border border-slate-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-black">{{ $faq['q'] ?? '' }}</h4>
                <p class="mt-3 text-sm leading-7 text-slate-600">{{ $faq['a'] ?? '' }}</p>
            </article>
        @endforeach
    </div>
</div>
