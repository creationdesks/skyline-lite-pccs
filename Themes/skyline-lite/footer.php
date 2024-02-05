<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>
	<div class="container-fluid footer-kb" style="background-color: #F2F2F2; padding: 100px 366.5px; background-position: top left; margin-left: -366.5px; margin-right: -366.5px; border-left: 0px; border-right: 0px;background-size:cover;background-repeat:no-repeat;" data-stretch-type="full" data-hasbg="hasbg" data-overlay="true" data-overlay-color="#ffffff">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="kb-bgdesc">
						<p style="text-align:center;"></p>
						<a href="#"><img src="/wp-content/uploads/2018/06/logo-bw2.png" alt="" width="336" height="32" class="aligncenter size-full" /></a><p></p>
						<p class="footer-text">PCCS Group Limited</p>
						<div class="add-bar-footer">
							<div class="row">
								<div class="col-md-12">
									<p class="footer-text">The Pyramid, Brixworth Technology Park, Quarry Road, Brixworth, <br/>Northamptonshire, NN6 9UB.</p>
								</div>
							</div>
						</div>
						<div class="add-bar-footer">
							<div class="row">
								<div class="col-md-4">
									<p class="footer-text"><i class="fa fa-phone" aria-hidden="true"></i> 01604 968938</p>
								</div>
								<div class="col-md-4">
									<p class="footer-text"><i class="fa fa-edge" aria-hidden="true"></i> www.skylinelite.co.uk</p>
								</div>
								<div class="col-md-4">
									<p class="footer-text"><i class="fa fa-envelope" aria-hidden="true"></i> contact@pccsuk.com</p>
								</div>
							</div>
						</div>
						<hr class="footer-div">
						<div class="social-icons">
							<a href="https://www.facebook.com/skylinelite" target="_blank">
								<span class="fa fa-facebook"></span>
							</a>
							<a href="https://twitter.com/SoftwareSkyline" class="" target="_blank">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="" class="" target="_blank">
								<span class="fa fa-linkedin"></span>
							</a>
							<a href="" target="_blank">
								<span class="fa fa-google-plus"></span>
							</a>
						</div>
					</div>
					<div class="qmsuk-badge">
							<div class="qmsuk-badge-img-container">
								<img src="/wp-content/uploads/2018/09/certificate.png" alt="ISO 27001 certified" class="aligncenter">
							</div>
					</div>
					<div class="qmsuk-badge-text-container">
								<span><a href="/iso-27001-registration-2/" target="_blank">ISO 27001 Cert. No. 295272018</a></span> |
								<span><a href="/iso-27001-registration-2/" target="_blank">View our certificate</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
    <a class="go-top"><i class="fa fa-angle-up"></i></a>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div id="copy-right" style="text-align: center;margin-top:10px;">
				Copyright © 2021 <a href="#" title="skyline Lite">Skyline Lite</a>.
				<span class="sep"> | </span>
				Powered by <a href="#" target="_blank">Skyline Microsites </a><img class="alignnone wp-image-84" src="/wp-content/uploads/2018/06/microsites-website-design-copyright.png" alt="microsites-website-design-copyright" width="10" height="10"></a> 2021
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>