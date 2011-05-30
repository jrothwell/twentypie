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
				<p><a href="http://wordpress.org/" rel="generator" title="Proudly powered by WordPress"><img src="http://notroswell.com/wp-content/themes/twentypie/images/w.png" alt="WordPress"/></a> <img src="http://notroswell.com/wp-content/themes/twentypie/images/plus.png" alt="+" /> <a href="http://nearlyfreespeech.net" title="Hosted at NearlyFreeSpeech.Net"><img src="http://notroswell.com/wp-content/themes/twentypie/images/n.png" title="NearlyFreeSpeech.NET" /></a> <img src="http://notroswell.com/wp-content/themes/twentypie/images/eq.png" alt="equals" /> <img src="http://notroswell.com/wp-content/themes/twentypie/images/heart.png" alt="Unadulterated pure brilliance" /></p>
				<p>&copy; 1992&mdash;2011 Jonathan Rothwell.<span class="sep"> | </span><a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img src="http://notroswell.com/wp-content/themes/twentypie/images/cc-by-nc.png" alt="CC-BY-SA" title="Licenced under CC-BY-NC 3.0" /></a></p>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>