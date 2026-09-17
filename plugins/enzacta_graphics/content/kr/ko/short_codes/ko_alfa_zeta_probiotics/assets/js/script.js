/* ============================================

    alfa ZETA PROBIOTICS - Script
    Page: [ko_alfa_zeta_probiotics]
    Country: KR | Lang: KO
    Dev: MAG | 260815

============================================ */


let encual = 0;
let delay = 7000;
let lastStartTime = Date.now();
let isPaused = false;
let animationFrame = null;

const slides = document.querySelectorAll('.carousel__slide');
const dots = document.querySelectorAll('.carousel__track .carousel__dot');
const totalcual = slides.length;

let progressDot = null;

function updateCarousel() {
	slides.forEach((slide, index) => {
		slide.classList.toggle('carousel__slide--active', index === encual);
	});

	dots.forEach((dot, index) => {
		dot.classList.toggle('carousel__dot--wide', index === encual);
		const inner = dot.querySelector('.carousel__dot-progress');
		inner.style.width = '0%';
	});

	lastStartTime = Date.now();
	progressDot = dots[encual].querySelector('.carousel__dot-progress');
	animateProgress();
}

function nextSlide() {
	encual = (encual + 1) % totalcual;
	cancelAnimationFrame(animationFrame);
	updateCarousel();
}

function animateProgress() {
	const now = Date.now();
	const elapsed = now - lastStartTime;
	const percent = Math.min(elapsed / delay, 1);

	if (progressDot) {
		progressDot.style.width = (percent * 100) + '%';
	}

	if (percent < 1 && !isPaused) {
		animationFrame = requestAnimationFrame(animateProgress);
	} else if (!isPaused && percent >= 1) {
		nextSlide();
	}
}

dots.forEach((dot, index) => {
	dot.addEventListener('click', () => {
		encual = index;
		updateCarousel();
	});
});

updateCarousel();

function ajustarAlturaContenedor() {
	const contenedores = document.querySelectorAll('.carousel__slide');
	const contenedorIndex = document.querySelector('.carousel__track');

	if (!contenedores.length || !contenedorIndex) return;

	contenedorIndex.style.maxHeight = '';

	let maxAltura = 0;

	contenedores.forEach(contenedor => {
		let altura = contenedor.offsetHeight;
		if (altura > maxAltura) {
			maxAltura = altura;
		}
	});

	contenedorIndex.style.maxHeight = maxAltura + 'px';
}

ajustarAlturaContenedor();

const carouselImages = document.querySelectorAll('.carousel__img');
const carouselImageReadyPromises = Array.from(carouselImages).map(image => {
	if (image.complete) {
		return typeof image.decode === 'function'
			? image.decode().catch(() => {})
			: Promise.resolve();
	}

	return new Promise(resolve => {
		image.addEventListener('load', resolve, { once: true });
		image.addEventListener('error', resolve, { once: true });
	}).then(() => {
		return typeof image.decode === 'function'
			? image.decode().catch(() => {})
			: undefined;
	});
});

Promise.all(carouselImageReadyPromises).then(ajustarAlturaContenedor);
window.addEventListener('load', ajustarAlturaContenedor);
window.addEventListener('resize', ajustarAlturaContenedor);


/* ---- Accordion / FAQ ---- */

document.querySelectorAll('.faq__item').forEach(function(element) {
    element.addEventListener('click', function() {
        let accordionName = this.getAttribute('data-accordion');
        let accordionContent = document.querySelector('.faq__answer--' + accordionName);
        let icon = document.querySelector('.faq__btn--' + accordionName + ' .faq__btn-icon');
        const isOpen = !!accordionContent.style.maxHeight;

        // Cierra todos
        document.querySelectorAll('.faq__answer').forEach(function(content) {
            content.style.maxHeight = null;
        });
        document.querySelectorAll('.faq__btn-icon').forEach(function(ic) {
            ic.src = 'https://enzactamedia.enzacta.com/ewp/sites/3/2025/01/plus_icon_02.svg';
        });

        // Si estaba cerrado, ábrelo
        if (!isOpen) {
            accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
            icon.src = 'https://enzactamedia.enzacta.com/ewp/sites/3/2025/01/minus_icon_02.svg';
        }
    });
});


/* ---- Scroll suave — botones del hero ---- */

document.querySelectorAll('.hero__nav-btn--info').forEach(function(button) {
    button.addEventListener('click', function() {
        const section = document.querySelector('.js-section--carousel');
        const offset = section.getBoundingClientRect().top + window.scrollY - 110;
        window.scrollTo({ top: offset, behavior: 'smooth' });
    });
});

document.querySelectorAll('.hero__nav-btn--faq').forEach(function(button) {
    button.addEventListener('click', function() {
        const section = document.querySelector('.js-section--faq');
        const offset = section.getBoundingClientRect().top + window.scrollY - 110;
        window.scrollTo({ top: offset, behavior: 'smooth' });
    });
});

document.querySelector('.hero__cta--description').addEventListener('click', function() {
    const destino = document.querySelector('.js-section--description');
    const offset = destino.getBoundingClientRect().top + window.scrollY - 110;
    window.scrollTo({ top: offset, behavior: 'smooth' });
});

document.querySelector('.hero__cta--facts').addEventListener('click', function() {
    const destino = document.querySelector('.js-section--facts');
    const offset = destino.getBoundingClientRect().top + window.scrollY - 110;
    window.scrollTo({ top: offset, behavior: 'smooth' });
});
