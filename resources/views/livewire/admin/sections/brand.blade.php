<div class="admin-grid">
    <label>Brand Name<input wire:model="data.name" type="text"></label>
    <label>Email<input wire:model="data.email" type="email"></label>
    <label>Phone<input wire:model="data.phone" type="text"></label>
    <label>WhatsApp Number<input wire:model="data.whatsapp" type="text"></label>
    <label>Location Short<input wire:model="data.location" type="text"></label>
    <label>Facebook URL<input wire:model="data.facebook" type="url"></label>
    <label>Instagram URL<input wire:model="data.instagram" type="url"></label>
    <label>Logo Upload, 50-100KB<input wire:model="logoUpload" type="file" accept="image/*"></label>
    <label class="md:col-span-2">Full Address<textarea wire:model="data.address" rows="4"></textarea></label>
    @if (! empty($data['logo']))
        <div><span class="admin-label">Current Logo</span><img src="{{ asset($data['logo']) }}" class="mt-2 h-24 w-40 rounded-xl border border-slate-200 bg-white object-contain p-2"></div>
    @endif
</div>
