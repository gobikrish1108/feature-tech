<div class="admin-front-card">
    <div class="flex flex-wrap items-center justify-between gap-6">
        <div class="flex items-center gap-4">
            @if (! empty($data['logo']))
                <img src="{{ asset($data['logo']) }}" class="h-20 w-28 rounded-xl border border-slate-200 object-contain p-2">
            @else
                <span class="grid size-20 place-items-center rounded-2xl bg-indigo-600 text-2xl font-black text-white">UN</span>
            @endif
            <div>
                <h3 class="text-3xl font-black">{{ $data['name'] ?? '' }}</h3>
                <p class="mt-2 text-slate-500">{{ $data['location'] ?? '' }}</p>
            </div>
        </div>
        <button type="button" wire:click="openEditor" class="admin-preview-edit">Edit</button>
    </div>
    <div class="mt-8 grid gap-4 md:grid-cols-3">
        <div class="admin-info-tile">Email <strong>{{ $data['email'] ?? '' }}</strong></div>
        <div class="admin-info-tile">Phone <strong>{{ $data['phone'] ?? '' }}</strong></div>
        <div class="admin-info-tile">WhatsApp <strong>{{ $data['whatsapp'] ?? '' }}</strong></div>
    </div>
    <p class="mt-6 rounded-xl bg-slate-50 p-5 text-sm leading-7 text-slate-600">{{ $data['address'] ?? '' }}</p>
</div>
