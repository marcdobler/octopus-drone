<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
		</div><!-- .col-full -->
	</div><!-- #content -->
	<?php do_action( 'storefront_before_footer' ); ?>
	<footer id="colophon" class="site-footer">
		<div class="col-full">
			<?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->
	<?php do_action( 'storefront_after_footer' ); ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
