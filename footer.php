 <footer id="footer">
 
 		<?php if ( is_active_sidebar( 'home_footer' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'home_footer' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
						
						<ul class="copyright">
							<li>&copy; <?php bloginfo( 'name' ) ?></li>
						</ul>
					</footer>

			</div>

<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/skel.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
</body>
</html>