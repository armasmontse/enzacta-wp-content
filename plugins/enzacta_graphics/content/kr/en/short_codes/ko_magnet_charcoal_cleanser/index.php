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

          <p class="enzkr-hero__tag">MICRO FOAM DEEP CLEANSING</p>

          <p class="enzkr-hero__subtitle">Magnet Charcoal</p>

          <h1 class="enzkr-hero__title">CLEANSER</h1>

          <p class="enzkr-hero__desc">A gentle yet effective facial cleanser powered by activated charcoal beads and moisture supporting ingredients to remove impurities, cleanse pores, and leave skin feeling fresh, soft, and comfortable.</p>

          <div class="enzkr-hero__actions">
            <a class="enzkr-btn enzkr-btn--primary" href="#enzkr-description">Description</a>
            <a class="enzkr-btn enzkr-btn--ghost" href="#enzkr-facts">facts</a>
          </div>
        </div>
      </div>

      <div class="enzkr-hero__figure">
        <img class="enzkr-hero__bottle" src="<?= plugins_url('assets/img/hero/Cleanser_hero_bottle_261001.png', __FILE__) ?>" alt="alfa K Magnet Charcoal CLEANSER">

      </div>
    </div>
  </div>

  <div class="enzkr-stats">
    <p class="enzkr-stats__intro">For skin that isn’t properly cleansed</p>
    <h2 class="enzkr-stats__title">NOURISHMENT CAN ONLY GO SO FAR</h2>
    <div class="enzkr-stats__grid">
      <div class="enzkr-stat" data-value="98.90" data-suffix="%" data-decimals="2">
        <span class="enzkr-stat__label">Fine Dust Removal</span>
        <span class="enzkr-stat__value">0%</span>
      </div>
      <div class="enzkr-stat" data-value="0.00" data-suffix="" data-decimals="2">
        <span class="enzkr-stat__label">Skin Irritation Score</span>
        <span class="enzkr-stat__value">0.00</span>
      </div>
      <div class="enzkr-stat" data-value="100" data-suffix="%" data-decimals="0">
        <span class="enzkr-stat__label">User Satisfaction</span>
        <span class="enzkr-stat__value">0%</span>
      </div>
    </div>
  </div>

  <div class="enzkr-problem">
    <div class="enzkr-problem__head">
      <p class="enzkr-problem__eyebrow">[  문제 · PROBLEM  ]</p>
      <p class="enzkr-problem__intro">When cleansing relies on fingertip friction</p>
      <h2 class="enzkr-problem__title">YOUR SKIN CAN SUFFER IN SILENCE</h2>
      <span class="enzkr-problem__rule"></span>
    </div>

    <div class="enzkr-problem__card enzkr-problem__card--cleanser">



      <div class="enzkr-problem__grid">
        <div class="enzkr-problem__tile">
          <div class="enzkr-problem__photo">
            <img src="<?= plugins_url('assets/img/problem/Cleanser_problem_skin1_261001.png', __FILE__) ?>" alt="">
          </div>
          <span class="enzkr-problem__badge enzkr-problem__badge--1"><span class="enzkr-problem__cause">Improper cleansing</span><span class="enzkr-problem__damage">SURFACE SKIN<br>DAMAGE</span></span>
        </div>
        <div class="enzkr-problem__tile">
          <div class="enzkr-problem__photo">
            <img src="<?= plugins_url('assets/img/problem/Cleanser_problem_skin2_261001.png', __FILE__) ?>" alt="">
          </div>
          <span class="enzkr-problem__badge enzkr-problem__badge--2"><span class="enzkr-problem__cause">Harsh friction</span><span class="enzkr-problem__damage">SKIN BARRIER<br>DAMAGE</span></span>
        </div>
        <div class="enzkr-problem__tile">
          <div class="enzkr-problem__photo">
            <img src="<?= plugins_url('assets/img/problem/Cleanser_problem_skin3_261001.png', __FILE__) ?>" alt="">
          </div>
          <span class="enzkr-problem__badge enzkr-problem__badge--3"><span class="enzkr-problem__cause">Overcleansing</span><span class="enzkr-problem__damage">DEEP SKIN<br>DRYNESS</span></span>
        </div>
      </div>

      <div class="enzkr-problem__note">
        <p class="enzkr-problem__note-text">For anyone who wants a <strong>fresh, squeaky clean feel</strong><br>with <strong>comfort without tightness,</strong></p>

        <p class="enzkr-problem__note-cta">THERE IS ONE CLEAR CHOICE</p>
      </div>
    </div>
  </div>

  <div class="enzkr-point" id="enzkr-description">
    <div class="enzkr-point__inner">

      <div class="enzkr-point__head">
        <p class="enzkr-point__eyebrow">[  비움 · POINT 01  ]</p>
        <p class="enzkr-point__intro">Draws Out Impurities, Replenishes Moisture</p>
        <h2 class="enzkr-point__title">DUAL ACTION CLEANSING</h2>
        <span class="enzkr-point__rule"></span>
      </div>

      <div class="enzkr-point__grid">
        <div class="enzkr-point__mini enzkr-point__mini--cleansing enzkr-point__mini--step1">
          <p class="enzkr-point__mini-badge">STEP 1</p>
          <div class="enzkr-point__mini-body">
            <h3 class="enzkr-point__mini-title"><span class="enzkr-point__mini-action">Activated</span> <span class="enzkr-point__mini-focus">Charcoal Cleansing</span></h3>
            <p class="enzkr-point__mini-text">Targets impurities within pores and lifts them away for a thorough, refreshed cleanse.</p>
            <div class="enzkr-point__mini-detail">
              <p class="enzkr-point__mini-cta">Activated Bamboo Charcoal Fired at 1,000°C</p>
              <p class="enzkr-point__disclaimer enzkr-point__disclaimer--mini">3,000 ppm stabilized charcoal powder beads</p>
            </div>
          </div>
        </div>
        <div class="enzkr-point__mini enzkr-point__mini--cleansing enzkr-point__mini--step2">
          <p class="enzkr-point__mini-badge">STEP 2</p>
          <div class="enzkr-point__mini-body">
            <h3 class="enzkr-point__mini-title"><span class="enzkr-point__mini-action">Moisture</span> <span class="enzkr-point__mini-focus">Replenishing Cleansing</span></h3>
            <p class="enzkr-point__mini-text">Once impurities are removed, concentrated moisture care leaves skin soft, comfortable, and free from tightness.</p>
            <div class="enzkr-point__mini-detail">
              <p class="enzkr-point__mini-cta">20.1% INTENSIVE MOISTURE SYSTEM</p>
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
        <p class="enzkr-point2__intro">Your Skin Notices It First</p>
        <h2 class="enzkr-point2__title">A SPECIAL BLEND OF SIX INGREDIENTS</h2>
        <span class="enzkr-point2__rule"></span>
      </div>

      <div class="enzkr-point2__grid">

        <div class="enzkr-point2__card enzkr-point2__card--01" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card1_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-diamond-light.png" alt="">
          <span class="enzkr-point2__num">01</span>
          <h3 class="enzkr-point2__name">BAMBOO CHARCOAL<br>FIRED AT 1,000°C</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">3,000 ppm</p>
              <p class="enzkr-point2__stat-label">Stabilized Charcoal<br>Powder Beads</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">Its dense microporous structure helps adsorb impurities and excess sebum from within pores to leave skin visibly clearer.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--02" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card2_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-diamond-brown.png" alt="">
          <span class="enzkr-point2__num">02</span>
          <h3 class="enzkr-point2__name">MOISTURE  BINDING<br>CARE</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">Pentavitin</p>

            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">With a moisture binding mechanism similar to the skin’s natural sugars, it draws moisture to the skin and helps keep it there.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--03" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card3_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/Star-white.png" alt="">
          <span class="enzkr-point2__num">03</span>
          <h3 class="enzkr-point2__name">RESURRECTION<br>PLANT EXTRACT</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">Resilient</p>
              <p class="enzkr-point2__stat-label">Moisture Care</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">Known for retaining moisture even in dry conditions, this botanical extract helps maintain hydration and soothe the skin.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--04" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card4_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-star-dark.png" alt="">
          <span class="enzkr-point2__num">04</span>
          <h3 class="enzkr-point2__name">PANTHENOL</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">Comforting</p>
              <p class="enzkr-point2__stat-label">Barrier Care</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">Helps comfort skin sensitized by friction during cleansing while supporting the skin barrier to maintain soft, hydrated skin.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--05" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card5_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-star-dark.png" alt="">
          <span class="enzkr-point2__num">05</span>
          <h3 class="enzkr-point2__name">CERAMIDE NP<br>+ BETA GLUCAN</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">Dual </p>
              <p class="enzkr-point2__stat-label">barrier support</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">The combined moisturizing and barrier care benefits of these two ingredients help maintain a healthy skin barrier even after cleansing.</p>
        </div>

        <div class="enzkr-point2__card enzkr-point2__card--06" style="background-image:url('<?= plugins_url('assets/img/point2/Cleanser_point2_card6_261001.png', __FILE__) ?>')">
          <img class="enzkr-point2__icon" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/10/icon-star-dark.png" alt="">
          <span class="enzkr-point2__num">06</span>
          <h3 class="enzkr-point2__name">RICE EXTRACT</h3>
          <div class="enzkr-point2__stat">
            <span class="enzkr-point2__stat-vline"></span>
            <div class="enzkr-point2__stat-inner">
              <p class="enzkr-point2__stat-value">Vitality</p>
              <p class="enzkr-point2__stat-label">RADIANCE CARE</p>
            </div>
            <span class="enzkr-point2__stat-vline"></span>
          </div>
          <p class="enzkr-point2__text">A powerful antioxidant ingredient that helps promote a clear and even complexion while supporting skin that looks radiant and revitalized.</p>
        </div>

      </div>

      <p class="enzkr-point2__disclaimer">*Descriptions refer to the properties of the raw ingredients.</p>

    </div>
  </div>

  <div class="enzkr-point3">
    <div class="enzkr-point3__frame">
      <div class="enzkr-point3__photo">
        <img src="<?= plugins_url('assets/img/point3/Cleanser_point3_bg_261001_v3.jpg', __FILE__) ?>" alt="alfa K Magnet Charcoal CLEANSER">
        <div class="enzkr-point3__head">
          <p class="enzkr-point3__eyebrow">[  핵심  · POINT 03  ]</p>
          <p class="enzkr-point3__intro">From Surface to Pores</p>
          <h2 class="enzkr-point3__title">DEEP CLEANSING WITHOUT TIGHTNESS</h2>
          <span class="enzkr-point3__rule"></span>
        </div>
      </div>
      <div class="enzkr-point3__photo-fade"></div>
    </div>

    <div class="enzkr-point3__inner">
      <div class="enzkr-point3__card">
        <p class="enzkr-point3__trial-intro">Proven in a Single Cleanse</p>
        <h3 class="enzkr-point3__trial-title">ULTRAFINE DUST CLEANSING EFFICACY</h3>
        <span class="enzkr-point3__rule enzkr-point3__rule--card"></span>
        <div class="enzkr-point3__stat" data-value="98.90" data-decimals="2" data-suffix="%">
          <p class="enzkr-point3__stat-value">0%</p>
          <p class="enzkr-point3__stat-label">CLEANSING RATE</p>
        </div>
        <p class="enzkr-point3__trial-label">(Simulant test)</p>
        <p class="enzkr-point3__test-label">Human application test completed</p>
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
        <p class="enzkr-point3__scale-caption">Immediately after one use</p>
        <p class="enzkr-point3__footnote">[Human Application Test: Ultrafine Dust Simulant Cleansing Efficacy]<br>Korea Bio Clinical Research Center Co., Ltd. / April 27 to 29, 2026 / 22 adult participants / Individual results may vary.</p>
      </div>
    </div>
  </div>

  <div class="enzkr-problem2">
    <div class="enzkr-problem2__head">
      <p class="enzkr-problem2__eyebrow">[  문제 · PROBLEM  ]</p>
      <p class="enzkr-problem2__intro">What is</p>
      <h2 class="enzkr-problem2__title">Ultrafine Dust?</h2>
      <span class="enzkr-problem2__rule" aria-hidden="true"></span>
    </div>
    <div class="enzkr-problem2__panel">
      <h3 class="enzkr-problem2__subtitle"><span class="enzkr-problem2__invisible">Invisible to the eye</span> <span class="enzkr-problem2__pores">Deep within pores</span></h3>
      <span class="enzkr-problem2__rule enzkr-problem2__rule--panel" aria-hidden="true"></span>
      <p class="enzkr-problem2__lead">About one thirtieth the thickness of a human hair, ultrafine dust is virtually invisible to the naked eye.</p>
      <div class="enzkr-problem2__body">
        <p class="enzkr-problem2__text">When these particles remain on the skin, they can contribute to ongoing irritation, oxidative stress, and a weakened skin defense system. Over time, this may compromise the skin barrier and lead to additional skin concerns, making thorough daily cleansing especially important.</p>
        <p class="enzkr-problem2__closing">A proper cleansing routine that helps reduce skin stress and maintain healthy looking skin is at the heart of effective skincare.</p>
      </div>
    </div>
  </div>

  <div class="enzkr-point4">
    <div class="enzkr-point4__bg">
      <div class="enzkr-point4__bg-fade"></div>
      <div class="enzkr-point4__frame">
        <div class="enzkr-point4__head">
          <p class="enzkr-point4__eyebrow">[  핵심  · POINT 04  ]</p>
          <p class="enzkr-point4__intro">Cleanse. Replenish. Protect.</p>
          <h2 class="enzkr-point4__title">MAGNET Charcoal Cleansing</h2>
          <span class="enzkr-point4__rule"></span>
        </div>

        <div class="enzkr-point4__callout enzkr-point4__callout--large">
          <span class="enzkr-point4__callout-line"></span>
          <div class="enzkr-point4__callout-text">
            <p class="enzkr-point4__callout-title">Dense Foam That Stays Intact</p>
            <p class="enzkr-point4__callout-sub">Gentle Cleansing Care</p>
            
          </div>
        </div>
        <div class="enzkr-point4__callout enzkr-point4__callout--small">
          <div class="enzkr-point4__callout-text">
            <p class="enzkr-point4__callout-title">Bursting Charcoal Beads</p>
            <p class="enzkr-point4__callout-sub">Cleanses ultrafine dust from within pores</p>
          </div>
          <span class="enzkr-point4__callout-line"></span>
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
          <p class="enzkr-point4__content-text">Activated charcoal beads burst at your fingertips as the foam becomes rich and dense with water,</p>
          <p class="enzkr-point4__content-highlight">helping cleanse impurities even from hard to reach areas.</p>
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
        <p class="enzkr-point5__intro">For Sensitive Skin</p>
        <h2 class="enzkr-point5__title">Cleanse with Confidence</h2>
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
            <p class="enzkr-point5__eyebrow--card">Gentle Care for Sensitive Skin</p>
            <h3 class="enzkr-point5__subtitle">Soft Hypoallergenic Foam<br>Cleanse</h3>
            <p class="enzkr-point5__text">Formulated with naturally derived surfactants, it creates a rich, gentle foam for a comfortable cleanse.</p>
          </div>
        </div>

        <div class="enzkr-point5__tested">
          <h3 class="enzkr-point5__tested-title">No Irritation Concerns</h3>
          <p class="enzkr-point5__tested-sub">PRIMARY SKIN IRRITATION TEST COMPLETED</p>
        </div>

        <div class="enzkr-point5__proof">
          <div class="enzkr-point5__proof-cert">
            <img src="<?= plugins_url('assets/img/point5/Cleanser_point5_certificate_261001_v2.jpg', __FILE__) ?>" width="419" height="629" alt="Korea Bio Clinical Research Center test result certificate for Magnet Charcoal Cleanser">
          </div>
          <div class="enzkr-point5__proof-details">
            <div class="enzkr-point5__proof-table">
              <img src="<?= plugins_url('assets/img/point5/Cleanser_point5_table_261001_v2.jpg', __FILE__) ?>" width="870" height="217" alt="Magnet Charcoal Cleanser primary skin irritation test result">
            </div>
            <div class="enzkr-point5__result">
              <p class="enzkr-point5__score">Skin reaction score 0.00, determined to be non-irritating.</p>
              <p class="enzkr-point5__confidence">Use with confidence.</p>
            </div>
          </div>
        </div>

        <p class="enzkr-point5__footnote">[Official test result certificate issued by the Korea Bio Clinical Research Center, confirming a skin reaction score of 0.00 and a “no irritancy” classification in the primary skin irritation test.]</p>

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
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step1_261001.jpg', __FILE__) ?>" alt="Dispense an appropriate amount into the palm of your hand."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">01</p>
        <span class="enzkr-point6__step-rule"></span>

        <p class="enzkr-point6__step-text">Dispense an appropriate amount into the palm of your hand.</p>
      </div>
      <div class="enzkr-point6__step">
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step2_261001.jpg', __FILE__) ?>" alt="Add a small amount of water and work into a rich, dense lather."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">02</p>
        <span class="enzkr-point6__step-rule"></span>

        <p class="enzkr-point6__step-text">Add a small amount of water and work into a rich, dense lather.</p>
      </div>
      <div class="enzkr-point6__step">
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step3_261001.jpg', __FILE__) ?>" alt="Apply the lather over the entire face and gently massage in circular motions for 30 seconds."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">03</p>
        <span class="enzkr-point6__step-rule"></span>

        <p class="enzkr-point6__step-text">Apply the lather over the entire face and gently massage in circular motions for 30 seconds.</p>
      </div>
      <div class="enzkr-point6__step">
        <div class="enzkr-point6__step-photo"><img src="<?= plugins_url('assets/img/how/Cleanser_how_step4_261001.jpg', __FILE__) ?>" alt="Rinse thoroughly with lukewarm water until no residue remains."></div>
        <p class="enzkr-point6__step-label">STEP</p>
        <p class="enzkr-point6__step-number">04</p>
        <span class="enzkr-point6__step-rule"></span>
        <p class="enzkr-point6__step-text">Rinse thoroughly with lukewarm water until no residue remains.</p>
      </div>
    </div>

    <div class="enzkr-point6__bottle">
      <img src="<?= plugins_url('assets/img/how/Cleanser_how_hero_bg_261001.jpg', __FILE__) ?>" alt="alfa K Magnet Charcoal CLEANSER">
    </div>
  </div>

  <div class="enzkr-specs" id="enzkr-facts">
    <div class="enzkr-specs__head">
      <p class="enzkr-specs__eyebrow">[  상품정보제공고시  · PRODUCT DETAILS  ]</p>
      <h2 class="enzkr-specs__title">PRODUCT SPECIFICATIONS</h2>
      <p class="enzkr-specs__sub">Product details, ingredients, precautions, and quality information for alfa K:Lumen Magnet Charcoal Cleanser.</p>
      <span class="enzkr-specs__rule"></span>
    </div>

    <div class="enzkr-specs__card">
      <div class="enzkr-specs__grid">
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">Product</p>
          <p class="enzkr-specs__value">alfa K:Lumen Magnet Charcoal Cleanser</p>
        </div>
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">Net Content</p>
          <p class="enzkr-specs__value">120 ml / 4.06 fl. oz.</p>
        </div>

        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">Skin Type</p>
          <p class="enzkr-specs__value">Suitable for all skin types</p>
          <?php /* NEEDS REVIEW: Cleanser irritation documentation is not available; PSD copy retained pending proof. */ if (false): ?><p class="enzkr-specs__sub">Skin irritation score 0.00 in a human skin primary irritation test</p><?php endif; ?>
        </div>
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">Shelf Life</p>
          <p class="enzkr-specs__value">36 months from manufacture</p>
          <p class="enzkr-specs__sub">Use within 12 months after opening</p>
        </div>




        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">Made In</p>
          <p class="enzkr-specs__value enzkr-specs__value--flag">Republic of Korea <span class="enzkr-specs__flag"><svg viewBox="0 0 900 600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Republic of Korea">
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
          <p class="enzkr-specs__label">Manufacturer</p>
          <p class="enzkr-specs__value">Kolmar Korea Co., Ltd.</p>
        </div>

        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">Responsible Distributor</p>
          <p class="enzkr-specs__value">ENZACTA Co., Ltd.</p>
        </div>
        <div class="enzkr-specs__cell">
          <p class="enzkr-specs__label">Customer Service</p>
          <p class="enzkr-specs__value">ENZACTA Customer Center 02.565.4011</p>
        </div>
      </div>

      <div class="enzkr-specs__section">
        <h3 class="enzkr-specs__section-title">Full Ingredients</h3>
        <div class="enzkr-specs__ingredients">
          <button type="button" class="enzkr-specs__ingredients-toggle" aria-expanded="true" aria-controls="enzkr-specs-ingredients-text">
            <span>View full ingredient list</span>
            <span class="enzkr-specs__ingredients-icon" aria-hidden="true"></span>
          </button>
          <p class="enzkr-specs__ingredients-text" id="enzkr-specs-ingredients-text">Water, Myristic Acid, Glycerin, Methylpropanediol, Potassium Hydroxide, Lauric Acid, Palmitic Acid, Stearic Acid, Glyceryl Stearate, Panthenol, Acrylates Copolymer, Sodium Cocoyl Alaninate, Potassium Cocoyl Glycinate, Sorbitan Olivate, Charcoal Powder, Ethylhexylglycerin, Lauryl Betaine, Sorbitan Sesquioleate, Phytosteryl/Octyldodecyl Lauroyl Glutamate, Polyquaternium-7, Sodium Chloride, Butylene Glycol, Glycol Distearate, Sodium Phytate, Glycol Stearate, 1,2-Hexanediol, Corn Germ Oil, Agar, Hydrogenated Lecithin, Sodium Benzoate, Centella Asiatica Extract, Fig Extract, Peony Root Extract, Irish Moss Extract, Caprylic/Capric Triglyceride, Rice Extract, Rose of Jericho Extract, Beta-Glucan, Ceramide NP, Saccharide Isomerate, Tocopherol, Pentaerythrityl Tetra-di-t-Butyl Hydroxyhydrocinnamate, Sodium Citrate, Citric Acid, Palmitoyl Hexapeptide-12.</p>
        </div>
      </div>

      <div class="enzkr-specs__section">
        <h3 class="enzkr-specs__section-title enzkr-specs__section-title--reg">Precautions</h3>
        <ol class="enzkr-specs__precautions">
          <li>If red spots, swelling, itching, or other abnormal symptoms or side effects occur during or after use, especially when exposed to direct sunlight, discontinue use and consult a physician or other qualified healthcare professional.</li>
          <li>Do not use on areas with wounds or irritation.</li>
          <li>Storage and handling:
            <ol type="A" class="enzkr-specs__precautions-sub">
              <li>Keep out of reach of children.</li>
              <li>Store away from direct sunlight.</li>
              <li>Avoid use around the eye area.</li>
          <li>If any particles get into the eyes, rinse thoroughly with water. If any abnormal symptoms occur, consult a physician.</li>
        </ol>
        </li>
        </ol>
      </div>

      <div class="enzkr-specs__section enzkr-specs__section--last">
        <h3 class="enzkr-specs__section-title enzkr-specs__section-title--reg">Quality Assurance</h3>
        <p class="enzkr-specs__qa-text">If there is any issue with this product, compensation will be provided in accordance with the Fair Trade Commission’s Consumer Dispute Resolution Standards.</p>
      </div>
    </div>
  </div>

</section>