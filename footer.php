<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<a href="http://wordpress.org/" rel="generator" title="Proudly powered by WordPress"><img src="images/w.png" alt="WordPress"/></a> <img src="images/plus.png" alt="+" /> <a href="http://nearlyfreespeech.net" title="Hosted at NearlyFreeSpeech.Net"><img src="images/n.png" title="NearlyFreeSpeech.NET" /></a> <img src="images/eq.png" alt="equals" /> <img src="images/heart.png" alt="Unadulterated pure brilliance" />
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>