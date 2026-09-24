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
			alt="알파 제타 프로바이오틱스"
			title="알파 제타 프로바이오틱스"
			width="800"
			height="300"
			loading="lazy"
			fetchpriority="high"
			decoding="sync"
		>
		<div class="hero__flex">

			<div class="hero__nav-btn--mobile">
				<p class="hero__nav-btn hero__nav-btn--info">TESTIMONIES ></p>
				<p class="hero__nav-btn hero__nav-btn--faq">FAQ ></p>
			</div>

			<div class="block06 hero__col--left" style="min-height: 300px;">

			</div>
			<div class="block05 hero__col--right">
				<div class="hero__content">
					<div class="hero__nav">
						<p class="hero__nav-btn hero__nav-btn--desktop hero__nav-btn--info">TESTIMONIES ></p>
						<p class="hero__nav-btn hero__nav-btn--desktop hero__nav-btn--faq">FAQ ></p>
						<a class="hero__nav-btn hero__nav-btn--desktop hero__nav-btn--buy" href="">BUY NOW</a>
					</div>
					<div class="hero__text">
						<p class="hero__category">활력</p>
						<div class="hero__separator"></div>
						<h1 class="hero__title">
							<span class="hero__title-brand">알파</span> <span class="hero__title-product">제타 <br> 프로바이오틱스</span>
						</h1>
						<p class="hero__description">
							상큼한 복숭아 맛의 알파 제타 프로바이오틱스와 함께 매일의 장 건강을 챙기세요. 3중 바이오틱스 7.5.1 설계로 완성했습니다. 특허받은 제타바이오® 기술이 동결건조된 유산균을 생균과 유사한 생존율 및 장내 부착 능력을 갖도록 합니다. 물에 타서 섭취하는 워터믹스 제형으로 남녀노소 누구나 맛있게 즐기실 수 있습니다.
						</p>
						<div class="flexme">
							<div class="hero__cta hero__cta--description">
								DESCRIPTION
							</div>
							<div class="hero__cta hero__cta--facts">
								SUPPLEMENT FACTS
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
				성분이 아닌 <span class="icons__title-emphasis">설계로</span> 완성합니다.
			</h4>
			<div class="icons__separator"></div>
		</div>

		<div class="icons__grid containerflexwrap">
			<div class="block03">
				<img alt="프로바이오틱스" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_probiotics.png', __FILE__) ?>">
				<h2 class="icons__subtitle">프로바이오틱스</h2>
				<p class="icons__text">엄선된 7종 균주, 100억 CFU 함유</p>
			</div>
			<div class="block03">
				<img alt="프리바이오틱스" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_prebiotics.png', __FILE__) ?>">
				<h2 class="icons__subtitle">프리바이오틱스</h2>
				<p class="icons__text">장내 유익균의 성장을 돕는 5종 프리바이오틱스</p>
			</div>
			<div class="block03">
				<img alt="포스트바이오틱스" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_postbiotics.png', __FILE__) ?>">
				<h2 class="icons__subtitle">포스트바이오틱스</h2>
				<p class="icons__text">포뮬러를 완성하는 1종 포스트바이오틱스</p>
			</div>
			<div class="block03">
				<img alt="제타바이오 기술" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_technology.png', __FILE__) ?>">
				<h2 class="icons__subtitle">제타바이오 기술</h2>
				<p class="icons__text">동결건조된 유산균을 재활성화하는 특허기술</p>
			</div>
			<div class="block03">
				<img alt="복숭아 맛" class="icons__img" src="<?= plugins_url('assets/img/icons/icons_peach.png', __FILE__) ?>">
				<h2 class="icons__subtitle">복숭아 맛</h2>
				<p class="icons__text">물에 타서 즐기는 맛있는 유산균</p>
			</div>
		</div>
	</div>

	<!-- ========== INFO ========== -->

	<div class="info containerflexwrap js-section--description">
		<div class="block03">
			<img alt="제타 트리플바이오틱 인포그래픽" class="info__img" src="<?= plugins_url('assets/img/info/info_triple_infographic.png', __FILE__) ?>">
			<p class="info__img-caption">
				3중 바이오틱스 - 세 축을 하나로 담았습니다.
			</p>
		</div>
		<div class="block06">
			<h2 class="info__title">WHY alfa Zeta Probiotics</h2>
			<div class="info__separator"></div>
			<h3 class="info__subtitle">좋은 유산균은 무엇이 다를까요?</h3>
			<p class="info__text">
				많이 담는 것보다 중요한 것은 어떻게 설계했는가입니다.
			</p>

			<div class="info__button">
				<div class="info__button--pro">PRO</div>
				<span class="info__button--plus">+</span>
				<div class="info__button--con">PRE</div>
				<span class="info__button--plus">+</span>
				<div class="info__button--pro">POST</div>
			</div>

			<p class="info__text">
				균주 선별부터 제타바이오 기술까지, 정교한 설계로 완성한 <span class="info__text--bold">3중 바이오틱스</span>
			</p>

			<p class="info__text--number">7 + 5 + 1 = 장 건강을 설계하다</p>

			<p class="info__text">
				좋은 균주는 기본이고, 완성은 조합입니다. 프로, 프리, 포스트 - 세 축을 하나로 담았습니다.
			</p>

			<div class="info__cards--box">
				<div class="info__card--red">
					<h3 class="info__card--title">
						<span class="info__card--number">7</span>
						<span class="info__card--label">프로바이오틱스</span>
					</h3>
					<div class="info--separator"></div>
					<div class="info__card--content">
						Danisco사 7종 유산균<br><br>
						100억 CFU 함유
					</div>
				</div>

				<div class="info__card--green">
					<h3 class="info__card--title">
						<span class="info__card--number">5</span>
						<span class="info__card--label">프리바이오틱스</span>
					</h3>
					<div class="info--separator"></div>
					<div class="info__card--content">
						유익균을 위한 다양한 먹이 5종
					</div>
				</div>
				<div class="info__card--orange">
					<h3 class="info__card--title">
						<span class="info__card--number">1</span>
						<span class="info__card--label">포스트바이오틱스</span>
					</h3>
					<div class="info--separator"></div>
					<div class="info__card--content">
						유산균 사균체
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- ========== HEALTH ========== -->

	<div class="health">
		<div class="health__container">
			<div class="health__card health__card--overview">
				<div class="health__intro">
					<div class="health__header">
						<h2 class="health__title">
							<span class="health__title--bold">7종의 프로바이오틱스</span>
						</h2>
						<div class="health__separator"></div>
					</div>
					<p class="health__description">장내 환경을 고려하여 설계된 균주 배합입니다. 세계적인 유산균 기업인 IFF-다니스코사의 100년 이상의 연구와 기술적 전문성을 바탕으로, 엄선된 균주가 안정적이고 신뢰할 수 있는 원료로 공급됩니다.</p>
				</div>

				<div class="health__strain-layout">
					<div class="health__strain-diagram">
						<img
							class="health__digestive-composition"
							src="<?= plugins_url('assets/img/health/health_digestive_strains_ko.png', __FILE__) ?>"
							alt="Digestive system showing the seven probiotic strains"
						>
					</div>

					<div class="health__features">
						<h3 class="health__subtitle">7종 프로바이오틱스의 특징</h3>
						<ul class="health__feature-list">
							<li class="health__feature">
								<h4 class="health__feature-title">다양한 균주 구성</h4>
								<p class="health__feature-text">장내의 다양한 환경을 고려하여 여러 균주를 함께 구성했습니다.</p>
							</li>
							<li class="health__feature">
								<h4 class="health__feature-title">균주 특성 기반의 조합</h4>
								<p class="health__feature-text">서로 다른 균주의 특성을 함께 고려했습니다.</p>
							</li>
							<li class="health__feature">
								<h4 class="health__feature-title">장내 환경을 고려한 설계</h4>
								<p class="health__feature-text">균형 잡힌 조성을 위해 배합을 고려했습니다.</p>
							</li>
							<li class="health__feature">
								<h4 class="health__feature-title">GRAS(안전원료인증) 획득 균주</h4>
								<p class="health__feature-text">FDA GRAS 및 Self-Affirmed GRAS  안전성을 인정받은 원료입니다.</p>
							</li>
						</ul>
					</div>
				</div>

				<div class="health__divider"></div>

				<div class="health__biotic-grid">
					<div class="health__biotic health__biotic--pre">
						<h3 class="health__subtitle">5종의 프리바이오틱스</h3>
						<p class="health__description">프로바이오틱스의 먹이 역할을 하여, 장내 유익균의 성장을 돕고 원활한 배변 활동을 지원합니다.</p>
						<h4 class="health__detail-title">프리바이오틱스 종류</h4>
						<ul class="health__prebiotic-list">
							<li>프락토올리고당 (주원료)</li>
							<li>갈락토올리고당 (부원료)</li>
							<li>이눌린 (부원료)</li>
							<li>난소화성말토덱스트린 (부원료)</li>
							<li>자일로올리고당 (부원료)</li>
						</ul>
					</div>

					<div class="health__biotic health__biotic--post">
						<h3 class="health__subtitle">1종의 포스트바이오틱스</h3>
						<p class="health__description">설계를 완성하는 마지막 퍼즐</p>
						<h4 class="health__detail-title">포스트바이오틱스란 무엇인가?</h4>
						<p class="health__detail-text">포스트바이오틱스는 살아있는 유익균이 아닌, 유익균의 사균체와 대사물질을 말합니다. 최근 장내 환경 연구 분야에서 포스트바이오틱스도 프로.프리바이오틱스와 함께 다뤄지며 주목을 받고 있습니다. 알파 제타 프로바이오틱스는 유산균 사균체를 더해, 프로. 프리. 포스트 3중 구성을 완성했습니다.</p>
						<div class="health__disclaimer">
							<p>* 부원료이며, 성분 유형에 대한 일반적인 설명입니다.</p>
							<p>* 개별 효능을 의미하지 않습니다.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="health__technology-grid">
				<div class="health__card health__card--freeze">
					<h3 class="health__subtitle">유산균, 입에 털어 넣기만 하면, 다 살아서 갈까요?</h3>
					<p class="health__description">동결건조 과정은 유산균의 생존율을 높이는데 효과적이지만, 건조과정에서 표면 손상이 발생할 수 있습니다.</p>
					<div class="health__comparison health__comparison--arrow">
						<div class="health__comparison-item">
							<img class="health__comparison-img" src="<?= plugins_url('assets/img/info/info_bacteria_green.png', __FILE__) ?>" alt="" aria-hidden="true">
							<p class="health__comparison-label">LIVE<br>PROBIOTICS</p>
						</div>
						<span class="health__direction" aria-hidden="true"></span>
						<div class="health__comparison-item">
							<img class="health__comparison-img" src="<?= plugins_url('assets/img/info/info_bacteria_blue.png', __FILE__) ?>" alt="" aria-hidden="true">
							<p class="health__comparison-label">FREEZE-DRIED<br>PROBIOTICS</p>
						</div>
					</div>
					<div class="health__detail">
						<h4 class="health__detail-title">동결건조 유산균은?</h4>
						<p class="health__detail-text">동결건조 분말화 기술은 유산균의 소비기한을 늘리고 유통을 편리하게 하기 위해 사용됩니다. 하지만 건조 과정에서 얼음 결정이 형성되어 유산균 세포막에 손상을 줄 수 있습니다.</p>
					</div>
				</div>

				<div class="health__card health__card--zetabio">
					<h3 class="health__subtitle">제타바이오® 기술 적용</h3>
					<p class="health__description">알파 제타 프로바이오틱스는 특허받은 제타바이오® 기술을 담았습니다.</p>
					<div class="health__comparison health__comparison--versus">
						<div class="health__comparison-item">
							<p class="health__comparison-label">물과 만난 동결건조 유산균</p>
							<img class="health__comparison-img" src="<?= plugins_url('assets/img/info/info_bacteria_cyan.png', __FILE__) ?>" alt="" aria-hidden="true">
							<p class="health__comparison-caption">동결건조 과정에서 세포막의 전기적 성질(전하)이 변화할 수 있습니다.</p>
						</div>
						<span class="health__vs" aria-hidden="true">VS</span>
						<div class="health__comparison-item">
							<p class="health__comparison-label">물과 만난 알파 제타 프로바이오틱스</p>
							<img class="health__comparison-img" src="<?= plugins_url('assets/img/info/info_bacteria_coral.png', __FILE__) ?>" alt="" aria-hidden="true">
							<p class="health__comparison-caption">제타바이오 기술로 동결건조된 유산균이 재활성화 되어 생균과 동일한 전하를 되찾습니다.</p>
						</div>
					</div>
					<div class="health__detail">
						<h4 class="health__detail-title">물 만난 유산균, 살아나는 유산균 엔진</h4>
						<p class="health__detail-text">물과 만나 제타바이오 기술로 재 활성화된 유산균은 살아있는 유산균과 유사한 수준의 생존력과 장내 부착능력을 갖는 것으로 확인됩니다.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

<!-- ========== INSTRUCTIONS ========== -->

	<div class="instructions">
		<div class="instructions__container">
			<div class="instructions__header">
				<img class="instructions__img" src="<?= plugins_url('assets/img/instructions/instructions_glass.png', __FILE__) ?>" alt="alfa ZETA PROBIOTICS peach drink preparation">
				<div class="instructions__block">

					<h4 class="instructions__title">
						챙기는게 아니라 즐기는 프로바이오틱스
					</h4>
					<div class="instructions__separator"></div>

					<div class="instructions__text">
						상큼한 복숭아 과즙으로 맛을 낸, <span class="instructions__bold">매일이 즐거운 한 잔</span>
					</div>
					<div class="instructions__box">

						<div class="instructions__item">
							<img class="instructions__item-img" src="<?= plugins_url('assets/img/instructions/instructions_shield_icon.png', __FILE__) ?>" alt="Selected probiotic strains">
							<p class="instructions__item-title">
								엄선한 유산균 균주
							</p>
							<p class="instructions__item-text">
							</p>
						</div>
						<div class="instructions__item">
							<img class="instructions__item-img" src="<?= plugins_url('assets/img/instructions/instructions_gut_icon.png', __FILE__) ?>" alt="Designed to reach the gut">
							<p class="instructions__item-title">
								장까지 튼튼하게
							</p>
							<p class="instructions__item-text">
							</p>
						</div>

					</div>

				</div>
			</div>

			<div class="instructions__divisor"></div>

			<div class="instructions__body">

				<div class="instructions__row instructions__row--intro">
					<img class="instructions__package" src="<?= plugins_url('assets/img/instructions/instructions_package.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 패키지">
					<div class="instructions__how">
						섭취 방법
					</div>
				</div>

				<div class="instructions__row instructions__row--steps">

					<div class="instructions__step">
						<img class="instructions__step-img instructions__step-img--primary" src="<?= plugins_url('assets/img/instructions/instructions_stick_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 1포">
						<p class="instructions__step-text">1회 1포 (5 g)</p>
					</div>
					<div class="instructions__step">
						<img class="instructions__step-img" src="<?= plugins_url('assets/img/instructions/instructions_water_icon.png', __FILE__) ?>" alt="물 100 ml">
						<p class="instructions__step-text">100 ml 물에 타서</p>
					</div>
					<div class="instructions__step">
						<img class="instructions__step-img" src="<?= plugins_url('assets/img/instructions/instructions_wait_icon.png', __FILE__) ?>" alt="1분간 기다리기">
						<p class="instructions__step-text">1분간 기다렸다가</p>
					</div>
					<div class="instructions__step">
						<img class="instructions__step-img" src="<?= plugins_url('assets/img/instructions/instructions_glass_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 섭취">
						<p class="instructions__step-text">섭취하세요</p>
					</div>

				</div>

				<div class="instructions__row instructions__row--extra">
					<h3 class="instructions__row-title">단 1분</h3>
					<p class="instructions__row-text">유산균이 깨어나는 시간입니다.</p>
				</div>

			</div>

			<div class="instructions__divisor"></div>

			<div class="instructions__footer">
				<div class="instructions__footer--flex">
					<div class="instructions__footer--box">
						<h3 class="instructions__footer--title">부원료</h3>
						<p class="instructions__footer--text">알파 제타 프로바이오티스는 비타민 D3, 아연, 그리고 9가지 유기농 과일 및 채소를 함유하고 있습니다.</p>
						<div class="instructions__separator"></div>
						<div class="instructions__footer--icons">
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_nutrient_circle_vitamin_d3.png', __FILE__) ?>" alt="비타민 D3">
								<p class="instructions__footer--icon-text">비타민 D3</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_nutrient_circle_zinc.png', __FILE__) ?>" alt="아연">
								<p class="instructions__footer--icon-text">아연</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_nutrient_circle_organic_fruits_vegetables.png', __FILE__) ?>" alt="9가지 유기농 과일 및 채소">
								<p class="instructions__footer--icon-text">9가지 유기농 과일 및 채소</p>
							</div>
						</div>
					</div>

					<div class="instructions__footer--box">
						<h3 class="instructions__footer--title">불필요한 첨가물을 줄였습니다.</h3>
						<p class="instructions__footer--text">우리 가족이 매일 섭취하는 제품이기에, 꼭 필요한 성분만 담아 안심하고 섭취할 수 있도록 만들었습니다.</p>
						<div class="instructions__separator"></div>
						<div class="instructions__footer--icons">
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_silicon_dioxide_badge.png', __FILE__) ?>" alt="이산화규소 무첨가">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">무첨가</span>
									<span class="instructions__footer--icon-label">이산화규소</span>
								</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_magnesium_stearate_badge.png', __FILE__) ?>" alt="스테아린산 마그네슘 무첨가">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">무첨가</span>
									<span class="instructions__footer--icon-label">스테아린산 마그네슘</span>
								</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_synthetic_preservatives_badge.png', __FILE__) ?>" alt="합성보존료 무첨가">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">무첨가</span>
									<span class="instructions__footer--icon-label">합성보존료</span>
								</p>
							</div>
							<div class="instructions__footer--icon">
								<img class="instructions__footer--icon-img" src="<?= plugins_url('assets/img/health/health_no_artificial_colors_badge.png', __FILE__) ?>" alt="합성착색료 무첨가">
								<p class="instructions__footer--icon-text">
									<span class="instructions__footer--icon-prefix">무첨가</span>
									<span class="instructions__footer--icon-label">합성착색료</span>
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
				<h2 class="carousel__title">alfa ZETA PROBIOTICS는 이런 분들께 추천합니다</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					장 건강을 관리하고 균형 잡힌 장 컨디션을 유지하고 싶은 분들을 위한 간편한 데일리 선택.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 웰니스 아이콘">
				<h4 class="carousel__subtitle">매일 챙기는 장 건강</h4>
				<h4 class="carousel__footer">전반적인 장 건강 관리가 필요하신 분</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">alfa ZETA PROBIOTICS는 이런 분들께 추천합니다</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					장 건강을 관리하고 균형 잡힌 장 컨디션을 유지하고 싶은 분들을 위한 간편한 데일리 선택.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 웰니스 아이콘">
				<h4 class="carousel__subtitle">원활한 배변 활동</h4>
				<h4 class="carousel__footer">편안하고 규칙적인 배변 활동을 유지하고 싶은 분.</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">alfa ZETA PROBIOTICS는 이런 분들께 추천합니다</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					장 건강을 관리하고 균형 잡힌 장 컨디션을 유지하고 싶은 분들을 위한 간편한 데일리 선택.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 웰니스 아이콘">
				<h4 class="carousel__subtitle">불규칙한 식습관</h4>
				<h4 class="carousel__footer">불규칙한 식습관으로 장 건강이 걱정되시는 분.</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">alfa ZETA PROBIOTICS는 이런 분들께 추천합니다</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					장 건강을 관리하고 균형 잡힌 장 컨디션을 유지하고 싶은 분들을 위한 간편한 데일리 선택.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 웰니스 아이콘">
				<h4 class="carousel__subtitle">스트레스와 피로</h4>
				<h4 class="carousel__footer">스트레스와 피로로 장 컨디션이 저하되신 분.</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">alfa ZETA PROBIOTICS는 이런 분들께 추천합니다</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					장 건강을 관리하고 균형 잡힌 장 컨디션을 유지하고 싶은 분들을 위한 간편한 데일리 선택.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 웰니스 아이콘">
				<h4 class="carousel__subtitle">잦은 속 불편함</h4>
				<h4 class="carousel__footer">잦은 속 불편함으로 고민이신 분</h4>
			</div>
			<div class="block12 carousel__slide">
				<h2 class="carousel__title">alfa ZETA PROBIOTICS는 이런 분들께 추천합니다</h2>
				<div class="carousel__separator"></div>
				<p class="carousel__text">
					장 건강을 관리하고 균형 잡힌 장 컨디션을 유지하고 싶은 분들을 위한 간편한 데일리 선택.
				</p>
				<img class="carousel__img" src="<?= plugins_url('assets/img/carousel/carousel_wellness_icon.png', __FILE__) ?>" alt="알파 제타 프로바이오틱스 웰니스 아이콘">
				<h4 class="carousel__subtitle">장내 유익균 밸런스</h4>
				<h4 class="carousel__footer">장내 유익균 밸런스 관리가 필요하신 분.</h4>
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
					<p>알파 프로바이오틱스의 권장 섭취량은 어떻게 되나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c1">
					<div class="faq__answer-inner">
						<p>1일 1회, 1회 1포를 섭취하세요.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c2">
				<div class="faq__btn faq__btn--c2">
					<p>알파 프로바이오틱스를 꼭 물과 함께 섭취해야 하나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c2">
					<div class="faq__answer-inner">
						<p>알파 프로바이오틱스만 섭취해도 좋습니다만, 물 100ml에 알파 프로바이오틱스를 타서 섭취 시 유산균 세포막 복원을 통해 장내 생존율 및 장 부착능을 향상시킬 수 있습니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c3">
				<div class="faq__btn faq__btn--c3">
					<p>제타바이오 기술이 무엇인가요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c3">
					<div class="faq__answer-inner">
						<p>동결건조된 유산균을 제타바이오 기술로 재 활성화(Re-hydration)시켜 살아있는 유산균과 동일한 전하(-charge)를 갖도록 하는 차세대 기술로 동결건조 유산균이 생균과 유사한 생존율 및 장 부착능력을 갖는 것으로 미생물시험결과 확인됩니다.</p>
					</div>
				</div>
			</div>
			<div class="faq__item" data-accordion="c4">
				<div class="faq__btn faq__btn--c4">
					<p>제품이 마음에 들지 않으면 반품하여 환불 받을 수 있나요?</p>
					<img class="faq__btn-icon" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/3/2025/01/plus_icon_02.svg">
				</div>
				<div class="faq__answer faq__answer--c4">
					<div class="faq__answer-inner">
						<p>네! 엔잭타는 여러분이 제품에 만족하실 거라 확신하지만 구매일 3개월 이내에 반품(청약철회)을 신청할 수 있습니다.</p>
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
				<img class="facts__img" alt="제품 정보 | 알파 제타 프로바이오틱스" src="<?= plugins_url('assets/img/facts/facts_zeta_probiotics.png', __FILE__) ?>">
			</div>
			<!-- <div class="facts__card">
				<img class="facts__img" alt="Product Information | NUTRA Lite" src="<?= IMAGE_SERVER_BASE_PATH ?>/sites/4/2026/05/LITE_Nutritional_EN_2605.png">
			</div> -->
		</div>
	</div>

	<!-- ========== FOOTER PRODUCT ========== -->

	<div class="product-footer">
		<img class="product-footer__img" alt="알파 제타 프로바이오틱스" src="<?= plugins_url('assets/img/footer/footer_zeta_probiotics_composition.png', __FILE__) ?>">
		<p class="product-footer__text">내용량 : 150g (5g x 30 포)</p>
		<div class="product-footer__disclaimer">
			<p class="product-footer__disclaimer-text">*본 제품은 질병의 진단이나 치료 또는 예방을 목적으로 하지 않습니다.​</p>
		</div>
	</div>

</body>


<?php
?>
