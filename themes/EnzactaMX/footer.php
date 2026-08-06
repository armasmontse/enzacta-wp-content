<?php
/**
* The template for displaying the footer
*
* Contains footer content and the closing of the #main and #page div elements.
*
* @package WordPress
* @subpackage Thementic
* @since Thementic 1.0
*/
?>
<?php tmpoption_content_after(); ?>
</div>
<!-- .main-content-inner -->
</div>
<!-- .main_inner -->
</div>
<!-- #main -->
<?php tmpoption_footer_before(); ?>
<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="footer-top">
			<div class="theme-container">
					<?php if ( is_active_sidebar( 'footer-top-widget-area') ) : ?>
					<?php dynamic_sidebar( 'footer-top-widget-area') ; ?>
					<?php endif; ?>
			</div>	
	    </div>

		<div class="footer-center">
			<div class="theme-container">
				<?php tmpoption_footer_inside(); ?>
			    <?php get_sidebar('footer'); ?>
			</div>	
	    </div>

	    
		<?php if ( is_dynamic_sidebar( 'footer-bottom-widget-area') ) : ?>
		<div class="footer-bottom">	
			          <div class="theme-container">
			           <!-- footer-menu-links start-->	
					    <?php dynamic_sidebar( 'footer-bottom-widget-area' ); ?>
					    <?php if ( has_nav_menu('footer-menu') ) { ?>    
						<div class="footer-bottom-links">
						<?php
							$tmpoption_footer_menu=array(
							'menu' => esc_html__('TM Footer Navigation','clinical'),
							'depth'=> 1,
							'echo' => false,
							'menu_class'      => 'footer-menu', 
							'container'       => '', 
							'container_class' => '', 
							'theme_location' => 'footer-menu'
							);
							echo wp_nav_menu($tmpoption_footer_menu);				    
							?>
						</div>
						<?php } ?> 
					 <!-- footer-menu-links end-->	
					</div>

			<!-- ENZACTA SOCIAL MEDIA CODE - S T A R T -->
			<div class="ENZ-bottom-footer-p2-title" style="padding: 30px 0px 20px 0px;">
				<p style="margin-bottom: 0px;color: #404040;font-weight: 600;">REDES SOCIALES</p>
			</div>
			<div class="ENZ-SM-footer-div-container" style="margin: auto;max-width: 200px;padding: 0px 0px 30px 0px;">
				<div class="ENZ-SM-footer-container" style="width: 33.3333%;">
					<div class="ENZ-SM-footer-button-container">
						<a href="https://www.facebook.com/enzactalatinoamericayespana" target="blank">
							<div class="ENZ-SM-fbk-i-hovpre">					</div>
							<div class="ENZ-SM-fbk-i"></div>
						</a>
					</div>
				</div>
				<div class="ENZ-SM-footer-container" style="width: 33.3333%;">
					<div class="ENZ-SM-footer-button-container">
						<a href="https://www.instagram.com/enzactalasp/" target="blank">
							<div class="ENZ-SM-itg-i-hovpre">	</div>
							<div class="ENZ-SM-itg-i"></div>
						</a>
					</div>
				</div>
				<div class="ENZ-SM-footer-container" style="width: 33.3333%;">
					<div class="ENZ-SM-footer-button-container">
						<a href="https://www.youtube.com/channel/UCQ2kWC_9WIUsJiAfzPA3ZqA" target="blank">
							<div class="ENZ-SM-ytb-i-hovpre">	</div>
							<div class="ENZ-SM-ytb-i"></div>
						</a>
					</div>
				</div>
			</div>
			<!-- ENZACTA SOCIAL MEDIA CODE - END -->
		
			<!-- ENZACTA MKT FOOTER CODE - S T A R T -->
			
			
					<div class="ENZ-bottom-footer">
						
						<div class="ENZ-bottom-footer-p1">
							<div class="ENZ-bottom-footer-links" style="display: flex;flex-wrap: wrap;justify-content: center;">
								<a href="<?php echo DOMAIN_SUB_SITE;?>/mx/aviso-privacidad" target="blank" class="ENZ-bottom-footer-pp" style="color: #299973!important;font-size: 16px;">Aviso de Privacidad</a>
							</div>

							<p class="ENZ-bottom-footer-company">Copyright © <?php echo date("Y");?> ENZACTA, S. de R. L. de C. V..</p>
							<p class="ENZ-bottom-footer-address">Insurgentes Sur No. 885, Piso Mezanine, Col. Nápoles, Alcaldía Benito Juárez, C.P. 03810, Ciudad de México. Teléfonos: (55) 1087-8561, WhatsApp-Zac: (55) 2315-5770, e-mail servicioalcliente@enzacta.net</p>
						</div>
						
						<div class="ENZ-bottom-footer-p2">
							
							<div class="ENZ-bottom-footer-p2-title">
								<p><?php echo get_enzacta_custom_lang('ENZACTA_LANG_TRUSTED_CERTIFICATES_WENZ_1313'); ?></p>
							</div>
							
							<div class="ENZ-bottom-footer-cert-1">
							<a href="https://seal.godaddy.com/verifySeal?sealID=21302870220499fa81c1271165f16689a17e4d00547832559334422006" target="_blank"><img class="ENZ-bottom-footer-cert-img1" src="https://enzactamedia.enzacta.com/ewp/sites/2/2021/03/godaddy.png" alt="Godaddy Certified"></a>
							</div>
						<!--
							<div class="ENZ-bottom-footer-cert-1">
								<a href="https://www.dsa.org/forms/CompanyFormPublicMembers/view?id=618DC00000035" target="_blank"><img class="ENZ-bottom-footer-cert-img2" src="https://enzactamedia.enzacta.com/ewp/sites/2/2021/03/dsa.png" alt="DSA Member"></a>
							</div>
								-->
							<div class="ENZ-bottom-footer-cert-1">
								<a href="<?php echo DOMAIN_SUB_SITE;?>/mx/certificado-amvd/" target="_blank"><img class="ENZ-bottom-footer-cert-img3" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/images/LogoRecognition2026_ENZACTA.png" alt="Certificado AMVD 2026"></a>
							</div>
						
							<div class="ENZ-bottom-footer-cert-1">
							<a href="https://amvd.org.mx/" target="_blank"><img class="ENZ-bottom-footer-cert-img2" src="https://enzactamedia.enzacta.com/prod/Customer/images/MX/New-AMVD-Vertical.png" alt="AMVD"></a>
							</div>
						
							<div class="ENZ-bottom-footer-cert-1">
						<a href="https://sellosdeconfianza.org.mx/MuestraCertificado.php?NUMERO_SERIE=MD_w200" target="_blank"><img class="ENZ-bottom-footer-cert-img1" src="https://enzactamedia.enzacta.com/prod/Customer/images/MX/new_amipci.jpg" alt="Internet MX"></a>
							</div>
			
						</div>
					</div>
			
			
			<!-- ENZACTA MKT FOOTER CODE - E N D -->
          </div>
	  <?php endif; ?>
</footer>
<!-- #colophon -->
<?php tmpoption_footer_after(); ?>
</div>
<!-- #page -->
<?php tmpoption_go_top(); ?>
<?php tmpoption_get_widget('before-end-body-widget'); ?>
<?php wp_footer(); ?>
</body>
</html>
