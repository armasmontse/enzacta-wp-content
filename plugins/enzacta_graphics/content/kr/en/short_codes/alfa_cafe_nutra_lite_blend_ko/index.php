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
		<img class="hero__bg" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Hero_Cover_2605.jpg"
			sizes="(max-width: 600px) 400px, 800px"
			alt="alfa CAFÉ NUTRA lite blend cover & box" 
			title="alfa CAFÉ NUTRA lite blend"
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
						<p class="hero__category">Coffee</p>
						<div class="hero__separator"></div>
						<h2 class="hero__subtitle">alfa CAFÉ NUTRA</h2>
						<h1 class="hero__title">Lite Blend</h1>
						<p class="hero__description">
							alfa CAFÉ NUTRA Lite Blend contains not only Colombian Arabica coffee beans but also Garcinia Cambogia extract, a functional ingredient in health functional foods, so drinking 4 cups a day may help reduce body fat.
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
				Make you and your <span class="icons__title--bold">daily coffee ritual</span> healthier ​and lighter.
			</h4>
			<div class="icons__separator"></div>
		</div>
	
		<div class="icons__grid containerflexwrap">
			<div class="block03">
				<img alt="Weight loss icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/Icon_Control_2605.jpg">
				<h2 class="icons__subtitle">MAY DECREASE BODY FAT</h2>
				<p class="icons__text">It contains the functional ingredient HCA (Garcinia cambogia extract) which may help reduce body fat.</p>
			</div>
			<div class="block03">
				<img alt="Coffee bean icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/Icon_Coffee_2605.jpg">
				<h2 class="icons__subtitle">A SPECIAL SUBSIDIARY MATERIAL</h2>
				<p class="icons__text">Contains rice extract, African mango extract, and Colombian Arabica beans with ENZACTA's technology.</p>
			</div>
			<div class="block03">
				<img alt="Wellness icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/Icon_Calories_2605.jpg">
				<h2 class="icons__subtitle">HEALTH FUNCTIONAL FOOD</h2>
				<p class="icons__text">Coffee-flavored health functional food for weight management that can be easily enjoyed.</p>
			</div>
		</div>
	</div>

	<!-- ========== INFO ========== -->

	<div class="info containerflexwrap js-section--description">
		<div class="block03">
			<img alt="Main ingredients of Café LITE Blend" class="info__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Ingredients_2605.jpg">
			<p class="info__img-caption">
				ROASTED COFFEE, RICE EXTRACT, GARCINIA, AND AFRICAN MANGO
			</p>
		</div>
		<div class="block06">
			<h2 class="info__subtitle">DESCRIPTION</h2>
			<div class="info__separator"></div>
			<p class="info__text">
				alfa CAFE NUTRA LITE BLEND contains HCA (Garcinia Cambogia extract), which may suppress carbohydrates from being synthesized into fat and help to reduce body fat. Also included in this specialty blend is African mango extract and ENZACTA's rice extract.
				<br><br>
				alfa CAFE NUTRA LITE BLEND, can be enjoyed anytime. The individual serving packets are convenient and can be taken anywhere you go – now you can manage your weight loss goals and not miss out on your favorite cup of coffee.
			</p>
			<h2 class="info__subtitle">BENEFITS:</h2>
			<ul class="info__list">
				<li>May help with weight management*​.​​</li>
				<li>Active ingredients may help suppress appetite*</li>
				<li>Great tasting dark roast instant coffee​.</li>
			</ul>
		</div>
	</div>

	<!-- ========== CAROUSEL ========== -->

	<div class="carousel js-section--carousel">
		<div id="carousel__track" class="carousel__track flexme">
			<div class="block12 carousel__slide carousel__slide--active">
				<h2 class="carousel__title">RECOMMENDED INTAKE AND INTAKE METHOD</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					Pour 200ml of warm water into one bag four times a day, and dissolve it completely before taking it.
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">GARCINIA CAMBOGIA EXTRACT</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					Can help reduce body fat by inhibiting carbohydrates from being synthesized into fat
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">RICE EXTRACT</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					Products containing rice extracts made through ENZACTA's sophisticated proprietary technology are available only at ENZACTA.
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">CAREFULLY SELECTED SUBSIDIARY MATERIALS</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					Contains rice extract, African mango extract, and Colombian Arabica beans containing ENZACTA's technology.
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
					<p>How many cups of alfa CAFÉ NUTRA Lite Blend can I drink?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c1">
					<div class="faq__answer-inner">
						<p>For weight management, 4 cups a day is recommended.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c2">
				<div class="faq__btn faq__btn--c2">
					<p>Are there any side effects of alfa CAFÉ NUTRA Lite Blend?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c2">
					<div class="faq__answer-inner">
						<p>We're not aware of any. If you develop any unwanted effects, stop using the product, and consult with your doctor.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c3">
				<div class="faq__btn faq__btn--c3">
					<p>If I don't like the product, Can I return it for a refund?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c3">
					<div class="faq__answer-inner">
						<p>Yes! And we're so sure you're going to enjoy it, we offer you a 30-day guarantee on your first purchase of any product.</p>
						<img alt="ENZACTA guarantee seal" class="faq__guarantee-img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/ENZACTA_Guarantee_Seal.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ========== FACTS ========== -->

	<div class="facts js-section--facts" style="background: url(<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2021/03/LITE-NutFacts-back-F1.jpg)">
		<div class="facts__wrapper">
			<div class="facts__card">
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Product_Info_EN_260507.png">
			</div>
			<div class="facts__card">
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Nutritional_EN_2605.png">
			</div>
		</div>
	</div>

	<!-- ========== FOOTER PRODUCT ========== -->

	<div class="product-footer">
		<img class="product-footer__img" alt="alfa CAFÉ NUTRA Lite box" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Box_2605.jpg">
		<p class="product-footer__text">alfa CAFÉ NUTRA Lite Blend comes in a box with 30 individual packets.</p>
		<div class="product-footer__disclaimer">
			<p class="product-footer__disclaimer-text">*These statements have not been evaluated by the Food and Drug Administration, this product is not intended to diagnose, treat, cure, or prevent any disease.</p>
		</div>
	</div>

</body>


<?php
?>