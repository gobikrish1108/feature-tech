import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('whatsapp-form');

    if (form) {
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const firstName = document.getElementById('wa-fname')?.value ?? '';
            const lastName = document.getElementById('wa-lname')?.value ?? '';
            const email = document.getElementById('wa-email')?.value ?? '';
            const phone = document.getElementById('wa-phone')?.value ?? '';
            const message = document.getElementById('wa-message')?.value ?? '';

            const text = [
                '*New Lead from Website!*',
                '',
                `*Name:* ${firstName} ${lastName}`.trim(),
                `*Email:* ${email}`,
                `*Phone:* ${phone}`,
                '',
                `*Message:* ${message}`,
            ].join('\n');

            const whatsappNumber = form.querySelector('[data-whatsapp]')?.dataset.whatsapp ?? '917200862993';

            window.open(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`, '_blank');
        });
    }

    document.querySelectorAll('.reels-carousel').forEach((carousel) => {
        let isDown = false;
        let startX = 0;
        let scrollLeft = 0;

        carousel.addEventListener('pointerdown', (event) => {
            isDown = true;
            startX = event.pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
            carousel.setPointerCapture(event.pointerId);
        });

        carousel.addEventListener('pointerup', () => {
            isDown = false;
        });

        carousel.addEventListener('pointerleave', () => {
            isDown = false;
        });

        carousel.addEventListener('pointermove', (event) => {
            if (!isDown) {
                return;
            }

            event.preventDefault();
            const x = event.pageX - carousel.offsetLeft;
            carousel.scrollLeft = scrollLeft - ((x - startX) * 1.4);
        });
    });
});
