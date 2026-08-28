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
		
			<!-- ENZACTA MKT FOOTER CODE - S T A R T -->
			<?php 
			
			$myurlend = explode('/', $_SERVER['REQUEST_URI']);
			$cantidadsecciones = count($myurlend);
			$cantidadsecciones -=1;
			$urlending = $myurlend[$cantidadsecciones];
			
			if($urlending == "?lang=en")
			{
				$completemysection = $urlending;
			}
			else{
				$completemysection = "";
			}

			global $sitepress;
			$current_language = $sitepress->get_current_language();
			
			if ($current_language == "ko") {
				$average_income_link = "https://enzactamedia.enzacta.com/ewp/kr/Average_Sponsorship_Commission_Disclosure_KR_20260824.pdf";
				$policies_and_procedure_link = "https://enzactamedia.enzacta.com/ewp/kr/KO_KR_PoliciesProcedures_260417.pdf";
				$policies_return_link = "https://enzactamedia.enzacta.com/ewp/kr/Return_Policies-KR-20250618.pdf";
			} elseif ($current_language == "en") {
				$average_income_link = "https://enzactamedia.enzacta.com/ewp/kr/Average_Sponsorship_Commission_Disclosure_EN_20260824.pdf";
				$policies_and_procedure_link = "https://enzactamedia.enzacta.com/ewp/kr/KO_EN_PoliciesProcedures_260417.pdf";
				$policies_return_link = "https://enzactamedia.enzacta.com/ewp/kr/Return_Policies-EN-20250618.pdf";
			} else {
				$average_income_link = "https://enzactamedia.enzacta.com/ewp/kr/Average_Sponsorship_Commission_Disclosure_KR_20260824.pdf";
				$policies_and_procedure_link = "https://enzactamedia.enzacta.com/ewp/kr/KO_KR_PoliciesProcedures_260417.pdf";
				$policies_return_link = "https://enzactamedia.enzacta.com/ewp/kr/Return_Policies-KR-20250618.pdf";
			}
			
			?>
				<div class="ENZ-bottom-footer">
					<div class="ENZ-bottom-footer-p1">
						<div class="ENZ-bottom-footer-KRlinks">
							<?php if(!is_user_logged_in()){ ?> 
						     <a onclick="return memberEnquiry();" target="blank" class="ENZ-bottom-footer-pp" style="color: #299973!important;"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_MEMBER_ENQUIRY_WENZ_577');?></a> 
							<?php } ?>
							<a href="<?php echo $policies_and_procedure_link ;?>" target="blank" class="ENZ-bottom-footer-pp" style="color: #299973!important;"><?php echo __( "방침과 절차", 'theme-footer' );?></a>
							<a href="<?php echo DOMAIN_SUB_SITE;?>/kr/privacy-policy-page/<?php echo $completemysection;?>" class="ENZ-bottom-footer-pp" style="color: #299973!important;"><?php echo __( "개인정보처리방침", 'theme-footer' );?></a>
							<a href="<?php echo DOMAIN_SUB_SITE;?>/kr/terms-of-use/<?php echo $completemysection;?>" class="ENZ-bottom-footer-pp" style="color: #299973!important;"><?php echo __( "이용약관", 'theme-footer' );?></a>
							<a href="<?php echo DOMAIN_SUB_SITE;?>/kr/door-to-door-sales/<?php echo $completemysection;?>" class="ENZ-bottom-footer-pp" style="color: #299973!important;"><?php echo __( "방문판매 등에 관한 법률", 'theme-footer' );?></a>
							<a href="<?php echo $policies_return_link ;?>" target="blank" class="ENZ-bottom-footer-pp" style="color: #299973!important;"><?php echo __( "청약철회정책", 'theme-footer' );?></a>

							<a href="<?php echo DOMAIN_SUB_SITE;?>/kr/email-unauthorized-collection/<?php echo $completemysection;?>" class="ENZ-bottom-footer-pp" style="color: #299973!important;"><?php echo __( "이메일 무단수집거부", 'theme-footer' );?></a>
							
							<a href="<?php echo $average_income_link ;?>" target="blank" class="ENZ-bottom-footer-disclosure" style="color: #299973!important;"><?php echo __( "평균후원수당 공지", 'theme-footer' );?></a>

						</div>	
						<br>
						<div class="ENZ-bottom-footer-address">
							<p class="ENZ-bottom-footer-company">© <?php echo date("Y");?> <?php echo __( "주식회사 엔잭타", 'theme-footer' );?></p><br>
							<?php echo get_enzacta_custom_lang('ENZACTA_LANG_FOOTER_ADDRESS_WENZ_1037');?><br>
							<!-- <?php echo __( "사업자등록번호: 220-87-30230 통신판매신고번호: 2015-서울강남-02654", 'theme-footer' );?><br><br> -->
							<?php echo __( "<b>Tel:</b> 02.565.4011 &nbsp;&nbsp;&nbsp;<b>Fax:</b> 02.565.4038 &nbsp;&nbsp;&nbsp;<b>Email:</b> enzactakorea@enzacta.co.kr", 'theme-footer' );?><br>
							<!--<?php echo __( "주식회사 엔잭타 대표이사 러셀에드워드홀.", 'theme-footer' );?> </p>-->
							<?php echo get_enzacta_custom_lang('ENZACTA_LANG_FOOTER_BUSINESS_REGISTRATION_WENZ_1037');?><br>
							<?php echo get_enzacta_custom_lang('ENZACTA_LANG_FOOTER_COMMUNICATION_SALES_BR_WENZ_1037');?><br>
							<?php echo get_enzacta_custom_lang('ENZACTA_LANG_FOOTER_REPRESENTATIVE_NAME_WENZ_1037');?><br>
						</div>
						  

					  </div>
					  <!--<div class="ENZ-bottom-footer-p2">
						<div class="ENZ-bottom-footer-p2-title">
						  <p><?php echo __( "Trusted Certificates", 'theme-footer' );?></p>
						</div>
						<div class="ENZ-bottom-footer-cert-1"> <a href="http://www.mlmunion.or.kr/" target="blank"><img class="ENZ-bottom-footer-cert-img1" src="https://enzactamedia.enzacta.com/ewp/sites/4/2021/04/01-mlm_union_website.jpg" height="40" alt="MLM Union Website"></a> </div>
						<div class="ENZ-bottom-footer-cert-2"> <a href="http://www.ftc.go.kr/" target="blank"><img class="ENZ-bottom-footer-cert-img2" src="https://enzactamedia.enzacta.com/ewp/sites/4/2021/04/02-fair_trade_commission.gif" height="40" alt="Fair Trade Commission"></a> </div>
						<div class="ENZ-bottom-footer-cert-3"> <a href="http://www.seoul.go.kr/" target="blank"><img class="ENZ-bottom-footer-cert-img3" src="https://enzactamedia.enzacta.com/ewp/sites/4/2021/04/04-HI_seoul.gif" height="40" alt="Hi Seoul"></a> </div>
					  </div>-->
					  <div class="ENZ-bottom-footer-p2" style="min-height: 140px !important;">
						<p style="padding-bottom: 24px;"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_SOCIAL_MEDIA_FOOTER_TITLE_576');?></p>
						<div class="ENZ-SM-footer-div-container">
							<div class="ENZ-SM-footer-container">
								<div class="ENZ-SM-footer-button-container">
									<a href="https://blog.naver.com/enzacta_korea" target="blank">
										<div class="ENZ-SM-nvr-i-hovpre"></div><div class="ENZ-SM-nvr-i">
										</div>
									</a>
								</div>
							</div>
							<div class="ENZ-SM-footer-container">
								<div class="ENZ-SM-footer-button-container">
									<a href="https://pf.kakao.com/_yWAYxb" target="blank">
										<div class="ENZ-SM-kko-i-hovpre">
										</div>
										<div class="ENZ-SM-kko-i">
										</div>
									</a>
								</div>
							</div>
							<div class="ENZ-SM-footer-container">
								<div class="ENZ-SM-footer-button-container">
									<a href="https://www.youtube.com/c/ENZACTAKorea" target="blank">
										<div class="ENZ-SM-ytb-i-hovpre">
										</div>
										<div class="ENZ-SM-ytb-i">
										</div>
									</a>
								</div>
							</div>
							<div class="ENZ-SM-footer-container">
								<div class="ENZ-SM-footer-button-container">
									<a href="https://www.instagram.com/enzactakorea/" target="blank">
										<div class="ENZ-SM-itg-i-hovpre"></div>
										<div class="ENZ-SM-itg-i"></div>
									</a>
								</div>
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
