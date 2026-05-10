<div class="min-h-screen">
    <div class="sticky top-0 z-40 border-b border-slate-200 bg-white/95 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <div>
                <h1 class="text-2xl font-black">Website Admin</h1>
                <p class="text-sm text-slate-500">Update every homepage section, text, image, logo, and repeated item.</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" target="_blank" class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-bold">View Site</a>
                <button form="page-editor-form" class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-black text-white shadow-lg shadow-indigo-600/20">Save Changes</button>
            </div>
        </div>
    </div>

    <form id="page-editor-form" wire:submit="save" class="mx-auto grid max-w-7xl gap-6 px-6 py-8">
        @if ($status)
            <div class="rounded-lg border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-bold text-emerald-700">{{ $status }}</div>
        @endif

        @if ($errors->any())
            <div class="rounded-lg border border-rose-200 bg-rose-50 px-5 py-4 text-sm font-bold text-rose-700">
                Upload failed. Logos must be 100KB or less. Other images must be 300KB or less unless PHP GD is enabled for compression.
            </div>
        @endif

        <section class="admin-panel">
            <h2>Brand, Contact, Logo</h2>
            <div class="admin-grid">
                <label>Brand Name<input wire:model="brand.name" type="text"></label>
                <label>Email<input wire:model="brand.email" type="email"></label>
                <label>Phone<input wire:model="brand.phone" type="text"></label>
                <label>WhatsApp Number<input wire:model="brand.whatsapp" type="text"></label>
                <label>Location Short<input wire:model="brand.location" type="text"></label>
                <label>Facebook URL<input wire:model="brand.facebook" type="url"></label>
                <label>Instagram URL<input wire:model="brand.instagram" type="url"></label>
                <label class="md:col-span-2">Full Address<textarea wire:model="brand.address" rows="3"></textarea></label>
                <label>Logo Upload, 50-100KB<input wire:model="logoUpload" type="file" accept="image/*"></label>
                @if (! empty($brand['logo']))
                    <div><span class="admin-label">Current Logo</span><img src="{{ asset($brand['logo']) }}" class="mt-2 h-20 w-32 rounded-lg object-contain bg-white"></div>
                @endif
            </div>
        </section>

        <section class="admin-panel">
            <h2>Hero Section</h2>
            <div class="admin-grid">
                <label>Badge<input wire:model="hero.badge" type="text"></label>
                <label>Title<input wire:model="hero.title" type="text"></label>
                <label>Gradient Text<input wire:model="hero.highlight" type="text"></label>
                <label>Primary Button<input wire:model="hero.primary_button" type="text"></label>
                <label>Secondary Button<input wire:model="hero.secondary_button" type="text"></label>
                <label>Stat Label<input wire:model="hero.stat_label" type="text"></label>
                <label>Stat Value<input wire:model="hero.stat_value" type="text"></label>
                <label>Hero Image, 200-300KB<input wire:model="heroImageUpload" type="file" accept="image/*"></label>
                <label class="md:col-span-2">Description<textarea wire:model="hero.description" rows="4"></textarea></label>
                @if (! empty($hero['image']))
                    <div><span class="admin-label">Current Hero Image</span><img src="{{ asset($hero['image']) }}" class="mt-2 h-32 w-48 rounded-lg object-cover"></div>
                @endif
            </div>
        </section>

        <section class="admin-panel">
            <h2>Section Titles</h2>
            <div class="admin-grid">
                @foreach ($sectionTitles as $key => $value)
                    <label>{{ str($key)->replace('_', ' ')->title() }}<textarea wire:model="sectionTitles.{{ $key }}" rows="2"></textarea></label>
                @endforeach
            </div>
        </section>

        <section class="admin-panel">
            <h2>About and Vision</h2>
            <div class="admin-grid">
                <label>About Title<input wire:model="about.title" type="text"></label>
                <label>Vision Title<input wire:model="vision.title" type="text"></label>
                <label class="md:col-span-2">About Description<textarea wire:model="about.description" rows="4"></textarea></label>
                <label class="md:col-span-2">Vision Description<textarea wire:model="vision.description" rows="4"></textarea></label>
            </div>
        </section>

        <section class="admin-panel">
            <div class="admin-heading">
                <h2>Clients</h2>
                <button type="button" wire:click="addClient">Add Client</button>
            </div>
            <div class="grid gap-3 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($clients as $index => $client)
                    <div class="flex gap-2">
                        <input wire:model="clients.{{ $index }}" type="text" class="admin-input">
                        <button type="button" wire:click="removeClient({{ $index }})" class="admin-remove">Remove</button>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="admin-panel">
            <div class="admin-heading">
                <h2>Services</h2>
                <button type="button" wire:click="addService">Add Service</button>
            </div>
            <div class="grid gap-5">
                @foreach ($services as $index => $service)
                    <div class="admin-repeat">
                        <div class="admin-grid">
                            <label>Title<input wire:model="services.{{ $index }}.title" type="text"></label>
                            <label>Icon
                                <select wire:model="services.{{ $index }}.icon">
                                    @foreach (['megaphone','code','target','chart','users','bot','pen'] as $icon)
                                        <option value="{{ $icon }}">{{ $icon }}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label>Color
                                <select wire:model="services.{{ $index }}.color">
                                    @foreach (['rose','violet','orange','teal','amber','blue','purple'] as $color)
                                        <option value="{{ $color }}">{{ $color }}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label>Image, 200-300KB<input wire:model="serviceUploads.{{ $index }}" type="file" accept="image/*"></label>
                            <label class="md:col-span-2">Copy<textarea wire:model="services.{{ $index }}.copy" rows="3"></textarea></label>
                            @if (! empty($service['image']))
                                <img src="{{ asset($service['image']) }}" class="h-24 w-24 rounded-lg object-cover">
                            @endif
                        </div>
                        <button type="button" wire:click="removeService({{ $index }})" class="admin-remove mt-4">Remove Service</button>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="admin-panel">
            <div class="admin-heading">
                <h2>Reels / Work Cards</h2>
                <button type="button" wire:click="addReel">Add Reel</button>
            </div>
            <div class="grid gap-5">
                @foreach ($reels as $index => $reel)
                    <div class="admin-repeat">
                        <div class="admin-grid">
                            <label>Views<input wire:model="reels.{{ $index }}.views" type="text"></label>
                            <label>Instagram URL<input wire:model="reels.{{ $index }}.url" type="url"></label>
                            <label>Image, 200-300KB<input wire:model="reelUploads.{{ $index }}" type="file" accept="image/*"></label>
                            @if (! empty($reel['image']))
                                <img src="{{ asset($reel['image']) }}" class="h-32 w-24 rounded-lg object-cover">
                            @endif
                        </div>
                        <button type="button" wire:click="removeReel({{ $index }})" class="admin-remove mt-4">Remove Reel</button>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="admin-panel">
            <div class="admin-heading">
                <h2>Strategies</h2>
                <button type="button" wire:click="addStrategy">Add Strategy</button>
            </div>
            <div class="grid gap-5">
                @foreach ($strategies as $index => $strategy)
                    <div class="admin-repeat">
                        <div class="admin-grid">
                            <label>Number<input wire:model="strategies.{{ $index }}.number" type="text"></label>
                            <label>Title<input wire:model="strategies.{{ $index }}.title" type="text"></label>
                            <label class="md:col-span-2">Copy<textarea wire:model="strategies.{{ $index }}.copy" rows="3"></textarea></label>
                        </div>
                        <button type="button" wire:click="removeStrategy({{ $index }})" class="admin-remove mt-4">Remove Strategy</button>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="admin-panel">
            <h2>Location</h2>
            <div class="admin-grid">
                <label>Title<input wire:model="location.title" type="text"></label>
                <label>Map/Image, 200-300KB<input wire:model="locationImageUpload" type="file" accept="image/*"></label>
                <label class="md:col-span-2">Description<textarea wire:model="location.description" rows="4"></textarea></label>
                @if (! empty($location['image']))
                    <img src="{{ asset($location['image']) }}" class="h-28 w-48 rounded-lg object-cover">
                @endif
            </div>
        </section>

        <section class="admin-panel">
            <div class="admin-heading">
                <h2>FAQs</h2>
                <button type="button" wire:click="addFaq">Add FAQ</button>
            </div>
            <div class="grid gap-5">
                @foreach ($faqs as $index => $faq)
                    <div class="admin-repeat">
                        <label>Question<input wire:model="faqs.{{ $index }}.q" type="text"></label>
                        <label class="mt-4">Answer<textarea wire:model="faqs.{{ $index }}.a" rows="3"></textarea></label>
                        <button type="button" wire:click="removeFaq({{ $index }})" class="admin-remove mt-4">Remove FAQ</button>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="admin-panel">
            <h2>Footer</h2>
            <label>Footer Description<textarea wire:model="footer.description" rows="4"></textarea></label>
        </section>
    </form>
</div>
