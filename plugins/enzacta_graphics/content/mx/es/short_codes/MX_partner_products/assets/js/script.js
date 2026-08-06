document.querySelectorAll('.WP-parnerproducts-acordion-container').forEach(function(element) {

    element.addEventListener('click', function() {

        let accordionName = this.getAttribute('data-accordion');

        let accordionContent = document.querySelector('.' + accordionName + '.WP-parnerproducts-acordion-description');

        let icon = document.querySelector('.' + accordionName + ' .WP-parnerproducts-acordion-button-icon');



        if (accordionContent.style.maxHeight) {

            accordionContent.style.maxHeight = null;

            accordionContent.style.padding = "0px";

            icon.src = 'https://enzactamedia.enzacta.com/ewp/sites/3/2025/01/plus_icon_02.svg';

        } else {

            accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';

            accordionContent.style.padding = "20px";

            icon.src = 'https://enzactamedia.enzacta.com/ewp/sites/3/2025/01/minus_icon_02.svg';

        }

    });

});

// ==================== +++ MAG +++ WENZ-1574 +++ 260804 +++ ====================
// Video Modal Script

(function() {
    var openBtn = document.getElementById('pp-video-open');
    var modal = document.getElementById('pp-video-modal');
    var closeBtn = modal && modal.querySelector('.PP-video-modal-close');
    var backdrop = modal && modal.querySelector('[data-modal-close="true"]');
    var iframe = document.getElementById('pp-video-iframe');
    var videoSrc = 'https://www.youtube.com/embed/wX8Q49kJObE?rel=0&playsinline=1';
    var lastFocused = null;
    var previousBodyOverflow = '';

    function openModal() {
        if (!modal) return;
        lastFocused = document.activeElement;
        previousBodyOverflow = document.body.style.overflow;
        document.body.style.overflow = 'hidden';
        modal.removeAttribute('hidden');
        modal.setAttribute('aria-hidden', 'false');
        iframe.src = videoSrc + '&autoplay=1';
        closeBtn && closeBtn.focus();
        document.addEventListener('keydown', handleKeydown);
    }

    function closeModal() {
        if (!modal || modal.hasAttribute('hidden')) return;
        modal.setAttribute('hidden', '');
        modal.setAttribute('aria-hidden', 'true');
        iframe.src = '';
        document.body.style.overflow = previousBodyOverflow;
        document.removeEventListener('keydown', handleKeydown);
        if (lastFocused && lastFocused.focus) {
            lastFocused.focus();
        }
    }

    function handleKeydown(event) {
        if (event.key === 'Escape' || event.key === 'Esc') {
            closeModal();
            return;
        }

        if (event.key === 'Tab') {
            var focusable = modal.querySelectorAll('button, iframe, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
            if (!focusable.length) return;
            var first = focusable[0];
            var last = focusable[focusable.length - 1];

            if (event.shiftKey) {
                if (document.activeElement === first) {
                    event.preventDefault();
                    last.focus();
                }
            } else {
                if (document.activeElement === last) {
                    event.preventDefault();
                    first.focus();
                }
            }
        }
    }

    if (openBtn) {
        openBtn.addEventListener('click', openModal);
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    if (backdrop) {
        backdrop.addEventListener('click', closeModal);
    }

    if (modal) {
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    }
})();

// ==================== +++ MAG +++ WENZ-1574 +++ 260804 +++ ====================