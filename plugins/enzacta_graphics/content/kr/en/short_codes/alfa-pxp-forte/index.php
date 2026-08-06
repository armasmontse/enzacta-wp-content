<?php

	/**
	 * contents for short code pages go inside this page
	 */

	wp_enqueue_style( 'content-styles', plugins_url('assets/css/style.css', __FILE__));
	wp_enqueue_script('content-js',plugins_url('assets/js/script.js', __FILE__ ), array(), false, true); 
	wp_localize_script('content-js','graphics_obj',array('ajaxurl' => admin_url('admin-ajax.php'),
					'plugin_graphics_url' => PLUGIN_GRPHICS_URL,
					'image_server_base_path'=>IMAGE_SERVER_BASE_PATH)); 

?>

<body id="product-page">
	
	<!-- ========== HERO ========== -->

	<div class="hero">
		<img class="hero__bg" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/Forte_Hero_Cover_2606_v2.jpg"
			sizes="(max-width: 600px) 400px, 800px"
			alt="alfa PXP FORTE cover & box"
			title="alfa PXP FORTE"
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
						<h1 class="hero__title">PXP FORTE</h1>
						<p class="hero__description">
							My condition is all day "Fortissimo".
							<br><br>
								Rice extract and spirulina with ENZACTA's technology make the perfect harmony for your daily life.
							<br>
							Powerful day with alpha PXP FORTE!
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
				Nutrient packed rice, <span class="icons__title--bold">enriched</span> with spirulina, rich in alpha glycopeptides, amino acids & antioxidants
			</h4>
			<div class="icons__separator"></div>
		</div>
	
		<div class="icons__grid containerflexwrap">
			<div class="block03">
				<img alt="Special rice extract icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/AwardedRice-Icon.jpg">
				<h2 class="icons__subtitle">SPECIAL RICE EXTRACT</h2>
				<p class="icons__text">In Thailand, the world's largest rice exporter, carefully selected rice has been added to ENZACTA's technology.</p>
			</div>
			<div class="block03">
				<img alt="Harvest at the right time icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/Harvested-Icon.jpg">
				<h2 class="icons__subtitle">HARVEST AT THE RIGHT TIME</h2>
				<p class="icons__text">ENZACTA's rice extract is harvested at the optimum time using sophisticated proprietary techniques.</p>
			</div>
			<div class="block03">
				<img alt="Vegan certified icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/Vegan_Cert-Icon.jpg">
				<h2 class="icons__subtitle">VEGAN CERTIFIED COMPLETE</h2>
				<p class="icons__text">Complete 'vegan certification' for the environment and animals *Vegan certification NUMBER: F226-004</p>
			</div>
		</div>
	</div>

	<!-- ========== INFO ========== -->

	<div class="info containerflexwrap js-section--description">
		<div class="block03">
			<img alt="Main ingredients of alfa PXP FORTE" class="info__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/FORTE-ingredients.jpg">
			<p class="info__img-caption">
				RICE EXTRACT, SPIRULINA, CHICORY FIBER
			</p>
		</div>
		<div class="block06">
			<h2 class="info__subtitle">DESCRIPTION</h2>
			<div class="info__separator"></div>
			<p class="info__text">
				Few places in the world, like Thailand's Siam Valley, are so well recognized and awarded for their rice growing and cultivation methods, yielding superior grains of unparalleled quality.
				<br><br>
				The sophisticated proprietary technology used to harvest this potent rice guarantees the highest concentration of polysaccharides, polypeptides, and other essential nutrients in every batch.
				<br><br>
				ENZACTA's alfa PXP FORTE is a multi-purpose functional food, combining essential amino acids and antioxidants to promote a natural balance in the body. At the same time, it nourishes and charges your cells to fill you with wellness.
			</p>
			<h2 class="info__subtitle">BENEFITS:</h2>
			<ul class="info__list">
				<li>Rice extract made through ENZACTA's sophisticated technology</li>
				<li>Spirulina rated safe and ideal food by the World Health Organization (WHO)</li>
				<li>Rich in dietary fiber and chicory to help intestinal health</li>
				<li>Complete 'vegan' certification for environment and animals</li>
			</ul>
		</div>
	</div>

	<!-- ========== VIDEO ========== -->
	
	<div class="video">
		<div class="icons__header">
			<h4 class="icons__title">
				A <span class="icons__title--bold">unique</span> and functional blend of brown rice!
			</h4>
			<div class="icons__separator"></div>
		</div>
	
		<div class="video__container">
			<iframe class="video__container--iframe" src="https://www.youtube.com/embed/3xBYECxc_TY" title="alfa PXP FORTE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
	</div>

	<!-- ========== CAROUSEL ========== -->

	<div class="carousel js-section--carousel">
		<div id="carousel__track" class="carousel__track flexme">
			<div class="block12 carousel__slide carousel__slide--active">
				<h2 class="carousel__title">RECOMMENDED INTAKE AND METHOD OF INTAKE</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					It is recommended to mix 1 bag (5g) three times a day and once in 150 ml of warm water and take it on an empty stomach
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">CONVENIENT INDIVIDUAL PACKAGING</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					It is made in individual bags, so it is easy to carry and can be consumed hygienically
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">VEGAN CERTIFIED</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					Complete 'vegan certification' for the environment and animals<br>* Vegan certification number: F226-004
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">RICE EXTRACT</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					alfa PXP FORTE containing rice extract made through ENZACTA's sophisticated proprietary technology is only available at ENZACTA
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">SPIRULINA</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					1) The World Health Organization (WHO) evaluates it as a safe and ideal food product
					<br>
					2) Un food and Agriculture Organization designates food for the future of humanity
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">AVAILABLE FOR ALL AGES</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					It's convenient anytime, anywhere, regardless of gender!
				</p>
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
		<h2 class="faq__title">FREQUENTLY ASKED QUESTIONS:</h2>
		<div class="faq__separator"></div>
		<div class="faq__list">
			<div class="faq__item" data-accordion="c1">
				<div class="faq__btn faq__btn--c1">
					<p>What is the recommended daily dose of alfa PXP FORTE?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c1">
					<div class="faq__answer-inner">
						<p>For adults, the recommended dose is one teaspoon per day for a maximum of five days.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c2">
				<div class="faq__btn faq__btn--c2">
					<p>Can I give alfa PXP FORTE to my children?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c2">
					<div class="faq__answer-inner">
						<p>Yes, alfa PXP FORTE is for everyone. The recommended dose for children is one teaspoon per day for a maximum of three days.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c3">
				<div class="faq__btn faq__btn--c3">
					<p>Can I take alfa PXP FORTE if I'm on medication?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c3">
					<div class="faq__answer-inner">
						<p>We suggest first checking with your doctor before taking alfa PXP FORTE if you're on medication.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c4">
				<div class="faq__btn faq__btn--c4">
					<p>Are there any side effects to alfa PXP FORTE?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c4">
					<div class="faq__answer-inner">
						<p>We're not aware of any. If you develop any unwanted effects, stop using the product, and consult with your doctor.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c5">
				<div class="faq__btn faq__btn--c5">
					<p>If I don't like the product, Can I return it for a refund?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c5">
					<div class="faq__answer-inner">
						<p>Yes! And we're so sure you're going to enjoy it, we offer you a 30-day guarantee on your first purchase of any product.</p>
						<img alt="ENZACTA guarantee seal" class="faq__guarantee-img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/ENZACTA_Guarantee_Seal.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ========== FACTS ========== -->

	<div class="facts js-section--facts" style="background: url(<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/FORTE-NutFacts-back-F1.jpg)">
		<div class="facts__wrapper">
			<div class="facts__card">
				<img class="facts__img" alt="Product Information | alfa PXP FORTE" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/FORTE-SupplementFacts-EN-250611.png">
			</div>
			<!-- <div class="facts__card">
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Nutritional_EN_2605.png">
			</div> -->
		</div>
	</div>

	<!-- ========== FOOTER PRODUCT ========== -->

	<div class="product-footer">
		<img class="product-footer__img" alt="alfa PXP FORTE box" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/alfa_FORTE-product-KREN-250219.jpg">
		<p class="product-footer__text">alfa PXP FORTE is available in one size: 90 packets.</p>
		<div class="product-footer__disclaimer">
			<p class="product-footer__disclaimer-text">*These statements have not been evaluated by the Food and Drug Administration, this product is not intended to diagnose, treat, cure, or prevent any disease.</p>
		</div>
	</div>

</body>


<?php
?>