<?php

/**
 * contents for short code pages go inside this page
 */

wp_enqueue_style('content-styles', plugins_url('assets/css/styles.css', __FILE__));
wp_enqueue_script('content-js', plugins_url('assets/js/script.js', __FILE__), array(), false, true);
wp_localize_script('content-js', 'graphics_obj', array(
  'ajaxurl' => admin_url('admin-ajax.php'),
  'plugin_graphics_url' => PLUGIN_GRPHICS_URL,
  'image_server_base_path' => IMAGE_SERVER_BASE_PATH
));

?>

<!-- This is the area for HTML .Styles we can write on the above styles.css or common tempalte CSS file and scripts we can write on above files-->

<!-- end of the area for HTML -->
<?php 
$SERVER_NAME = explode(".",$_SERVER["SERVER_NAME"]);

if($SERVER_NAME[0]=="wwwmx"){ 
  require_once("sliderCOUNTRY-MX.php"); //country store
}else{
  require_once("sliderIBO-MX.php"); //IBO store
}
?>

<h2 class="WP-home-icons-title WP-title-text margintop80 only-desktop">Descubre lo que nos <span class="green" style="font-style: italic;">define</span> como una compañía de clase mundial</h2>
<h2 class="WP-home-icons-title WP-title-text margintop80 only-mobile">Descubre lo que nos <span class="green" style="font-style: italic;">define</span> como una <br> compañía de clase mundial</h2>
<div class="WP-home-separator"></div>

<div class="WP-home-icons-container containerflexwrap margintop40">
  <div class="block02">
    <img alt="" class="WP-home-icons-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/Naturalproducts-2.png">
    <h2 class="WP-home-icons-subtitle WP-normal-text">PRODUCTOS TOTALMENTE NATURALES</h2>
  </div>
  <div class="block02">
    <img alt="" class="WP-home-icons-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/06/AwardedRice-1.png">
    <h2 class="WP-home-icons-subtitle WP-normal-text">MARCA PREMIUM</h2>
  </div>
  <div class="block02">
    <img alt="" class="WP-home-icons-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/RiceBlends-2.png">
    <h2 class="WP-home-icons-subtitle WP-normal-text">MEZCLAS EXCLUSIVAS DE ARROZ</h2>
  </div>
  <div class="block02">
    <img alt="" class="WP-home-icons-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/NoAnimalTestingbunny-2.png">
    <h2 class="WP-home-icons-subtitle WP-normal-text">NO PROBADO EN ANIMALES</h2>
  </div>
  <div class="block02">
    <img alt="" class="WP-home-icons-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/ContinuousImprovement-2.png">
    <h2 class="WP-home-icons-subtitle WP-normal-text">MEJORA CONTINUA</h2>
  </div>
</div>

<div class="WP-home-product-container containerflexwrap margintop40">
  <div class="block02 WP-home-product-inner">
    <img class="WP-home-product-imageback" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/06/Wellness-AdBanner-1.jpg">
    <h3 class="WP-home-product-title WP-title-text">Bienestar integral más allá de la salud</h3>
    <div class="WP-home-promotion-separator"></div>
    <p class="WP-home-promotion-text WP-normal-text">Mejora tus niveles de estrés físico, emocional y espiritual.</p>
    <img class="WP-home-product-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/01/Wellness-Pack-SmBanner-260213-v2.png">
  </div>
  <div class="block02 WP-home-product-inner">
    <img class="WP-home-product-imageback" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/vitality-adBanner-2-MX.jpg">
    <h3 class="WP-home-product-title WP-title-text">Siente la vitalidad en tu movimiento</h3>
    <div class="WP-home-promotion-separator"></div>
    <p class="WP-home-promotion-text WP-normal-text">Llénate de energía para vivir al máximo tus actividades físicas diarias.</p>
    <img class="WP-home-product-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/01/Vitality-Pack-SmBanner-260213-v2.png">
  </div>
  <div class="block02 WP-home-product-inner">
    <img class="WP-home-product-imageback" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/Coffee-AdBanner-1-MX2.jpg">
    <h3 class="WP-home-product-title WP-title-text">Tu café diario puede ser más sano</h3>
    <div class="WP-home-promotion-separator"></div>
    <p class="WP-home-promotion-text WP-normal-text">Disfruta de una opción saludable, deliciosa y práctica para tu café de todos los días.</p>
    <img class="WP-home-product-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/01/Cafe-Pack-SmBanner-260213.png">
  </div>
</div>

<div class="WP-home-description-container containerflexwrap margintop80">
  <div class="block07">
    <h2 class="WP-home-guarantee-title">POR QUÉ TODOS DEBEN TOMAR SUPLEMENTOS NUTRICIONALES</h2>
    <div class="WP-home-promotion-separator-green margintop20 marginbottom20"></div>
    <p class="WP-home-description-text WP-normal-text">
      Mantener un estilo de vida saludable es el primer paso, pero no siempre es suficiente. Factores como la calidad de los alimentos actuales o la disminución natural de la absorción de nutrientes con la edad pueden dejar vacíos en tu salud. Los suplementos nutricionales actúan como un puente, garantizando que tu cuerpo reciba el combustible exacto que necesita para funcionar de forma óptima.
    </p>
  </div>
  <div class="block03 WP-relative">
    <img class="WP-home-description-backimage" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/06/MexicoMap-Banner.jpg">
    <p class="WP-home-description-number-green">Más de 15 millones</p>
    <h2 class="WP-home-description-title WP-title-text">DE PERSONAS EN MÉXICO CONSUMEN SUPLEMENTOS ALIMENTICIOS.</h2>
    <p class="WP-home-description-text WP-normal-text">
      Para México, la industria de suplementos alimenticios juega diversos roles estratégicos que contribuyen tanto al cuidado de la población como al impulso al crecimiento y desarrollo económico.
    </p>
  </div>
</div>

<div class="WP-home-product-container containerflexwrap margintop40">
  <div class="block02 WP-home-product-inner">

    <img class="WP-home-product-imageback" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/sm-banner-ROYALE.png">

    <h3 class="WP-home-product-title WP-title-text">Vida plena</h3>
    <div class="WP-home-promotion-separator"></div>

    <p class="WP-home-promotion-text WP-normal-text">Obtén todo el poder del arroz morado.</p>
    <img class="WP-home-product-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2022/08/ROYALE-MX-220831.png">
    <h2 class="WP-home-product-call WP-subtitle-text">alfa PXP ROYALE</h2>
    <p class="WP-normal-text WP-home-product-description ">
      Mejora tu bienestar y vive una vida más plena.
    </p>
    <a href="<?php echo esc_url(DOMAIN_SUB_SITE . '/mx/alfa_royale'); ?>"
      class="WP-home-product-description-button WP-button-text">
      CONOCE MÁS
    </a>
  </div>
  <div class="block02 WP-home-product-inner">
    <img class="WP-home-product-imageback" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/sm-banner-FORTE.png">

    <h3 class="WP-home-product-title WP-title-text">Complementa tu vida</h3>
    <div class="WP-home-promotion-separator"></div>

    <p class="WP-home-promotion-text WP-normal-text">Dale prioridad a tu bienestar.</p>
    <img class="WP-home-product-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2022/08/HFI-MX-220831.png">
    <h2 class="WP-home-product-call WP-subtitle-text">alfa HFI</h2>
    <p class="WP-normal-text WP-home-product-description ">
      Nuestra exclusiva fórmula de ácido húmico y fúlvico te ayuda a mantenerte protegido.
    </p>
    <a href="<?php echo esc_url(DOMAIN_SUB_SITE . '/mx/alfa-hfi'); ?>"
      class="WP-home-product-description-button WP-button-text">
      CONOCE MÁS
    </a>
  </div>
  <div class="block02 WP-home-product-inner">
    <img class="WP-home-product-imageback" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/07/sm-banner-HFI.png">

    <h3 class="WP-home-product-title WP-title-text">Nutrición Celular Avanzada</h3>
    <div class="WP-home-promotion-separator"></div>

    <p class="WP-home-promotion-text WP-normal-text">Estás hecho de células. ¿Con qué las estás alimentando?</p>
    <img class="WP-home-product-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2026/01/FORTE-MX-260216.png">
    <h2 class="WP-home-product-call WP-subtitle-text">alfa PXP FORTE</h2>
    <p class="WP-normal-text WP-home-product-description ">
      Fusionamos arroz integral orgánico de Tailandia con espirulina de alta pureza, utilizando Tecnología BioReady para garantizar una absorción celular directa e inmediata.
    </p>
    <a href="<?php echo esc_url(DOMAIN_SUB_SITE . '/mx/alfa-pxp-forte-2'); ?>"
      class="WP-home-product-description-button WP-button-text">
      CONOCE MÁS
    </a>
  </div>
</div>

<div class="WP-home-promotion-container  margintop20">
	<a href="<?php echo esc_url(DOMAIN_SUB_SITE . '/mx/mx-partner-products'); ?>">
	<img class="WP-home-partner-products only-desktop" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/Banner_PP_deskt_260908.jpg" alt="Banner Partner Products | ENZACTA">
	<img class="WP-home-partner-products only-mobile" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/Banner_PP_mob_260908.jpg" alt="Banner Partner Products | ENZACTA">
	</a>
</div>

<div class="WP-home-guarantee-container margintop20 marginbottom40">
  <div class="WP-home-guarantee-innercontainer containerflexwrap">
    <div class="block08">
      <h2 class="WP-home-guarantee-title">Estamos seguros de que te encantarán nuestros productos.</h2>
      <div class="WP-home-promotion-separator-gold"></div>
      <p class="WP-home-undew-description-text WP-subtitle-text">
        ¡Compra con facilidad! Siempre puedes devolver cualquier producto en tu primera compra hasta 30 días a partir de la fecha de compra.
      </p>
    </div>
    <div class="block02 centervertical">
      <img class="WP-home-guarantee-image" src="https://enzactamedia.enzacta.com/ewp/sites/3/2021/06/Guarantee-Seal.png">
    </div>
  </div>
</div>