<div class="admin-front-card">
    <div class="mb-6 flex items-center justify-between gap-4">
        <h3 class="text-2xl font-black">Our Valuable Clients</h3>
        <button type="button" wire:click="openEditor" class="admin-preview-edit">Edit Clients</button>
    </div>
    <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($data as $client)
            <span class="client-pill">{{ $client }}</span>
        @endforeach
    </div>
</div>
