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
<script type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript"
	src="<?php echo esc_url(get_template_directory_uri()); ?>/js/autoscroller.js"></script>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="subcontent">
			<div>
				<h1>
					<span class="block">&nbsp;</span>PT. Yuri Alam Eksport
				</h1>
				<p>Enjoy our Indonesian natural products. Put here all of your
					description...</p>
			</div>
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
		<div class="subcontent2" id="products">
			<h1 class="english">
				<span class="blockinverse">&nbsp;</span>Our Products
			</h1>
			<h1 class="japanese">
				<span class="blockinverse">&nbsp;</span>当社の製品
			</h1>
			<div class="home-categories">
			<?php 
				$show_categories = do_shortcode( '[show_categories]' );
				if ( !empty( $show_categories ) ) {
					//do_action( 'before_category_subcategories' );
					echo $show_categories;
				}
			?>
			</div>
			</div>
		<div class="subcontent nonheading" id="aboutus">
			<h1 class="englishtitle">
				<span class="block">&nbsp;</span>About Us
			</h1>
			<h1 class="japanesetitle">
				<span class="block">&nbsp;</span>私達に関して
			</h1>
			<h3 class="english">Koichi Suzuki had been lived and worked
				international trading business in Brisbane, Australia since 1984
				after he left Japan. He and his wife Wenny Octafia has built PT Yuri
				Alam Eksport purpose to export Indonesian natural materials when
				they moved to Yogyakarta Indonesia in 2012. Owner is Japanese and
				Indonesia so that their aim to work for Japanese customer which work
				with customer's view, feeling, imagination by standing Japanese eye
				and also Indonesian native activity. Such as marketing new products,
				develop and supervise production, inspection and delivery management
				beside their export products. Anybody who is looking for products
				export and import Indonesia we are willing to support your business.
			</h3>
			<h3 class="japanese">沿革 PT Yuri Alam
				Eksportは長年海外(Australia1984年永住)在住し貿易業務を行ってきた鈴木幸一と妻のWenny
				Octafiaがインドネシアのジョグジャ（Yogyakarta)に２０１０年に移住し２０１２年から設立した現地法人です。インドネシアの自然産品を輸出することを主に営業致しています。
				現地にいてお客様の目となり手足となって商品の開拓、生産、検品出荷の管理の役目を持ちながら独自の商品開発輸出供給を行っています。
				長年培ってきました経験と取引先人間関係を生かして、ご希望の商品開発、生産者を見いだす事、独自商品を製作される事、新たな客先を開拓する事や独自に進出される方への業界に詳しい方や経験者との橋渡し等お手伝いして協力関係を構築していき、インドネシアとの輸出、輸入をお試みのお客様に役立ち共に発展できますことを祈念致しております。
			</h3>
		</div>
		<div class="subcontent2" id="contactus">
			<h1 class="english">
				<span class="blockinverse">&nbsp;</span>Contact Us
			</h1>
			<h1 class="japanese">
				<span class="blockinverse">&nbsp;</span>お問い合わせ
			</h1>
			<div class="contactlist">
				<h3>
					<span class="glyphicon glyphicon-envelope">&nbsp;</span>
					kenyurisuzuki@gmail.com
				</h3>
				<h3>
					<span class="glyphicon glyphicon-earphone">&nbsp;</span> +62 274
					625584, +62 81 392 463 938
				</h3>
				<h3>
					<span class="glyphicon glyphicon-home">&nbsp;</span> #129 Nandan
					Griya Idaman, Sleman, Yogyakarta 55581 Indonesia
				</h3>
			</div>
		</div>


	</div>
	<!-- #content -->
</div>
<!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>

<div class="switchalert"></div>
<div class="extrafooter">
	<button class="footerbtn">
		<span class="glyphicon glyphicon-chevron-up">&nbsp;</span>Top
	</button>
</div>