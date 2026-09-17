<?php

	/**
	 * contents for short code pages go inside this page
	 */

	if (!wp_script_is('zeta-probiotics-adobe-fonts', 'enqueued')) {
		wp_enqueue_script('zeta-probiotics-adobe-fonts', 'https://use.typekit.net/ntd6aba.js', array(), null, true);
		wp_add_inline_script('zeta-probiotics-adobe-fonts', 'try { Typekit.load({ async: true }); } catch (e) {}');
	}

	wp_enqueue_style(
		'content-styles',
		plugins_url('assets/css/style.css', __FILE__),
		array(),
		filemtime(__DIR__ . '/assets/css/style.css')
	);
	wp_enqueue_script('content-js',plugins_url('assets/js/script.js', __FILE__ ), array(), false, true);
	wp_localize_script('content-js','graphics_obj',array('ajaxurl' => admin_url('admin-ajax.php'),
					'plugin_graphics_url' => PLUGIN_GRPHICS_URL,
					'image_server_base_path'=>IMAGE_SERVER_BASE_PATH));

?>

<body id="product-page">

	<!-- ========== HERO ========== -->

	<div class="hero">
		<img class="hero__bg" src="<?= plugins_url('assets/img/hero/hero_cover.png', __FILE__) ?>"
			sizes="(max-width: 600px) 400px, 800px"
			alt="alfa ZETA PROBIOTICS cover & box"
			title="alfa ZETA PROBIOTICS"
			width="800"
			height="300"
			loading="lazy"
			fetchpriority="high"
			decoding="sync"
		>
		<div class="hero__flex">

			<div class="hero__nav-btn--mobile">
				<p class="hero__nav-btn hero__nav-btn--info">MORE INFO ></p>
				<p class="hero__nav-btn hero__nav-btn--faq">FAQ ></p>
			</div>

			<div class="block06 hero__col--left" style="min-height: 300px;">

			</div>
			<div class="block05 hero__col--right">
				<div class="hero__content">
					<div class="hero__nav">
						<p class="hero__nav-btn hero__nav-btn--desktop hero__nav-btn--info">MORE INFO ></p>
						<p class="hero__nav-btn hero__nav-btn--desktop hero__nav-btn--faq">FAQ ></p>
					</div>
					<div class="hero__text">
						<p class="hero__category">WELLBEING</p>
						<div class="hero__separator"></div>
						<h2 class="hero__subtitle">alfa</h2>
						<h1 class="hero__title">ZETA PROBIOTICS</h1>
						<p class="hero__description">
							Support everyday gut wellness with alfa ZETA PROBIOTICS, a refreshing peach-flavored 7+5+1 triple-biotic formula with 10 billion CFU, seven Probiotics, five prebiotics, one postbiotic, and patented ZetaBio® technology, all in a convenient stick designed to mix easily with water.
						</p>
						<div class="flexme">
							<div class="hero__cta hero__cta--description">
								DESCRIPTION
							</div>
							<div class="hero__cta hero__cta--facts">
								FACTS
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ========== ICONS ========== -->

	<div class="icons">
		<div class="icons__header">
			<h4 class="icons__title">
				Made complete <span class="icons__title-emphasis">Through Design</span>, not ingredients alone.
			</h4>
			<div class="icons__separator"></div>
		</div>

		<div class="icons__grid containerflexwrap">
			<div class="block03">
				<img alt="PROBIOTICS" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_probiotics.png', __FILE__) ?>">
				<h2 class="icons__subtitle">PROBIOTICS</h2>
				<p class="icons__text">Seven selected strains with 10 billion CFU daily.</p>
			</div>
			<div class="block03">
				<img alt="PREBIOTICS" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_prebiotics.png', __FILE__) ?>">
				<h2 class="icons__subtitle">PREBIOTICS</h2>
				<p class="icons__text">Five prebiotics to nourish beneficial gut bacteria</p>
			</div>
			<div class="block03">
				<img alt="POSTBIOTICS" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_postbiotics.png', __FILE__) ?>">
				<h2 class="icons__subtitle">POSTBIOTICS</h2>
				<p class="icons__text">One postbiotic completes the triple-biotic formula</p>
			</div>
			<div class="block03">
				<img alt="ZETABIO TECHNOLOGY" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_technology.png', __FILE__) ?>">
				<h2 class="icons__subtitle">ZETABIO TECHNOLOGY</h2>
				<p class="icons__text">Patented technology that reactivates probiotics</p>
			</div>
			<div class="block03">
				<img alt="PEACH FLAVOR" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_peach.png', __FILE__) ?>">
				<h2 class="icons__subtitle">PEACH FLAVOR</h2>
				<p class="icons__text">A refreshing peach flavor for enjoyable daily use</p>
			</div>
		</div>
	</div>

	<!-- ========== INFO ========== -->

	<div class="info containerflexwrap js-section--description">
		<div class="block03">
			<img alt="ZETA triple-biotic infographic" class="info__img" src="<?= plugins_url('assets/img/info/info_triple_infographic.png', __FILE__) ?>">
			<p class="info__img-caption">
				THREE BIOTIC PILLARS, ONE COMPLETE FORMULA
			</p>
		</div>
		<div class="block06">
			<h2 class="info__title">WHY ALFA ZETA PROBIOTICS</h2>
			<div class="info__separator"></div>
			<h3 class="info__subtitle">What Makes a Good Probiotic Different?</h3>
			<p class="info__text">
				What matters more than how much is included is how it has been designed.
			</p>

			<div class="info__button">
				<div class="info__button--pro">PRO</div>
				<span class="info__button--plus">+</span>
				<div class="info__button--con">PRE</div>
				<span class="info__button--plus">+</span>
				<div class="info__button--pro">POST</div>
			</div>

			<p class="info__text">
				A <span class="info__text--bold">triple-biotic</span> formula completed through precise design, from strain selection to ZetaBio Technology.
			</p>

			<p class="info__text--number">7 + 5 + 1 = Designed for Gut Health</p>

			<p class="info__text">
				Good strains are the foundation; the combination completes the formula. Pro, pre, post, three pillars brought together in one formula.
			</p>

			<div class="info__cards--box">
				<div class="info__card--red">
					<div class="info__card--title">
						7 PROBIOTICS
					</div>
					<div class="info--separator"></div>
					<div class="info__card--content">
						7 Danisco probiotic strains<br>
						10 billion CFU
					</div>
				</div>

				<div class="info__card--green">
					<div class="info__card--title">
						5 PREBIOTICS
					</div>
					<div class="info--separator"></div>
					<div class="info__card--content">
						5 prebiotic sources that nourish beneficial gut bacteria
					</div>
				</div>
				<div class="info__card--orange">
					<div class="info__card--title">
						1 POSTBIOTIC
					</div>
					<div class="info--separator"></div>
					<div class="info__card--content">
						Made from inactivated probiotic cells
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- ========== HEALTH ========== -->

	<div class="health">
		<div class="health__header">
			<h4 class="health__title">
				A <span class="health__title--bold">unique</span> and functional blend of brown rice!
			</h4>
			<div class="health__separator"></div>
		</div>

		<div class="health__container">

		</div>
	</div>

	<!-- ========== INSTRUCTIONS ========== -->

	<div class="instructions">
		<div class="instructions__container">


			<div class="instructions__header">
				<img class="instructions__img" src="<?= plugins_url('assets/img/instructions/instructions_glass.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS peach drink preparation">
				<div class="instructions__block">

					<h4 class="instructions__title">
						7 Probiotic Strains from
						<br>
						IFF-Danisco
					</h4>
					<div class="instructions__separator"></div>

					<div class="instructions__text">
						Refreshing peach flavor turns your daily probiotic routine <span class="instructions__bold">into a moment to enjoy</span>.
					</div>
					<div class="instructions__box">

						<div class="instructions__item">
							<img class="instructions__item-img" src="<?= plugins_url('assets/img/instructions/instructions_shield_icon.png', __FILE__) ?>" alt="Selected probiotic strains">
							<p class="instructions__item-title">
								Selected Probiotic<br>
								Strains
							</p>
							<p class="instructions__item-text">
								Made with carefully selected probiotic strains
							</p>
						</div>
						<div class="instructions__item">
							<img class="instructions__item-img" src="<?= plugins_url('assets/img/instructions/instructions_gut_icon.png', __FILE__) ?>" alt="Designed to reach the gut">
							<p class="instructions__item-title">
								Designed to Reach<br>
								the Gut
							</p>
							<p class="instructions__item-text">
								Formulated to help probiotics remain viable through the digestive journey
							</p>
						</div>

					</div>

				</div>
			</div>

			<div class="instructions__divisor"></div>

			<div class="instructions__body">

				<div class="instructions__row instructions__row--intro">
					<img class="instructions__package" src="<?= plugins_url('assets/img/instructions/instructions_package.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS package">
					<div class="instructions__how">
						How to use
					</div>
				</div>

				<div class="instructions__row instructions__row--steps">

					<div class="instructions__step">
						<img class="instructions__step-img instructions__step-img--primary" src="<?= plugins_url('assets/img/instructions/instructions_stick_icon.png', __FILE__) ?>" alt="One alfa ZETA PROBIOTICS stick">
						<p class="instructions__step-text">1 stick per serving<br>
							(5 g)</p>
					</div>
					<div class="instructions__step">
						<img class="instructions__step-img" src="<?= plugins_url('assets/img/instructions/instructions_water_icon.png', __FILE__) ?>" alt="100 ml of water">
						<p class="instructions__step-text">Mix with 100 ml<br>
							of water</p>
					</div>
					<div class="instructions__step">
						<img class="instructions__step-img" src="<?= plugins_url('assets/img/instructions/instructions_wait_icon.png', __FILE__) ?>" alt="Wait one minute">
						<p class="instructions__step-text">Wait 1 minute</p>
					</div>
					<div class="instructions__step">
						<img class="instructions__step-img" src="<?= plugins_url('assets/img/instructions/instructions_glass_icon.png', __FILE__) ?>" alt="Drink alfa ZETA PROBIOTICS">
						<p class="instructions__step-text">Drink</p>
					</div>

				</div>

				<div class="instructions__row instructions__row--extra">
					<h3 class="instructions__row-title">JUST 1 MINUTE</h3>
					<p class="instructions__row-text">A moment for your probiotics to come to life!</p>
				</div>

			</div>

			<div class="instructions__divisor"></div>

			<div class="instructions__footer">
				<div class="instructions__footer--flex">
					<div class="instructions__footer--box">
						<h3 class="instructions__footer--title">Beyond the Probiotic Blend</h3>
						<p class="instructions__footer--text">In addition to its pro, pre, and postbiotic formula, alfa ZETA PROBIOTICS includes vitamin D3, zinc, and a blend of nine organic fruits and vegetables.</p>
						<div class="instructions__separator"></div>
						<div class="instructions__footer--icons">
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_nutrient_circle_vitamin_d3.png', __FILE__) ?>" alt="Vitamin D3">
								<p class="instructions__footer--icon-text">Vitamin D3</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_nutrient_circle_zinc.png', __FILE__) ?>" alt="Zinc">
								<p class="instructions__footer--icon-text">Zinc</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_nutrient_circle_organic_fruits_vegetables.png', __FILE__) ?>" alt="9 Organic Fruits & Vegetables">
								<p class="instructions__footer--icon-text">9 Organic Fruits & Vegetables</p>
							</div>
						</div>
					</div>

					<div class="instructions__footer--box">
						<h3 class="instructions__footer--title">Made with Fewer Unnecessary Additives</h3>
						<p class="instructions__footer--text">Designed for everyday use, the formula focuses on essentials and leaves out selected unnecessary additives.</p>
						<div class="instructions__separator"></div>
						<div class="instructions__footer--icons">
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_silicon_dioxide_badge.png', __FILE__) ?>" alt="No added silicon dioxide">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">NO ADDED</span>
									<span class="instructions__footer--icon-label">Silicon Dioxide</span>
								</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_magnesium_stearate_badge.png', __FILE__) ?>" alt="No added magnesium stearate">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">NO ADDED</span>
									<span class="instructions__footer--icon-label">Magnesium Stearate</span>
								</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_synthetic_preservatives_badge.png', __FILE__) ?>" alt="No added synthetic preservatives">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">NO ADDED</span>
									<span class="instructions__footer--icon-label">Synthetic Preservatives</span>
								</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_artificial_colors_badge.png', __FILE__) ?>" alt="No added artificial colors">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">NO ADDED</span>
									<span class="instructions__footer--icon-label">Artificial Colors</span>
								</p>
							</div>

						</div>
					</div>

				</div>
			</div>


		</div>
	</div>

	<!-- ========== CAROUSEL ========== -->

	<div class="carousel js-section--carousel">
		<div id="carousel__track" class="carousel__track flexme">
			<div class="block12 carousel__slide carousel__slide--active">
				<h2 class="carousel__title">Who Is alfa ZETA PROBIOTICS For?</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					A convenient daily option for people looking to support digestive wellness and maintain a balanced gut routine.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS wellness icon">
				<h4 class="carousel__subtitle">Everyday Gut Wellness</h4>
				<h4 class="carousel__footer">For those looking to support their overall gut health</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">Who Is alfa ZETA PROBIOTICS For?</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					A convenient daily option for people looking to support digestive wellness and maintain a balanced gut routine.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS wellness icon">
				<h4 class="carousel__subtitle">Regular Bowel Routine</h4>
				<h4 class="carousel__footer">For those looking to support comfortable and regular bowel movements.</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">Who Is alfa ZETA PROBIOTICS For?</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					A convenient daily option for people looking to support digestive wellness and maintain a balanced gut routine.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS wellness icon">
				<h4 class="carousel__subtitle">Irregular Eating Habits</h4>
				<h4 class="carousel__footer">For those concerned about gut wellness due to inconsistent meal patterns.</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">Who Is alfa ZETA PROBIOTICS For?</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					A convenient daily option for people looking to support digestive wellness and maintain a balanced gut routine.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS wellness icon">
				<h4 class="carousel__subtitle">Stress and Fatigue</h4>
				<h4 class="carousel__footer">For those concerned about their gut condition due to stress and fatigue.</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">Who Is alfa ZETA PROBIOTICS For?</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					A convenient daily option for people looking to support digestive wellness and maintain a balanced gut routine.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS wellness icon">
				<h4 class="carousel__subtitle">Frequent Digestive Discomfort</h4>
				<h4 class="carousel__footer">For those who often experience occasional stomach or digestive discomfort.</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">Who Is alfa ZETA PROBIOTICS For?</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					A convenient daily option for people looking to support digestive wellness and maintain a balanced gut routine.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS wellness icon">
				<h4 class="carousel__subtitle">Beneficial Gut Bacteria Balance</h4>
				<h4 class="carousel__footer">For those looking to maintain a healthy balance of beneficial gut bacteria.</h4>
			</div>

			<div class="block12 carousel__dots">
				<table>
					<tr>
						<td class="carousel__dot-cell">
							<div class="carousel__dot">
								<div class="carousel__dot-bg"></div>
								<div class="carousel__dot-progress"></div>
							</div>
						</td>
						<td class="carousel__dot-cell">
							<div class="carousel__dot">
								<div class="carousel__dot-bg"></div>
								<div class="carousel__dot-progress"></div>
							</div>
						</td>
						<td class="carousel__dot-cell">
							<div class="carousel__dot">
								<div class="carousel__dot-bg"></div>
								<div class="carousel__dot-progress"></div>
							</div>
						</td>
						<td class="carousel__dot-cell">
							<div class="carousel__dot">
								<div class="carousel__dot-bg"></div>
								<div class="carousel__dot-progress"></div>
							</div>
						</td>
						<td class="carousel__dot-cell">
							<div class="carousel__dot">
								<div class="carousel__dot-bg"></div>
								<div class="carousel__dot-progress"></div>
							</div>
						</td>
						<td class="carousel__dot-cell">
							<div class="carousel__dot">
								<div class="carousel__dot-bg"></div>
								<div class="carousel__dot-progress"></div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<!-- ========== FAQ ========== -->

	<div class="faq js-section--faq">
		<h2 class="faq__title">FAQ</h2>
		<div class="faq__separator"></div>
		<div class="faq__list">
			<div class="faq__item" data-accordion="c1">
				<div class="faq__btn faq__btn--c1">
					<p>What is the recommended dose of alfa PROBIOTICS?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c1">
					<div class="faq__answer-inner">
						<p>The recommended dose is one packet a day.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c2">
				<div class="faq__btn faq__btn--c2">
					<p>Do I have to take alfa probiotics with water?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c2">
					<div class="faq__answer-inner">
						<p>It is okay to consume only alfa probiotics, but when consumed by mixing alfa probiotics with 100ml of water, lactobacillus cell membrane restoration can improve intestinal survival and intestinal adhesion.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c3">
				<div class="faq__btn faq__btn--c3">
					<p>What is Zeta bio technology?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c3">
					<div class="faq__answer-inner">
						<p>Microbial testing confirms that freeze-dried lactic acid bacteria have similar survival rates and intestinal adhesion to probiotics as a next-generation technology to have the same charge (-charge) as living lactic acid bacteria by reactivating them with zeta bio technology.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c4">
				<div class="faq__btn faq__btn--c4">
					<p>If I don’t like the product, can I return it for a refund?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c4">
					<div class="faq__answer-inner">
						<p>Yes! And we’re so sure you’re going to enjoy it, we offer you a 30-day guarantee on your first purchase of any product.</p>
						<img alt="ENZACTA guarantee seal" class="faq__guarantee-img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/ENZACTA_Guarantee_Seal.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ========== FACTS ========== -->

	<div class="facts js-section--facts" style="background: url(<?= plugins_url('assets/img/facts/facts_bg.jpg', __FILE__) ?>)">
		<div class="facts__wrapper">
			<div class="facts__card">
				<img class="facts__img" alt="Product Information | alfa ZETA PROBIOTICS" src="<?= plugins_url('assets/img/facts/facts_zeta_probiotics.png', __FILE__) ?>">
			</div>
			<!-- <div class="facts__card">
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Nutritional_EN_2605.png">
			</div> -->
		</div>
	</div>

	<!-- ========== FOOTER PRODUCT ========== -->

	<div class="product-footer">
		<img class="product-footer__img" alt="alfa ZETA PROBIOTICS" src="<?= plugins_url('assets/img/footer/footer_zeta_probiotics_composition.png', __FILE__) ?>">
		<p class="product-footer__text">Content : 150g (5g x 30 packets).</p>
		<div class="product-footer__disclaimer">
			<p class="product-footer__disclaimer-text">*These statements have not been evaluated by the Food and Drug Administration, this product is not intended to diagnose, treat, cure, or prevent any disease.</p>
		</div>
	</div>

</body>


<?php
?>
