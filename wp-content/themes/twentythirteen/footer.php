<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="https://www.facebook.com/theodorusyoga" title="Created by PT. Yuri Alam Eksport"><?php printf('Copyright &copy; 2015 %s', 'PT. Yuri Alam Eksport' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>