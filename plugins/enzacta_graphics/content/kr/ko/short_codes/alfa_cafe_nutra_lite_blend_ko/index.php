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
						<p class="hero__category">건강기능식품</p>
						<div class="hero__separator"></div>
						<h2 class="hero__subtitle">알파카페뉴트라</h2>
						<h1 class="hero__title">라이트 블렌드</h1>
						<p class="hero__description">
							알파카페뉴트라 라이트 블렌드에는 콜롬비아 아라비카 원두에 건강기능식품 기능성 원료인 가르시니아 캄보지아 추출물이 들어 있어 하루 4잔으로 체지방 감소에 도움을 줄 수 있습니다.
						</p>
						<div class="flexme">
							<div class="hero__cta hero__cta--description">
								상세정보
							</div>
							<div class="hero__cta hero__cta--facts">
								영양·기능정보
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
				<span class="icons__title--bold">매일 더 가벼워지는 습관, 라이트 블렌드와 함께!</span>
			</h4>
			<div class="icons__separator"></div>
		</div>
	
		<div class="icons__grid containerflexwrap">
			<div class="block03">
				<img alt="Weight loss icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/Icon_Control_2605.jpg">
				<h2 class="icons__subtitle">체지방 감소</h2>
				<p class="icons__text">기능성 원료 HCA(가르시니아 캄보지아 추출물)가 함유되어 체지방 감소에 도움을 줄 수 있음</p>
			</div>
			<div class="block03">
				<img alt="Coffee bean icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/Icon_Coffee_2605.jpg">
				<h2 class="icons__subtitle">특별한 부원료</h2>
				<p class="icons__text">엔잭타의 기술이 더해진 쌀추출물과 아프리카 망고 추출물, 콜롬비아 아라비카 원두 함유</p>
			</div>
			<div class="block03">
				<img alt="Wellness icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/Icon_Calories_2605.jpg">
				<h2 class="icons__subtitle">간편하게</h2>
				<p class="icons__text">간편하고 쉽게 즐길 수 있는 체중 감소를 위한 커피 향의 건강기능식품</p>
			</div>
		</div>
	</div>

	<!-- ========== INFO ========== -->

	<div class="info containerflexwrap js-section--description">
		<div class="block03">
			<img alt="Main ingredients of Café LITE Blend" class="info__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Ingredients_2605.jpg">
			<p class="info__img-caption">
				콜롬비아산 아라비카 원두, 가르시니아 캄보지아 추출물, 아프리칸 망고추출물, 쌀추출물
			</p>
		</div>
		<div class="block06">
			<h2 class="info__subtitle">상세정보</h2>
			<div class="info__separator"></div>
			<p class="info__text">
				알파카페뉴트라 라이트 블렌드는 탄수화물이 지방으로 합성되는 것을 억제해주는 HCA(가르시니아 캄보지아 추출물)를 함유하여 체지방 감소에 도움을 줄 수 있고 아프리카 망고 추출물과 엔잭타의 쌀추출물까지 들어 있어 특별함을 더한 차별화된 커피입니다.
				<br><br>
				개별포장의 커피 형태로 언제 어디서든 즐길 수 있는 알파카페뉴트라 라이트블렌드는 체지방 감소도, 커피도 포기하고 싶지 않은 여러분에게 마시며 즐기는 매일 더 가벼워지는 습관을 선물합니다.
			</p>
			<h2 class="info__subtitle">새로운 커피를 만나고 싶은 여러분에게 최고의 만족을 선사합니다.</h2>
			<ul class="info__list">
				<li>커피와 건강기능식품의 만남​​​</li>
				<li>HCA(가르시니아 캄보지아 추출물) 함유하여 체지방 감소에 도움</li>
				<li>콜롬비아 아라비카 커피 고유의 부드러운 맛과 풍부한 향​</li>
			</ul>
		</div>
	</div>

	<!-- ========== CAROUSEL ========== -->

	<div class="carousel js-section--carousel">
		<div id="carousel__track" class="carousel__track flexme">
			<div class="block12 carousel__slide carousel__slide--active">
				<h2 class="carousel__title">섭취량 및 섭취방법</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					하루 4회, 1회 1포를
					<br>
					따뜻한 물 200ml를 부어
					<br>
					완전히 녹인 후 섭취하세요.
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">가르시니아캄보지아추출물</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					탄수화물이 지방으로 합성되는 것을
					<br>
					억제하여 체지방 감소에 도움을 줄 수 있음.
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">쌀 추출물</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					엔잭타의 정교한 독점기술을 통해 만들어진 쌀추출물을 함유한 제품은 오직 엔잭타에서만 만나볼 수 있습니다.
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">엄선한 부원료</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					엔잭타의 기술력이 담겨있는 쌀추출물, 아프리카망고추출물, 콜롬비아 아라비카 원두 함유.
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
		<h2 class="faq__title">FAQ</h2>
		<div class="faq__separator"></div>
		<div class="faq__list">
			<div class="faq__item" data-accordion="c1">
				<div class="faq__btn faq__btn--c1">
					<p>건강기능식품으로 인정된 알파카페뉴트라 라이트블렌드는 하루에 몇 포를 먹어야 체지방 감소에 도움을 줄 수 있나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c1">
					<div class="faq__answer-inner">
						<p>하루에 4포를 드시면 체지방 감소에 도움을 줄 수 있습니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c2">
				<div class="faq__btn faq__btn--c2">
					<p>알파 카페 뉴트라 라이프 블렌드 섭취 시 주의사항이 있나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c2">
					<div class="faq__answer-inner">
						<p>가르시니아 캄보지아 추출물이 함유(1포당 190mg포함)되어 있으므로 간·신장·심장질환, 알레르기 및 천식이 있거나 의약품 복용 시 전문가와 상담하시는 게 좋습니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c3">
				<div class="faq__btn faq__btn--c3">
					<p>제품이 마음에 들지 않으면 반품하여 환불 받을 수 있나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c3">
					<div class="faq__answer-inner">
						<p>네! 엔잭타는 여러분이 제품에 만족하실 거라 확신하지만 구매일로부터 3개월 이내에 미개봉 제품을 반품(청약철회)을 신청할 수 있습니다.</p>
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
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Product_Info_KO_260507.png">
			</div>
			<div class="facts__card">
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Nutritional_KO_2605.png">
			</div>
		</div>
	</div>

	<!-- ========== FOOTER PRODUCT ========== -->

	<div class="product-footer">
		<img class="product-footer__img" alt="alfa CAFÉ NUTRA Lite box" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Box_2605.jpg">
		<p class="product-footer__text">내용량 : 84g(2.8g x 30포)</p>
		<div class="product-footer__disclaimer">
			<p class="product-footer__disclaimer-text">* 본 제품은 질병의 진단이나 치료 또는 예방을 목적으로 하지 않습니다.​</p>
		</div>
	</div>

</body>


<?php
?>