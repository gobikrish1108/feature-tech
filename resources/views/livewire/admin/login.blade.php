<main class="grid min-h-screen lg:grid-cols-[1.05fr_.95fr]">
    <section class="relative hidden overflow-hidden bg-indigo-700 p-12 lg:block">
        <div class="absolute inset-0 opacity-20 hero-grid"></div>
        <div class="relative z-10 flex h-full flex-col justify-between">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3 text-sm font-black uppercase tracking-[0.18em] text-indigo-100">
                <span class="grid size-12 place-items-center rounded-xl bg-white text-xl font-black text-orange-500">UN</span>
                Digital Marketing
            </a>
            <div class="max-w-xl">
                <p class="mb-5 inline-flex rounded-full bg-white/10 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-100">Admin Console</p>
                <h1 class="text-6xl font-black leading-tight">Manage your website content with section control.</h1>
                <p class="mt-6 text-lg leading-8 text-indigo-100">Edit homepage copy, images, service cards, reels, FAQs, and contact details from one protected dashboard.</p>
            </div>
            <p class="text-sm text-indigo-100">SQLite powered. Livewire managed. Tailwind styled.</p>
        </div>
    </section>

    <section class="grid place-items-center px-6 py-12">
        <form wire:submit="login" class="w-full max-w-md rounded-2xl border border-white/10 bg-white p-8 text-slate-950 shadow-2xl">
            <div class="mb-8">
                <p class="text-sm font-black uppercase tracking-[0.18em] text-indigo-600">Secure Login</p>
                <h2 class="mt-3 text-3xl font-black">Admin Sign In</h2>
                <p class="mt-3 text-sm leading-6 text-slate-500">Use the admin credentials to access website editing pages.</p>
            </div>

            <label class="admin-auth-field">Email Address
                <input wire:model="email" type="email" autocomplete="email" placeholder="admin@admin.com">
            </label>

            <label class="admin-auth-field mt-5">Password
                <input wire:model="password" type="password" autocomplete="current-password" placeholder="12341234">
            </label>

            @error('email')
                <p class="mt-4 rounded-lg bg-rose-50 px-4 py-3 text-sm font-bold text-rose-600">{{ $message }}</p>
            @enderror

            <button class="mt-7 w-full rounded-xl bg-indigo-600 px-5 py-3.5 text-sm font-black text-white shadow-lg shadow-indigo-600/25 transition hover:bg-violet-600">Login to Dashboard</button>
        </form>
    </section>
</main>
