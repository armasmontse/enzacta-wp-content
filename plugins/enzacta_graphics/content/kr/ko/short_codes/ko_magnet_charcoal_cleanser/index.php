<?php
  /**
   * alfa K Magnet Charcoal CLEANSER
   * Version: English (EN)
   * MAG | 261001
   */

  wp_enqueue_style( 'content-styles', plugins_url('assets/css/styles.css', __FILE__));
  wp_enqueue_script('content-js',plugins_url('assets/js/script.js', __FILE__ ), array(), false, true); 
  wp_localize_script('content-js','graphics_obj',array('ajaxurl' => admin_url('admin-ajax.php'),
                     'plugin_graphics_url' => PLUGIN_GRPHICS_URL,
                     'image_server_base_path'=>IMAGE_SERVER_BASE_PATH)); 
?>

<section class="enzkr-cleanser" id="enzkr-cover">

  <div class="enzkr-hero">
    <div class="enzkr-hero__bg">
      <img src="<?= plugins_url('assets/img/hero/Cleanser_hero_bg_261001.jpg', __FILE__) ?>" alt="">
    </div>
    <div class="enzkr-hero__inner">
      <div class="enzkr-hero__kicker">
        <p class="enzkr-hero__eyebrow">SKINCARE</p>
        <span class="enzkr-hero__rule"></span>
        <p class="enzkr-hero__routine">ROUTINE 01</p>
      </div>

      <span class="enzkr-hero__badge">BIO ARCHITECTURE SYSTEM™</span>

      <div class="enzkr-hero__content">
        <div class="enzkr-hero__text">
          <img class="enzkr-hero__brand" src="<?= plugins_url('assets/img/hero/Cleanser_hero_logo_261001.png', __FILE__) ?>" alt="alfa K:Lumen">

          <!-- <p class="enzkr-hero__tag">MICRO FOAM DEEP CLEANSING</p> -->

          <p class="enzkr-hero__subtitle">Magnet Charcoal CLEANSER</p>

          <h1 class="enzkr-hero__title">마그넷 차콜 클렌저</h1>

          <p class="enzkr-hero__desc">대나무 차콜 비드와 보습 케어 성분을 함유한 순하면서도 효과적인 클렌저로, 노페물을 제거하고 모공을 깨끗하게 케어하여 산뜻하고 부드러운 피부로 편안하게 마무리해 줍니다.</p>

          <div class="enzkr-hero__actions">
            <a class="enzkr-btn enzkr-btn--primary" href="#enzkr-description">상세정보</a>
            <a class="enzkr-btn enzkr-btn--ghost" href="#enzkr-facts">제품정보</a>
          </div>
        </div>
      </div>

      <div class="enzkr-hero__figure">
        <img class="enzkr-hero__bottle" src="<?= plugins_url('assets/img/hero/Cleanser_hero_bottle_261001.png', __FILE__) ?>" alt="alfa K Magnet Charcoal CLEANSER">

      </div>
    </div>
  </div>

  <div class="enzkr-stats">
    <p class="enzkr-stats__intro">비워내지 못한 피부에,</p>
    <h2 class="enzkr-stats__title">영양은 사치일 뿐입니다</h2>
    <div class="enzkr-stats__grid">
      <div class="enzkr-stat" data-value="98.90" data-suffix="%" data-decimals="2">
        <span class="enzkr-stat__label">초미세먼지 세정</span>
        <span class="enzkr-stat__value">0%</span>
        <span class="enzkr-stat__description">세정</span>
      </div>
      <div class="enzkr-stat" data-value="0.00" data-suffix="" data-decimals="2">
        <span class="enzkr-stat__label">피부 자극 지수</span>
        <span class="enzkr-stat__value">0.00</span>
        <span class="enzkr-stat__description">(완전 비자극성)</span>
      </div>
      <div class="enzkr-stat" data-value="100" data-suffix="%" data-decimals="0">
        <span class="enzkr-stat__label">피험자 만족도</span>
        <span class="enzkr-stat__value">0%</span>
        <span class="enzkr-stat__description">(세정&보습)</span>
      </div>
    </div>
  </div>

  <div class="enzkr-problem">
    <div class="enzkr-problem__head">
      <p class="enzkr-problem__eyebrow">[  문제 · PROBLEM  ]</p>
      <p class="enzkr-problem__intro">손끝의 힘으로 지우는 마찰 세안,</p>
      <h2 class="enzkr-problem__title">피부는 소리 없이 무너집니다</h2>
      <span class="enzkr-problem__rule"></span>
    </div>

    <div class="enzkr-problem__card enzkr-problem__card--cleanser">



      <div class="enzkr-problem__grid">
        <div class="enzkr-problem__tile">
          <div class="enzkr-problem__photo">
            <img src="<?= plugins_url('assets/img/problem/Cleanser_problem_skin1_261001.png', __FILE__) ?>" alt="">
          </div>
          <span class="enzkr-problem__badge enzkr-problem__badge--1">
            <span class="enzkr-problem__cause">깨끗하지 않은 세안으로</span>
            <span class="enzkr-problem__damage">겉 피부 손상</span>
          </span>
        </div>
        <div class="enzkr-problem__tile">
          <div class="enzkr-problem__photo">
            <img src="<?= plugins_url('assets/img/problem/Cleanser_problem_skin2_261001.png', __FILE__) ?>" alt="">
          </div>
          <span class="enzkr-problem__badge enzkr-problem__badge--2">
            <span class="enzkr-problem__cause">강한 마찰로 인한</span>
            <span class="enzkr-problem__damage">피부 장벽 손상</span>
          </span>
        </div>
        <div class="enzkr-problem__tile">
          <div class="enzkr-problem__photo">
            <img src="<?= plugins_url('assets/img/problem/Cleanser_problem_skin3_261001.png', __FILE__) ?>" alt="">
          </div>
          <span class="enzkr-problem__badge enzkr-problem__badge--3">
            <span class="enzkr-problem__cause">과도한 세안으로 인한</span>
            <span class="enzkr-problem__damage">피부 속 건조</span>
          </span>
        </div>
      </div>

      <div class="enzkr-problem__note">
        <p class="enzkr-problem__note-text">개운한 세정을 원하는 '뽀득파'도, 당김 없는 편안함을 원하는 '촉촉파'도,</p>

        <p class="enzkr-problem__note-cta">결국 선택은 하나로 통합니다</p>
      </div>
    </div>
  </div>

  <div class="enzkr-point" id="enzkr-description">
    <div class="enzkr-point__inner">

      <div class="enzkr-point__head">
        <p class="enzkr-point__eyebrow">[  핵심 · POINT 01  ]</p>
        <p class="enzkr-point__intro">비우는 자석, 채우는 자석</p>
        <h2 class="enzkr-point__title">듀얼 자석 클렌징</h2>
        <span class="enzkr-point__rule"></span>
      </div>

      <div class="enzkr-point__grid">
        <div class="enzkr-point__mini enzkr-point__mini--cleansing enzkr-point__mini--step1">
          <p class="enzkr-point__mini-badge">STEP 1</p>
          <div class="enzkr-point__mini-body">
            <h3 class="enzkr-point__mini-title"><span class="enzkr-point__mini-action">비우는</span> <span class="enzkr-point__mini-focus">자석 클렌징</span></h3>
            <p class="enzkr-point__mini-text">모공 속 노폐물을 자석처럼 끌어당겨, 깨끗하게 비운다.</p>
            <div class="enzkr-point__mini-detail">
              <p class="enzkr-point__mini-cta">1000°C 대나무 숯</p>
              <p class="enzkr-point__disclaimer enzkr-point__disclaimer--mini">숯가루 안정화 비드 3,000ppm</p>
            </div>
          </div>
        </div>
        <div class="enzkr-point__mini enzkr-point__mini--cleansing enzkr-point__mini--step2">
          <p class="enzkr-point__mini-badge">STEP 2</p>
          <div class="enzkr-point__mini-body">
            <h3 class="enzkr-point__mini-title"><span class="enzkr-point__mini-action">채우는</span> <span class="enzkr-point__mini-focus">자석 클렌징</span></h3>
            <p class="enzkr-point__mini-text">비운 뒤에도 당김 없이, 수분을 자석처럼 끌어당긴다.</p>
            <div class="enzkr-point__mini-detail">
              <p class="enzkr-point__mini-cta">20.1% 인텐시브 모이스처 시스템</p>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>

  <div class="enzkr-refine">
    <div class="enzkr-refine__inner">
      <picture>
        <source media="(max-width: 640px)" srcset="<?= plugins_url('assets/img/point1/Cleanser_purify_bg_261001.jpg', __FILE__) ?>">
        <img class="enzkr-refine__bg" src="<?= plugins_url('assets/img/point1/Cleanser_purify_bg_261001.jpg', __FILE__) ?>" alt="PURIFY">
      </picture>
      <span class="enzkr-refine__word">PURIFY</span>
    </div>
  </div>

  <div class="enzkr-point2">
    <div class="enzkr-point2__inner">

      <div class="enzkr-point2__head">
        <p class="enzkr-point2__eyebrow">[  핵심  · POINT 02  ]</p>
        <p class="enzkr-point2__intro">피부가 먼저 알아차리는</p>
        <h2 class="enzkr-point2__title">6가지 특별한 성분 배합</h2>
        <span class="enzkr-point2__rule"></span>
      </div>

      <div class="enzkr-point2__grid">

        <div class="enzkr-point2__card enzkr-point2__card--01" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card1_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-diamond-light.png" alt="">
          <span class="enzkr-point2__num">01</span>
          <h3 class="enzkr-point2__name">1000°C 대나무 숯</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">3,000 ppm</p>
              <p class="enzkr-point2__stat-label">숯가루 안정화 비드</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">미세 기공 밀도를 극대화하여 모공 속 노폐물과 과잉 피지를 자석처럼 흡착해 말끔하게 비워줍니다.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--02" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card2_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-diamond-brown.png" alt="">
          <span class="enzkr-point2__num">02</span>
          <h3 class="enzkr-point2__name">수분 마그넷</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">Pentavitin</p>

            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">피부 당성분과 유사한 보습 메커니즘으로 피부에 수분을 끌어당겨 머물게 하는 수분 자석입니다.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--03" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card3_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/Star-white.png" alt="">
          <span class="enzkr-point2__num">03</span>
          <h3 class="enzkr-point2__name">부활초 추출물</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">촉촉한 생명력</p>
              <p class="enzkr-point2__stat-label">보습 케어</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">건조한 환경에서도 무너지지 않는 촉촉함으로 수분을 지키는 식물 유래 보습·진정 케어 성분입니다.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--04" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card4_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-star-dark.png" alt="">
          <span class="enzkr-point2__num">04</span>
          <h3 class="enzkr-point2__name">판테놀</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">편안한 피부</p>
              <p class="enzkr-point2__stat-label">피부 장벽 케어</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">세안 중 마찰로 예민해진 피부를 편안하게 케어하고 피부 장벽을 강화하여 촉촉한 피부막 유지에 도움을 줍니다.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--05" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card5_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-star-dark.png" alt="">
          <span class="enzkr-point2__num">05</span>
          <h3 class="enzkr-point2__name">세라마이드 NP<br>+ 베타-글루칸</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">듀얼</p>
              <p class="enzkr-point2__stat-label">피부 장벽 케어</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">보습과 장벽 케어 효능을 가진 두 성분의 시너지로 세안 후에도 건강한 피부 장벽 유지에 도움을 줍니다.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--06" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card6_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-star-dark.png" alt="">
          <span class="enzkr-point2__num">06</span>
          <h3 class="enzkr-point2__name">쌀 추출물</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">생기 가득</p>
              <p class="enzkr-point2__stat-label">광채 케어</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">맑고 균일한 피부 톤을 가꾸는 강력한 항산화 성분으로 투명하고 생기 있는 피부 바탕 완성에 도움을 줍니다.</p>
        </div>

      </div>

      <p class="enzkr-point2__disclaimer">*원료적 특성에 한함</p>

    </div>
  </div>

  <div class="enzkr-point3">
    <div class="enzkr-point3__frame">
      <div class="enzkr-point3__photo">
        <img src="<?= plugins_url('assets/img/point3/Cleanser_point3_bg_261001_v3.jpg', __FILE__) ?>" alt="alfa K Magnet Charcoal CLEANSER">
        <div class="enzkr-point3__head">
          <p class="enzkr-point3__eyebrow">[  핵심  · POINT 03  ]</p>
          <p class="enzkr-point3__intro">피부 겉부터 모공 속까지</p>
          <h2 class="enzkr-point3__title">당김 없이 촉촉한 딥 클렌징</h2>
          <span class="enzkr-point3__rule"></span>
        </div>
      </div>
      <div class="enzkr-point3__photo-fade"></div>
    </div>

    <div class="enzkr-point3__inner">
      <div class="enzkr-point3__card">
        <p class="enzkr-point3__trial-intro">1회 사용만으로 증명한</p>
        <h3 class="enzkr-point3__trial-title">초미세먼지 세정 효과</h3>
        <span class="enzkr-point3__rule enzkr-point3__rule--card"></span>
        <div class="enzkr-point3__stat" data-value="98.90" data-decimals="2" data-suffix="%">
          <p class="enzkr-point3__stat-value">0%</p>
          <p class="enzkr-point3__stat-label">초미세먼지 세정력</p>
        </div>
        <p class="enzkr-point3__trial-label">(모사체 시험)</p>
        <p class="enzkr-point3__test-label">인체적용시험 완료</p>
        <div class="enzkr-point3__scale-row enzkr-point3__scale-row--after">
          <span class="enzkr-point3__scale-min">0%</span>
          <div class="enzkr-point3__scale-track">
            <span class="enzkr-point3__scale-fill enzkr-point3__scale-fill--after" data-width="98.90"></span>
            <span class="enzkr-point3__scale-tick" style="left:98.90%">
              <span class="enzkr-point3__scale-tick-value">98.90%</span>
              <span class="enzkr-point3__scale-tick-arrow"></span>
            </span>
          </div>
          <span class="enzkr-point3__scale-max">100%</span>
        </div>
        <p class="enzkr-point3__scale-caption">1회 사용 직후</p>
        <p class="enzkr-point3__footnote">[인체적용시험_초미세먼지(모사체) 세정력]<br>(주)한국바이오임상연구센터 / 2026.04.27 ~ 2026.04.29 / 성인 남녀 22명 / 개인차 있음</p>
      </div>
    </div>
  </div>

  <div class="enzkr-problem2">
    <div class="enzkr-problem2__head">
      <p class="enzkr-problem2__eyebrow">[  문제 · PROBLEM  ]</p>
      <p class="enzkr-problem2__intro">초미세먼지란</p>
      <h2 class="enzkr-problem2__title">무엇일까요?</h2>
      <span class="enzkr-problem2__rule" aria-hidden="true"></span>
    </div>
    <div class="enzkr-problem2__panel">
      <h3 class="enzkr-problem2__subtitle"><span class="enzkr-problem2__invisible">육안으로 보이지 않게</span> <span class="enzkr-problem2__pores">모공 깊숙이</span></h3>
      <span class="enzkr-problem2__rule enzkr-problem2__rule--panel" aria-hidden="true"></span>
      <p class="enzkr-problem2__lead">머리카락 굵기의 약 1/30에 불과한 초미세먼지는 육안으로 보이지 않을 만큼 작아 모공 깊숙이 침투하기 쉽습니다.</p>
      <div class="enzkr-problem2__body">
        <p class="enzkr-problem2__text">이러한 입자가 피부에 잔류하면 지속적인 자극과 산화 스트레스를 유발해 피부 본연의 방어 체계를 약화시키고, 피부 장벽 손상과 다양한 피부 고민으로 이어질 수 있습니다. 따라서 피부에 머무르는 초미세먼지를 매일 깨끗하게 비워내는 세심한 클렌징이 중요합니다.</p>
        <p class="enzkr-problem2__closing">올바른 클렌징 루틴을 통해 피부 스트레스를 완화하고 건강한 상태를 유지하는 것이 피부 관리의 핵심입니다.</p>
      </div>
    </div>
  </div>

  <div class="enzkr-point4">
    <div class="enzkr-point4__bg">
      <div class="enzkr-point4__bg-fade"></div>
      <div class="enzkr-point4__frame">
        <div class="enzkr-point4__head">
          <p class="enzkr-point4__eyebrow">[  핵심  · POINT 04  ]</p>
          <p class="enzkr-point4__intro">비우고, 채우고, 지키는</p>
          <h2 class="enzkr-point4__title">마그넷 차콜 클렌징 솔루션</h2>
          <span class="enzkr-point4__rule"></span>
        </div>

        <div class="enzkr-point4__callout enzkr-point4__callout--small">
          <div class="enzkr-point4__callout-text">
            <p class="enzkr-point4__callout-title">무너지지 않는 고밀도 버블</p>
            <p class="enzkr-point4__callout-sub">저자극 클렌징 케어</p>
          </div>
          <span class="enzkr-point4__callout-line"></span>
        </div>
        <div class="enzkr-point4__callout enzkr-point4__callout--large">
          <span class="enzkr-point4__callout-line"></span>
          <div class="enzkr-point4__callout-text">
            <p class="enzkr-point4__callout-title">터지며 흡착하는 숯 비드</p>
            <p class="enzkr-point4__callout-sub">모공 속 초미세먼지 세정</p>
          </div>
        </div>
      </div>
    </div>

    <div class="enzkr-point4__card">
      <div class="enzkr-point4__card-inner">
        <div class="enzkr-point4__photo">
          <img src="<?= plugins_url('assets/img/point4/Cleanser_point4_card_261001.png', __FILE__) ?>" alt="alfa K Magnet Charcoal CLEANSER">
        </div>
        <div class="enzkr-point4__content">
          <span class="enzkr-point4__content-rule"></span>
          <p class="enzkr-point4__content-text">손끝에서 터지는 블랙 숯 비드와 물이 닿아 쫀쫀해진 미세 버블로</p>
          <p class="enzkr-point4__content-highlight">보이지 않는 곳까지 딥 클렌징 케어</p>
        </div>
      </div>
    </div>
  </div>

  <div class="enzkr-point5">
    <div class="enzkr-point5__bg">
      <picture>
        <source media="(max-width: 768px)" srcset="<?= plugins_url('assets/img/point5/Cleanser_point5_bg_mobile_261001.jpg', __FILE__) ?>">
        <img class="enzkr-point5__bg-image" src="<?= plugins_url('assets/img/point5/Cleanser_point5_bg_top_261001.jpg', __FILE__) ?>" alt="">
      </picture>
      <div class="enzkr-point5__head">
        <p class="enzkr-point5__eyebrow">[  핵심  · POINT 05  ]</p>
        <p class="enzkr-point5__intro">민감 피부를 위한</p>
        <h2 class="enzkr-point5__title">안심 클렌징</h2>
        <span class="enzkr-point5__rule"></span>
      </div>
    </div>

    <div class="enzkr-point5__card">
      <div class="enzkr-point5__card-inner">

        <div class="enzkr-point5__top">
          <div class="enzkr-point5__thumb">
            <img src="<?= plugins_url('assets/img/point5/Cleanser_point5_card_261001.jpg', __FILE__) ?>" width="1341" height="1005" alt="alfa K:Lumen Magnet Charcoal Cleanser">
          </div>
          <div class="enzkr-point5__intro-block">
            <span class="enzkr-point5__rule--small"></span>
            <p class="enzkr-point5__eyebrow--card">민감 피부를 위한 순한 케어</p>
            <h3 class="enzkr-point5__subtitle">부드럽게 닿는 저자극 버블 클렌징</h3>
            <p class="enzkr-point5__text">천연 계면활성제를 함유하여 더욱 순하고 풍성한 거품으로 마일드한 클렌징을 선사합니다.</p>
          </div>
        </div>

        <div class="enzkr-point5__tested">
          <h3 class="enzkr-point5__tested-title">자극 걱정 ZERO!</h3>
          <p class="enzkr-point5__tested-sub">일차자극 테스트 완료</p>
        </div>

        <div class="enzkr-point5__proof">
          <div class="enzkr-point5__proof-cert">
            <img src="<?= plugins_url('assets/img/point5/Cleanser_point5_certificate_261001_v2.jpg', __FILE__) ?>" width="419" height="629" alt="Korea Bio Clinical Research Center test result certificate for Magnet Charcoal Cleanser">
          </div>
          <div class="enzkr-point5__proof-details">
            <div class="enzkr-point5__proof-table">
              <img src="<?= plugins_url('assets/img/point5/Cleanser_point5_table_261001_ko.png', __FILE__) ?>" width="870" height="217" alt="Magnet Charcoal Cleanser primary skin irritation test result">
            </div>
            <div class="enzkr-point5__result">
              <p class="enzkr-point5__score">피부반응도 0.00, 완전 비자극 판정!</p>
              <p class="enzkr-point5__confidence">안심하고 사용할 수 있습니다</p>
            </div>
          </div>
        </div>

        <p class="enzkr-point5__footnote">[한국바이오임상연구센터에서 발급한 공식 시험 결과 확인서로, 일차 피부 자극 테스트에서 피부반응도 0.00 및 ‘완전 비자극’ 판정을 확인하였습니다.]</p>

      </div>
    </div>
    <div class="enzkr-point5__bg-bottom">
      <img src="<?= plugins_url('assets/img/point5/Cleanser_point5_bg_bottom_261001.jpg', __FILE__) ?>" alt="">
    </div>
  </div>

  <div class="enzkr-point6">
    <div class="enzkr-point6__head">
      <p class="enzkr-point6__eyebrow">사용 방법</p>
      <h2 class="enzkr-point6__title">HOW TO USE</h2>
      <span class="enzkr-point6__rule"></span>
    </div>

    <div class="enzkr-point6__steps">
      <div class="enzkr-point6__step">
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step1_261001.jpg', __FILE__) ?>" alt="손바닥에 적당량을 덜어냅니다."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">01</p>
        <span class="enzkr-point6__step-rule"></span>

        <p class="enzkr-point6__step-text">손바닥에 적당량을 덜어냅니다.</p>
      </div>
      <div class="enzkr-point6__step">
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step2_261001.jpg', __FILE__) ?>" alt="물을 조금 더해 쫀쫀하고 풍성한 거품을 충분히 만들어줍니다."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">02</p>
        <span class="enzkr-point6__step-rule"></span>

        <p class="enzkr-point6__step-text">물을 조금 더해 쫀쫀하고 풍성한 거품을 충분히 만들어줍니다.</p>
      </div>
      <div class="enzkr-point6__step">
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step3_261001.jpg', __FILE__) ?>" alt="얼굴 전체에 거품을 올리고 30초간 부드럽게 원을 그리듯 마사지합니다."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">03</p>
        <span class="enzkr-point6__step-rule"></span>

        <p class="enzkr-point6__step-text">얼굴 전체에 거품을 올리고 30초간 부드럽게 원을 그리듯 마사지합니다.</p>
      </div>
      <div class="enzkr-point6__step">
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step4_261001.jpg', __FILE__) ?>" alt="미온수로 잔여감 없이 깨끗하게 헹궈냅니다."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">04</p>
        <span class="enzkr-point6__step-rule"></span>
        <p class="enzkr-point6__step-text">미온수로 잔여감 없이 깨끗하게 헹궈냅니다.</p>
      </div>
    </div>

    <div class="enzkr-point6__bottle">
      <img src="<?= plugins_url('assets/img/how/Cleanser_how_hero_bg_261001.jpg', __FILE__) ?>" alt="alfa K Magnet Charcoal CLEANSER">
    </div>
  </div>

  <div class="enzkr-specs" id="enzkr-facts">
    <div class="enzkr-specs__head">
      <p class="enzkr-specs__eyebrow">[  상품정보제공고시  · PRODUCT DETAILS  ]</p>
      <h2 class="enzkr-specs__title">상품정보</h2>
      <p class="enzkr-specs__sub">제품 정보, 전성분, 사용 시 주의사항 및 품질보증 정보를 안내합니다.</p>
      <span class="enzkr-specs__rule"></span>
    </div>

    <div class="enzkr-specs__card">
      <div class="enzkr-specs__grid">
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">제품명</p>
          <p class="enzkr-specs__value">알파 케이 루멘 마그넷 차콜 클렌저 <br>(alfa K:Lumen Magnet Charcoal Cleanser)</p>
        </div>
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">용량</p>
          <p class="enzkr-specs__value">120 ml / 4.06 fl. oz.</p>
        </div>

        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">피부타입</p>
          <p class="enzkr-specs__value">모든 피부 타입 사용 가능</p>
          <p class="enzkr-specs__sub">(인체피부 일차자극테스트 비자극성 인증)</p>
        </div>
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">제조번호/사용기한</p>
          <p class="enzkr-specs__value">제조일로부터 36개월</p>
          <p class="enzkr-specs__sub">개봉 후 12개월 이내</p>
        </div>




        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">제조국</p>
          <p class="enzkr-specs__value enzkr-specs__value--flag">대한민국 <span class="enzkr-specs__flag"><svg viewBox="0 0 900 600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="대한민국">
            <rect width="900" height="600" fill="#ffffff"/>
            <g>
              <path d="M450,192 a54,54 0 0 1 0,108 a54,54 0 0 0 0,108 a108,108 0 0 0 0,-216 z" fill="#0047a0"/>
              <path d="M450,192 a108,108 0 0 0 0,216 a54,54 0 0 1 0,-108 a54,54 0 0 0 0,-108 z" fill="#cd2e3a"/>
            </g>
            <g fill="#000000">
              <rect x="115" y="120" width="130" height="17"/>
              <rect x="115" y="156" width="130" height="17"/>
              <rect x="115" y="192" width="130" height="17"/>
              <rect x="655" y="391" width="55" height="17"/>
              <rect x="730" y="391" width="55" height="17"/>
              <rect x="655" y="427" width="55" height="17"/>
              <rect x="730" y="427" width="55" height="17"/>
              <rect x="655" y="463" width="55" height="17"/>
              <rect x="730" y="463" width="55" height="17"/>
              <rect x="655" y="120" width="55" height="17"/>
              <rect x="730" y="120" width="55" height="17"/>
              <rect x="655" y="156" width="130" height="17"/>
              <rect x="655" y="192" width="55" height="17"/>
              <rect x="730" y="192" width="55" height="17"/>
              <rect x="115" y="391" width="130" height="17"/>
              <rect x="115" y="427" width="55" height="17"/>
              <rect x="190" y="427" width="55" height="17"/>
              <rect x="115" y="463" width="130" height="17"/>
            </g>
          </svg></span></p>
        </div>
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">화장품제조업자</p>
          <p class="enzkr-specs__value">한국콜마(주)</p>
        </div>

        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">화장품책임판매업자</p>
          <p class="enzkr-specs__value">(주)엔잭타</p>
        </div>
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">소비자 상담실</p>
          <p class="enzkr-specs__value">엔잭타 고객센터 02.565.4011</p>
        </div>
      </div>

      <div class="enzkr-specs__section">
        <h3 class="enzkr-specs__section-title">전성분</h3>
        <div class="enzkr-specs__ingredients">
          <button type="button" class="enzkr-specs__ingredients-toggle" aria-expanded="true" aria-controls="enzkr-specs-ingredients-text">
            <span>전성분 보기</span>
            <span class="enzkr-specs__ingredients-icon" aria-hidden="true"></span>
          </button>
          <p class="enzkr-specs__ingredients-text" id="enzkr-specs-ingredients-text">정제수, 미리스틱애씨드, 글리세린, 메틸프로판다이올, 포타슘하이드록사이드, 라우릭애씨드, 팔미틱애씨드, 스테아릭애씨드, 글리세릴스테아레이트, 판테놀, 아크릴레이트코폴리머, 소듐코코일알라니네이트, 포타슘코코일글리시네이트, 솔비탄올리베이트, 숯가루, 에틸헥실글리세린, 라우릴베타인, 솔비탄세스퀴올리에이트, 피토스테릴/옥틸도데실라우로일글루타메이트, 폴리쿼터늄-7, 소듐클로라이드, 부틸렌글라이콜, 글라이콜다이스테아레이트, 소듐파이테이트, 글라이콜스테아레이트, 1,2-헥산다이올, 옥수수배아오일, 아가, 하이드로제네이티드레시틴, 소듐벤조에이트, 병풀추출물, 무화과추출물, 모란뿌리추출물, 아이리쉬모스추출물, 카프릴릭/카프릭트라이글리세라이드, 쌀추출물, 트루로즈오브예리코추출물, 베타-글루칸, 세라마이드엔피, 사카라이드아이소머레이트, 토코페롤, 펜타에리스리틸테트라-다이-t-부틸하이드록시하이드로신나메이트, 소듐시트레이트, 시트릭애씨드, 팔미토일헥사펩타이드-12.</p>
        </div>
      </div>

      <div class="enzkr-specs__section">
        <h3 class="enzkr-specs__section-title enzkr-specs__section-title--reg">사용할 때의 주의사항</h3>
        <ol class="enzkr-specs__precautions">
          <li>화장품 사용 시 또는 사용 후 직사광선에 의하여 사용부위가 붉은 반점, 부어오름 또는 가려움증 등의 이상 증상이나 부작용이 있는 경우에는 전문의 등과 상담할 것.</li>
          <li>상처가 있는 부위 등에는 사용을 자제할 것.</li>
          <li>보관 및 취급 시 주의사항
            <ol type="A" class="enzkr-specs__precautions-sub">
              <li>어린이의 손이 닿지 않는 곳에 보관할 것.</li>
              <li>직사광선을 피해서 보관할 것.</li>
            </ol>
          </li>
          <li>눈 주위를 피하여 사용할 것.</li>
          <li>알갱이가 눈에 들어갔을 때에는 물로 씻어내고, 이상이 있는 경우에는 전문의와 상담할 것.</li>
        </ol>
      </div>

      <div class="enzkr-specs__section enzkr-specs__section--last">
        <h3 class="enzkr-specs__section-title enzkr-specs__section-title--reg">품질보증기준</h3>
        <p class="enzkr-specs__qa-text">본 제품에 이상이 있을 경우 공정거래위원회고시 ‘소비자 분쟁 해결기준’에 의해 보상해 드립니다.</p>
      </div>
    </div>
  </div>

</section>