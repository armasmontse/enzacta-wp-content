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
<body>
	
	<div class="pp__hero--container-bg">
		<div class="pp-hero">
            <div class="pp-gradient-bg">
                <span class="blob blob-1"></span>
                <span class="blob blob-2"></span>
                <span class="blob blob-3"></span>
                <span class="blob blob-4"></span>
                <span class="blob blob-5"></span>
                <span class="blob blob-6"></span>
            </div>
            
            <img class="pp-logo" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/PP_logo_260804.png" alt="Partner Products">
            <img class="pp-byenzacta-tag" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/PP_by_enz_260804.png" alt="By ENZACTA">
        </div>
	</div>

	<div class="">
		<div class="WP-parnerproducts-video-link-wrapper">
				<p id="pp__intro-video">
					<b>Conoce la nueva identidad de Partner Products.</b>
				</p>
				<button type="button" class="WP-parnerproducts-video-link" id="pp-video-open" aria-haspopup="dialog" aria-controls="pp-video-modal">Ver video</button>
			</div>
	</div>

	<div class="WP-parnerproducts-header-text">
		<p class="WP-parnerproducts-head-title WP-normal-text margintop20" id="pp__intro">A través de <b>Partner Products</b>, ENZACTA pone a tu alcance una selección de productos creados por socios estratégicos de <b>calidad premium</b>. Cada uno ha sido cuidadosamente elegido para ofrecerte más opciones para un estilo de vida dinámico; con ingredientes y propuestas en tendencia que complementan tus hábitos de bienestar.</p>
		<div class="WP-parnerproducts-separator margintop40"></div>
	</div>

	<div class="PP-video-modal" id="pp-video-modal" role="dialog" aria-modal="true" aria-labelledby="pp-video-modal-title" aria-hidden="true" hidden tabindex="-1">
		<div class="PP-video-modal-backdrop" data-modal-close="true"></div>
		<div class="PP-video-modal-content" role="document">
			<div class="PP-video-modal-header">
				<h2 id="pp-video-modal-title">Nueva identidad de Partner Products</h2>
				<button type="button" class="PP-video-modal-close" aria-label="Cerrar video">×</button>
			</div>
			<div class="PP-video-modal-body">
				<div class="PP-video-wrapper">
					<iframe id="pp-video-iframe" src="" title="Video Partner Products" tabindex="0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<!-- ProBio360 Card Product -->
	<div class="WP-parnerproducts-product-container containerflexwrap">
		<div class="block05">
			<img class="WP-parnerproducts-product-image" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/ProBio360_260608.jpg">
		</div>
		<div class="block05">
			<h2 class="WP-parnerproducts-product-title WP-subtitle-text">ProBio360</h2>
			<p class="WP-parnerproducts-product-text WP-normal-text">
				ProBio360 es la solución integral diseñada para proteger y optimizar tu "segundo cerebro": el intestino. Este suplemento alimenticio va más allá de un probiótico convencional; es una fórmula simbiótica avanzada que combina la potencia de bacterias vivas con el alimento necesario para que prosperen. Al integrar probióticos, prebióticos y enzimas digestivas en una sola cápsula, ProBio360 crea el entorno ideal para que tu sistema digestivo recupere su equilibrio natural, permitiéndote vivir sin la pesadez y la distensión que limitan tu día a día.
			</br></br>
				<b>Contenido neto:</b> 60 cápsulas.
			</p>
			<div class="WP-parnerproducts-product-section margintop40 WP-green_enz-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-green_enz-product">
				BENEFICIOS
				</p>
				<ul class="WP-parnerproducts-product-list">
					<li class="WP-normal-text">Digestión sin complicaciones: Mejora la eficiencia digestiva y ayuda a prevenir molestias comunes como el estreñimiento o la diarrea.</li>
					<li class="WP-normal-text">Centro de Mando Inmune: Al fortalecer tu microbiota, refuerzas tu sistema inmunitario en su primera línea de defensa contra patógenos.</li>
					<li class="WP-normal-text">Restauración Profunda: Es el aliado ideal para restablecer el equilibrio de tu flora intestinal, especialmente tras periodos de estrés o tratamientos con antibióticos.</li>
					<li class="WP-normal-text">Absorción Total: Facilita la descomposición de nutrientes, permitiendo que tu cuerpo aproveche al máximo lo que consumes, reduciendo la inflamación intestinal.</li>
				</ul>
			</div>
		</div>
		<div class="block12">
			<div class="WP-parnerproducts-product-section margintop40 WP-green_enz-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-green_enz-product">				
				INSTRUCCIONES DE USO
				</p>
				<ul class="WP-parnerproducts-product-list WP-numbered-list">
					<li class="WP-normal-text">Tomar 2 cápsulas al día después del alimento, preferentemente en la mañana.</li>
					<li class="WP-normal-text">No exceder la porción sugerida.</li>
					<li class="WP-normal-text">Manténgase en un lugar fresco y seco, lejos del alcance de los niños.</li>
				</ul>
			</div>
		</div>
		<div class="block12 extra-sp">
			<div class="WP-parnerproducts-acordion-container" data-accordion="c1">
				<div class="WP-parnerproducts-acordion-button WP-normal-text WP-green_enz-product containerflexwrap c1">
					<div class="block12 flexme">
						<p class="WP-parnerproducts-product-text WP-normal-text">INGREDIENTES</p>
						<img class="WP-parnerproducts-acordion-button-icon" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/3/2025/01/plus_icon_02.svg">
					</div>
					<div class="block12">
						<div class="WP-parnerproducts-acordion-description WP-normal-text c1">
							<ul class="WP-parnerproducts-product-list">
								<li class="WP-normal-text">Mezcla probiótica (60 billones de UFC: Lactobacillus rhamnosus GG, Lactobacillus plantarum, Lactobacillus casei, Streptococcus thermophilus, Lactobacillus acidophilus, Bifidobacterium infantis).</li>
								<li class="WP-normal-text">Inulina de agave.</li>
								<li class="WP-normal-text">Bromelina.</li>
								<li class="WP-normal-text">Lipasa.</li>
								<li class="WP-normal-text">Proteasa.</li>
								<li class="WP-normal-text">Amilasa.</li>
								<li class="WP-normal-text">Papaya en polvo (Carica papaya).</li>
								<li class="WP-normal-text">Raíz de jengibre (Zingiber officinale).</li>
								<li class="WP-normal-text">Semilla de hinojo (Foeniculum vulgare).</li>
								<li class="WP-normal-text">Raíz de cúrcuma (Curcuma longa).</li>
								<li class="WP-normal-text">Hoja de menta (Mentha spicata).</li>
								<li class="WP-normal-text">Granetina.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="WP-parnerproducts-product-text WP-normal-text fda-statement">
				*Este producto no es un medicamento. El consumo de este producto es responsabilidad de quien lo consuma.
		</p>
	</div>
	<div class="spacer"></div>

	<div class="WP-parnerproducts-product-container containerflexwrap">
		<div class="block05">
			<img class="WP-parnerproducts-product-image" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/M4gnesio_v2.jpg">
		</div>
		<div class="block05">
			<h2 class="WP-parnerproducts-product-title WP-subtitle-text">M4gnesio</h2>
			<p class="WP-parnerproducts-product-text WP-normal-text">
				Enriquece tus días y descansa mejor por las noches con nuestra versión exclusiva de M4gnesio con Vitamina C, diseñada para complementar tu vida wellness. Esta fórmula única combina cuatro formas de magnesio, un mineral esencial para numerosas funciones en el organismo, junto con vitamina C, para darte un boost de antioxidantes. Este suplemento en tendencia es una opción práctica y conveniente para aquellos que buscan mantener un estilo de vida saludable.
			</br></br>
				<b>Contenido neto:</b> 60 cápsulas.
			</p>
			<div class="WP-parnerproducts-product-section margintop40 WP-blue-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-blue-product">
				BENEFICIOS
				</p>
				<ul class="WP-parnerproducts-product-list">
					<li class="WP-normal-text">Músculos relajados - menos calambres y espasmos (Citrato de magnesio).</li>
					<li class="WP-normal-text">Duerme como nunca - ayuda a regular el ciclo del sueño (Citrato de magnesio).</li>
					<li class="WP-normal-text">Huesos fuertes - tu aliado para prevenir osteoporosis y caries (Óxido de magnesio).</li>
					<li class="WP-normal-text">Mente con paz y salud - útil para aliviar estrés y ansiedad (Gluconato de magnesio).</li>
					<li class="WP-normal-text">Corazón sano - excelente para mantener un ritmo cardíaco saludable (Glicinato de magnesio).</li>
				</ul>
			</div>
		</div>
		<div class="block12">
			<div class="WP-parnerproducts-product-section margintop40 WP-blue-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-blue-product">				
				INSTRUCCIONES DE USO
				</p>
				<ul class="WP-parnerproducts-product-list WP-numbered-list">
					<li class="WP-normal-text">Tomar 2 cápsulas después de los alimentos, preferentemente por la noche.</li>
					<li class="WP-normal-text">Tomar una vez al día.</li>
					<li class="WP-normal-text">No exceder la porción sugerida.</li>
				</ul>
			</div>
		</div>
		<div class="block12 extra-sp">
			<div class="WP-parnerproducts-acordion-container" data-accordion="c2">
				<div class="WP-parnerproducts-acordion-button WP-normal-text WP-blue-product containerflexwrap c2">
					<div class="block12 flexme">
						<p class="WP-parnerproducts-product-text WP-normal-text">INGREDIENTES</p>
						<img class="WP-parnerproducts-acordion-button-icon" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/3/2025/01/plus_icon_02.svg">
					</div>
					<div class="block12">
						<div class="WP-parnerproducts-acordion-description WP-normal-text c2">
							<ul class="WP-parnerproducts-product-list">
								<li class="WP-normal-text">Citrato de magnesio.</li>
								<li class="WP-normal-text">Gluconato de magnesio.</li>
								<li class="WP-normal-text">Glicinato de magnesio.</li>
								<li class="WP-normal-text">Óxido de magnesio.</li>
								<li class="WP-normal-text">Vitamina C (ácido ascórbico).</li>
								<li class="WP-normal-text">Estearato de magnesio.</li>
								<li class="WP-normal-text">Grenetina.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="WP-parnerproducts-product-text WP-normal-text fda-statement">
				*Este producto no es un medicamento. El consumo de este producto es responsabilidad de quien lo consuma.
		</p>
	</div>
	<div class="spacer"></div>

	<div class="WP-parnerproducts-product-container containerflexwrap">
		<div class="block05">
			<img class="WP-parnerproducts-product-image" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/vitamina-d3k2-260126.jpg">
		</div>
		<div class="block05">
			<h2 class="WP-parnerproducts-product-title WP-subtitle-text">Vitamina D3 + K2</h2>
			<p class="WP-parnerproducts-product-text WP-normal-text">
				¡Potencia tu sistema de defensa interno con la fórmula sinérgica más avanzada del mercado! Nuestra Vitamina D3 + K2 fue diseñada para el consumidor que exige la máxima potencia y eficacia en su régimen de salud integral.
				</br></br>
				El colecalciferol (Vitamina D3 más vendida) es esencial para fortalecer tu sistema inmunológico y combatir virus y bacterias. Además, facilita la absorción y maximiza la vitamina D que ya consumes. La vitamina K2 actúa como una "guía", asegurando que el calcio se deposite correctamente en tus huesos y dientes, y no en tus arterias.
				</br></br>
				Nos diferenciamos por ofrecer la dosis más alta en el mercado en una sola cápsula: 6000 UI de vitamina D3 y 18,00 mg de vitamina K2.
				</br></br>
				<b>Contenido neto:</b> 150 cápsulas.
			</p>
			<div class="WP-parnerproducts-product-section margintop40 WP-orange-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-orange-product">
				BENEFICIOS
				</p>
				<ul class="WP-parnerproducts-product-list">
					<li class="WP-normal-text">Escudo inmunológico reforzado - El colecalciferol fortalece tu sistema inmune contra amenazas externas.</li>
					<li class="WP-normal-text">Dosis premium concentrada - La combinación más potente disponible: 6000 UI D3 + 18,00 mg K2.</li>
					<li class="WP-normal-text">Huesos fuertes - tu aliado para prevenir osteoporosis y caries (Óxido de magnesio).</li>
					<li class="WP-normal-text">Salud ósea y vascular - Asegura la fortaleza de los huesos y protege las arterias de depósitos indeseados de calcio.</li>
					<li class="WP-normal-text">Máxima absorción - D3 y K2 trabajan en conjunto para una asimilación de calcio eficiente y precisa.</li>
				</ul>
			</div>
		</div>
		<div class="block12">
			<div class="WP-parnerproducts-product-section margintop40 WP-orange-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-orange-product">				
				INSTRUCCIONES DE USO
				</p>
				<ul class="WP-parnerproducts-product-list WP-numbered-list">
					<li class="WP-normal-text">Tomar 1 cápsula después de los alimentos.</li>
					<li class="WP-normal-text">Tomar una vez al día.</li>
					<li class="WP-normal-text">No exceder la porción sugerida.</li>
				</ul>
			</div>
		</div>
		<div class="block12 extra-sp">
			<div class="WP-parnerproducts-acordion-container" data-accordion="c3">
				<div class="WP-parnerproducts-acordion-button WP-normal-text WP-orange-product containerflexwrap c3">
					<div class="block12 flexme">
						<p class="WP-parnerproducts-product-text WP-normal-text">INGREDIENTES</p>
						<img class="WP-parnerproducts-acordion-button-icon" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/3/2025/01/plus_icon_02.svg">
					</div>
					<div class="block12">
						<div class="WP-parnerproducts-acordion-description WP-normal-text c3">
							<ul class="WP-parnerproducts-product-list">
								<li class="WP-normal-text">Polvo de hojas de lechuga (Lactuca sativa).</li>
								<li class="WP-normal-text">Vitamina D3 (colecalciferol).</li>
								<li class="WP-normal-text">Vitamina K2 (menaquinona).</li>
								<li class="WP-normal-text">Celulosa microcristalina.</li>
								<li class="WP-normal-text">Estearato de magnesio.</li>
								<li class="WP-normal-text">Grenetina.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="WP-parnerproducts-product-text WP-normal-text fda-statement">
				*Este producto no es un medicamento. El consumo de este producto es responsabilidad de quien lo consuma.
		</p>
	</div>
	<div class="spacer"></div>

	<div class="WP-parnerproducts-product-container containerflexwrap">
		<div class="block05">
			<img class="WP-parnerproducts-product-image" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/AP-vitaminaC.png">
		</div>
		<div class="block05">
			<h2 class="WP-parnerproducts-product-title WP-subtitle-text">Vitamina C</h2>
			<p class="WP-parnerproducts-product-text WP-normal-text">
				Potencia tu wellness con nuestra fórmula única de jengibre, vitamina C y cúrcuma. Esta poderosa combinación te brinda una protección antioxidante superior, reduciendo la inflamación y fortaleciendo tu sistema inmunológico. Disfruta de una digestión saludable, alivia molestias menstruales y protege tu corazón. Ideal para mantenerte activo y lleno de energía en tu día a día.
			</br></br>
				<b>Contenido neto:</b> 60 cápsulas.
			</p>
			<div class="WP-parnerproducts-product-section margintop40 WP-lemon-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-lemon-product">
				BENEFICIOS
				</p>
				<ul class="WP-parnerproducts-product-list">
					<li class="WP-normal-text">Combate radicales libres y retrasa el envejecimiento celular.</li>
					<li class="WP-normal-text">Reduce inflamación.</li>
					<li class="WP-normal-text">Contribuye a mejorar la resistencia ante enfermedades.</li>
					<li class="WP-normal-text">Mejora la digestión y alivia molestias estomacales.</li>
					<li class="WP-normal-text">Reduce riesgo de enfermedades cardiovasculares.</li>
				</ul>
			</div>
		</div>
		<div class="block12">
			<div class="WP-parnerproducts-product-section margintop40 WP-lemon-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-lemon-product">				
				INSTRUCCIONES DE USO
				</p>
				<ul class="WP-parnerproducts-product-list WP-numbered-list">
					<li class="WP-normal-text">Toma 2 cápsulas al día, de preferencia con alimentos.</li>
					<li class="WP-normal-text">No excedas la dosis recomendada al día.</li>
					<li class="WP-normal-text">La puedes tomar con un vaso con agua, jugo o bebida de tu preferencia.</li>
				</ul>
			</div>
		</div>
		<div class="block12 extra-sp">
			<div class="WP-parnerproducts-acordion-container" data-accordion="c4">
				<div class="WP-parnerproducts-acordion-button WP-normal-text WP-lemon-product containerflexwrap c4">
					<div class="block12 flexme">
						<p class="WP-parnerproducts-product-text WP-normal-text">INGREDIENTES</p>
						<img class="WP-parnerproducts-acordion-button-icon" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/3/2025/01/plus_icon_02.svg">
					</div>
					<div class="block12">
						<div class="WP-parnerproducts-acordion-description WP-normal-text c4">
							<ul class="WP-parnerproducts-product-list">
								<li class="WP-normal-text">Vitamina C.</li>
								<li class="WP-normal-text">Zinc.</li>
								<li class="WP-normal-text">Jengibre.</li>
								<li class="WP-normal-text">Cúrcuma.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="WP-parnerproducts-product-text WP-normal-text fda-statement">
				*Este producto no es un medicamento. El consumo de este producto es responsabilidad de quien lo consuma.
		</p>
	</div>
	<div class="spacer"></div>
	
	<div class="WP-parnerproducts-product-container containerflexwrap">
		<div class="block05">
			<img class="WP-parnerproducts-product-image" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/nutricab-shampoo-T.png">
		</div>
		<div class="block05">
			<h2 class="WP-parnerproducts-product-title WP-subtitle-text">NutriCab Shampoo</h2>
			<p class="WP-parnerproducts-product-text WP-normal-text">
				Fórmula única que combina todos los ingredientes más conocidos para el cuidado capilar en un solo producto.</br></br>
				Descubre el poder de la nutrición capilar natural con NutriCab. Nuestro shampoo con una fórmula exclusiva aprobada por ENZACTA, combina todos los ingredientes más efectivos que la naturaleza tiene para tu cuidado capilar.
			</br></br>
				<b>Contenido neto:</b> 500ml.	
			</p>
			<div class="WP-parnerproducts-product-section margintop40 WP-green-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-green-product">
				BENEFICIOS
				</p>
				<ul class="WP-parnerproducts-product-list">
					<li class="WP-normal-text">Estimula el crecimiento y reduce la caída.</li>
					<li class="WP-normal-text">Fortalece y nutre el cabello.</li>
					<li class="WP-normal-text">Aporta brillo, suavidad y manejabilidad natural.</li>
					<li class="WP-normal-text">Protege contra daños externos, como la secadora, agua pesada, etc.</li>
				</ul>
			</div>
		</div>
		<div class="block12">
			<div class="WP-parnerproducts-product-section margintop40 WP-green-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-green-product">				
				INSTRUCCIONES DE USO
				</p>
				<ul class="WP-parnerproducts-product-list WP-numbered-list">
					<li class="WP-normal-text">Aplica el NutriCab Shampoo sobre el cabello mojado, masajeando suavemente hasta formar espuma.</li>
					<li class="WP-normal-text">Enjuaga con abundante agua.</li>
					<li class="WP-normal-text">Para un mejor resultado, utiliza después el NutriCab Acondicionador sobre el cabello limpio y húmedo, distribuyendo del cuero cabelludo a las puntas.</li>
					<li class="WP-normal-text">Deja actuar unos minutos y enjuaga.</li>
				</ul>
			</div>
		</div>
		<div class="block12 extra-sp">
			<div class="WP-parnerproducts-acordion-container" data-accordion="c5">
				<div class="WP-parnerproducts-acordion-button WP-normal-text WP-green-product containerflexwrap c5">
					<div class="block12 flexme">
						<p class="WP-parnerproducts-product-text WP-normal-text">INGREDIENTES</p>
						<img class="WP-parnerproducts-acordion-button-icon" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/3/2025/01/plus_icon_02.svg">
					</div>
					<div class="block12">
						<div class="WP-parnerproducts-acordion-description WP-normal-text c5">
							<ul class="WP-parnerproducts-product-list">
								<li class="WP-normal-text">Keratina.</li>
								<li class="WP-normal-text">Bio extracto de keratina.</li>
								<li class="WP-normal-text">Bio extracto de colágeno.</li>
								<li class="WP-normal-text">Bio extracto de argán.</li>
								<li class="WP-normal-text">Bio extracto de aloe vera.</li>
								<li class="WP-normal-text">Bio extracto de avena.</li>
								<li class="WP-normal-text">Cocoamida propil betaína.</li>
								<li class="WP-normal-text">Glicerina.</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="WP-parnerproducts-product-container containerflexwrap">
		<div class="block05">
			<img class="WP-parnerproducts-product-image" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/partner_products/nutricab-acondicionador-T.png">
		</div>
		<div class="block05">
			<h2 class="WP-parnerproducts-product-title WP-subtitle-text">NutriCab Acondicionador</h2>
			<p class="WP-parnerproducts-product-text WP-normal-text">
				El complemento perfecto para lucir un cabello hermoso y visiblemente sano. Descubre el poder de la nutrición natural con NutriCab. Nuestro acondicionador, con una fórmula exclusiva aprobada por ENZACTA, combina los ingredientes más efectivos que la naturaleza tiene para ofrecer.
			</br></br>
				<b>Contenido neto:</b> 500ml.	
			</p>
			<div class="WP-parnerproducts-product-section margintop40 WP-green-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-green-product">
				BENEFICIOS
				</p>
				<ul class="WP-parnerproducts-product-list">
					<li class="WP-normal-text">Fortalece la raíz.</li>
					<li class="WP-normal-text">Ligereza y frescura.</li>
					<li class="WP-normal-text">Cabello fácil de peinar.</li>
					<li class="WP-normal-text">Protege de daños externos.</li>
				</ul>
			</div>
		</div>
		<div class="block12">
			<div class="WP-parnerproducts-product-section margintop40 WP-green-product">
				<p class="WP-parnerproducts-product-text WP-normal-text WP-no-position-text WP-green-product">				
				INSTRUCCIONES DE USO
				</p>
				<ul class="WP-parnerproducts-product-list WP-numbered-list">
					<li class="WP-normal-text">Después de usar el Shampoo, aplica el NutriCab Acondicionador sobre el cabello limpio y húmedo.</li>
					<li class="WP-normal-text">Distribuye de medios a puntas.</li>
					<li class="WP-normal-text">Deja actuar unos minutos y enjuaga.</li>
				</ul>
			</div>
		</div>
		<div class="block12 extra-sp">
			<div class="WP-parnerproducts-acordion-container" data-accordion="c6">
				<div class="WP-parnerproducts-acordion-button WP-normal-text WP-green-product containerflexwrap c6">
					<div class="block12 flexme">
						<p class="WP-parnerproducts-product-text WP-normal-text">INGREDIENTES</p>
						<img class="WP-parnerproducts-acordion-button-icon" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/3/2025/01/plus_icon_02.svg">
					</div>
					<div class="block12">
						<div class="WP-parnerproducts-acordion-description WP-normal-text c6">
							<ul class="WP-parnerproducts-product-list">
								<li class="WP-normal-text">Bio extracto de menta.</li>
								<li class="WP-normal-text">Bio extracto de argán.</li>
								<li class="WP-normal-text">Mentol.</li>
								<li class="WP-normal-text">Plantasil.</li>
								<li class="WP-normal-text">Fragancia de menta.</li>
								<li class="WP-normal-text">Menta.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="spacer"></div>

</body>
<?php
?>
