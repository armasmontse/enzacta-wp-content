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
						<p class="hero__category">웰빙</p>
						<div class="hero__separator"></div>
						<h2 class="hero__subtitle">알파 피엑스피</h2>
						<h1 class="hero__title">포르테</h1>
						<p class="hero__description">
							내 컨디션은 올데이 ‘포르티시모’
							<br><br>
							알파 피엑스피 포르테와 함께 하는 힘찬 하루!
							<br>
							엔잭타의 기술력이 함축된 쌀 추출물과 스피루리나가
							<br>
							여러분의 일상을 위한 완벽한 하모니를 만듭니다.
						</p>
						<div class="flexme">
							<div class="hero__cta hero__cta--description">
								상세정보
							</div>
							<div class="hero__cta hero__cta--facts">
								제품정보
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ========== ICONS ========== -->
	
	<div class="icons">
		<!-- <div class="icons__header">
			<h4 class="icons__title">
				Nutrient-packed rice, <span class="icons__title--bold">enriched</span> with spirulina, rich in alpha glycopeptides, amino acids & antioxidants.
			</h4>
			<div class="icons__separator"></div>
		</div> -->
	
		<div class="icons__grid containerflexwrap">
			<div class="block03">
				<img alt="Special rice extract icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/AwardedRice-Icon.jpg">
				<h2 class="icons__subtitle">특별한 쌀 추출물</h2>
				<p class="icons__text">세계 최대의 쌀 수출국인 태국에서 엄선한 쌀에 엔잭타의 기술을 더했습니다.</p>
			</div>
			<div class="block03">
				<img alt="Harvest at the right time icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/Harvested-Icon.jpg">
				<h2 class="icons__subtitle">최적의 시기에 수확</h2>
				<p class="icons__text">엔잭타의 쌀추출물은 정교한 독점기술을 사용하여 최적의 시기에 수확됩니다.</p>
			</div>
			<div class="block03">
				<img alt="Vegan certified icon" class="icons__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/Vegan_Cert-Icon.jpg">
				<h2 class="icons__subtitle">비건 인증</h2>
				<p class="icons__text">
					환경과 동물을 위한 ‘비건(vegan)인증‘ 완료
					<br>
					*비건인증번호 : F226-004
				</p>
			</div>
		</div>
	</div>

	<!-- ========== INFO ========== -->

	<div class="info containerflexwrap js-section--description">
		<div class="block03">
			<img alt="Main ingredients of alfa PXP FORTE" class="info__img" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/06/FORTE-ingredients.jpg">
			<p class="info__img-caption">
				쌀 추출물, 스피루리나, 치커리 식이섬유
			</p>
		</div>
		<div class="block06">
			<h2 class="info__subtitle">상세정보</h2>
			<div class="info__separator"></div>
			<p class="info__text">
				세계 최대의 쌀 생산지인 태국은 영양이 풍부한 토질과 청정한 환경으로 쌀 생산의 최적의 장소로 꼽히고 있습니다.
				<br><br>
				알파 피엑스피 포르테는 엔잭타의 독점 기술로 완성된 쌀추출물을 함유하고 있습니다.
				<br><br>
				풍부한 항산화 물질과 단백질을 함유하여 미래의 식량원으로 과학자들의 주목을 받아온 스피루리나가 엔잭타의 쌀추출물과 만나 여러분께 소중한 하루를 선물합니다.
			</p>
			<h2 class="info__subtitle">장점:</h2>
			<ul class="info__list">
				<li>엔잭타의 정교한 기술을 통해 만들어진 쌀 추출물​</li>
				<li>세계보건기구(WHO)에서 안전하고 이상적인 식품으로 평가 된 스피루리나</li>
				<li>식이섬유가 풍부하며 장 건강에 도움을 주는 치커리​​</li>
				<li>환경과 동물을 위한 ‘비건(vegan)’ 인증 완료</li>
			</ul>
		</div>
	</div>

	<!-- ========== VIDEO ========== -->
	
	<div class="video">
		<div class="icons__header">
			<h4 class="icons__title">
			엔잭타에서만 만날 수 있는 특별한 <span class="icons__title--bold">쌀추출물</span>!
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
				<h2 class="carousel__title">권장섭취량 및 섭취방법</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					1일 3회, 1회 1포(5g)를
					<br>
					따뜻한 물 150ml에 섞어서
					<br>
					공복에 드시면 좋습니다
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">편리한 개별 포장</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					낱개 포로 제작되어 휴대가 용이하고
					<br>
					위생적인 섭취가 가능합니다
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">비건 인증 완료</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					환경과 동물을 위한 ‘비건(vegan)인증‘ 완료
					<br>
					*비건인증번호 : F226-004
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">쌀 추출물</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					엔잭타의 정교한 독점기술을 통해 만들어진 쌀추출물을 함유한 알파 피엑스피 포르테는 엔잭타에서만 만나볼 수 있습니다
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">스피루리나</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					1) 세계 보건기구(WHO)에서 안전하고 이상적인 식품으로 평가
					<br>
					2) 식량농업기구에서 인류미래식량으로 지정
				</p>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">모든 연령 섭취 가능</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					남녀노소 할 것 없이
					<br>
					언제 어디서나 간편하게!
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
		<h2 class="faq__title">FAQ:</h2>
		<div class="faq__separator"></div>
		<div class="faq__list">
			<div class="faq__item" data-accordion="c1">
				<div class="faq__btn faq__btn--c1">
					<p>알파 PXP 포르테의 권장 섭취량은 어떻게 되나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c1">
					<div class="faq__answer-inner">
						<p>성인 기준으로 1일 3회, 1회 1포씩 따뜻한 물 150ml에 섞어서 드시는 것을 추천합니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c2">
				<div class="faq__btn faq__btn--c2">
					<p>알파 피엑스피 포르테를 아이들에게 줘도 되나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c2">
					<div class="faq__answer-inner">
						<p>네, 알파 피엑스피 포르테는 모두를 위한 제품입니다. 1일 1회, 1포를 따뜻한 물 150ml에 섞어서 섭취하는 것을 추천합니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c3">
				<div class="faq__btn faq__btn--c3">
					<p>알파 피엑스피 포르테를 약과 함께 섭취해도 되나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c3">
					<div class="faq__answer-inner">
						<p>복용중인 약이 있다면 알파 피엑스피 포르테를 섭취하기 전에 먼저 의사와 상담하는 것이 좋습니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c4">
				<div class="faq__btn faq__btn--c4">
					<p>알파 피엑스피 포르테에 부작용이 있나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c4">
					<div class="faq__answer-inner">
						<p>원치 않는 효과가 나타난다면 섭취를 중단하고 의사와 상의하시기 바랍니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c5">
				<div class="faq__btn faq__btn--c5">
					<p>제품이 마음에 들지 않으면 반품하여 환불 받을 수 있나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c5">
					<div class="faq__answer-inner">
						<p>네! 엔잭타는 여러분이 제품에 만족하실 거라 확신하지만 구매일 3개월 이내에 반품(청약철회)을 신청할 수 있습니다.</p>
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
				<img class="facts__img" alt="Product Information | alfa PXP FORTE" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2025/06/FORTE-SupplementFacts-KR-250611.png">
			</div>
			<!-- <div class="facts__card">
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Nutritional_EN_2605.png">
			</div> -->
		</div>
	</div>

	<!-- ========== FOOTER PRODUCT ========== -->

	<div class="product-footer">
		<img class="product-footer__img" alt="alfa PXP FORTE box" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2025/02/alfa_FORTE-product-KRKR-250219.jpg">
		<p class="product-footer__text">내용량 : 450g (5gX90포)</p>
		<div class="product-footer__disclaimer">
			<p class="product-footer__disclaimer-text">*본 제품은 질병의 진단이나 치료 또는 예방을 목적으로 하지 않습니다.​</p>
		</div>
	</div>

</body>


<?php
?>