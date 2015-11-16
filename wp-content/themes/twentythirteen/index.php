<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header ();
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/autoscroller.js"></script>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="subcontent">

			<h1>
				<span class="block">&nbsp;</span>PT. Yuri Alam Eksport
			</h1>
			<div class="pictures">
				<div class="scroll">
					<ul>
						<li><img
							src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Pict11 copy.jpg"
							width="600" height="280" /></li>
						<li><img
							src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Pict21 copy.jpg"
							width="600" height="280" /></li>
						<li><img
							src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Pict22 copy.jpg"
							width="600" height="280" /></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="subcontent2">
			<h1>
				<span class="blockinverse">&nbsp;</span>Our Products
			</h1>

		</div>
		<div class="subcontent3">
		<?php  if ( have_posts() ) :  ?>

			<?php /* The loop */ ?>
			<?php  while ( have_posts() ) : the_post();  ?>
				<?php get_template_part( 'content', get_post_format() );  ?>
			<?php  endwhile;  ?>

			<?php  twentythirteen_paging_nav();  ?>

		<?php  else :  ?>
			<?php  get_template_part( 'content', 'none' ); ?>
		<?php  endif;  ?>
		</div>


	</div>
	<!-- #content -->
</div>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
