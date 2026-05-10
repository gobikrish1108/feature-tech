<section id="contact" class="bg-slate-50 px-6 py-24 lg:px-10">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 text-center">
            <h2 class="text-4xl font-black text-slate-950">{{ $sectionTitles['contact_title'] ?? '' }}</h2>
            <p class="mx-auto mt-5 max-w-2xl text-slate-600">{{ $sectionTitles['contact_description'] ?? '' }}</p>
        </div>

        <div class="grid overflow-hidden rounded-3xl bg-white shadow-2xl shadow-slate-200 lg:grid-cols-[.75fr_1.25fr]">
            <aside class="bg-indigo-700 p-10 text-white lg:p-14">
                <h3 class="text-3xl font-black">Contact Information</h3>
                <p class="mt-5 text-indigo-100">Fill out the form to connect with our team instantly via WhatsApp.</p>

                <div class="mt-10 space-y-9">
                    <div class="contact-row"><span>⌖</span><p><strong>Headquarters</strong><br>{{ $brand['address'] ?? '' }}</p></div>
                    <div class="contact-row"><span>☎</span><p><strong>Phone Number</strong><br>{{ $brand['phone'] ?? '' }}</p></div>
                    <div class="contact-row"><span>✉</span><p><strong>Email Address</strong><br>{{ $brand['email'] ?? '' }}</p></div>
                </div>
            </aside>

            <form id="whatsapp-form" class="p-10 lg:p-14">
                <h3 class="text-3xl font-black text-slate-950">Send Us A Message</h3>
                <div class="mt-8 grid gap-6 md:grid-cols-2">
                    <label class="form-field">First Name<input id="wa-fname" value="UN" type="text"></label>
                    <label class="form-field">Last Name<input id="wa-lname" value="Digital Marketing" type="text"></label>
                    <label class="form-field">Email Address<input id="wa-email" value="{{ $brand['email'] ?? '' }}" type="email"></label>
                    <label class="form-field">Phone Number<input id="wa-phone" value="+91 0000000000" type="text"></label>
                    <label class="form-field md:col-span-2">Your Message<textarea id="wa-message" rows="5">How can we help you grow?</textarea></label>
                </div>
                <button class="mt-8 w-full rounded-xl bg-indigo-600 px-8 py-4 text-sm font-black text-white transition hover:bg-violet-600" type="submit" data-whatsapp="{{ $brand['whatsapp'] ?? '917200862993' }}">Get Your Free Consultation →</button>
            </form>
        </div>
    </div>
</section>
