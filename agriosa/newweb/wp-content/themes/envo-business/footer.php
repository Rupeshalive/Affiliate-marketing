</div><!-- end main-container -->
</div><!-- end page-area -->
<?php if ( is_active_sidebar( 'envo-business-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="container-fluid clearfix">
		<div class="container">
			<?php dynamic_sidebar( 'envo-business-footer-area' ) ?>
		</div>	
	</div>		
<?php } ?>
<?php do_action( 'envo_business_before_footer' ); ?> 
<footer id="colophon" class="footer-credits container-fluid">
	<div class="container">
		<p><center>© Copyright 2020. All rights reserved By Agriosa</center></p>
	</div>	
</footer>
<?php do_action( 'envo_business_after_footer' ); ?> 
<?php wp_footer(); ?>

</body>
</html>
