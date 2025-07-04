<?php if ( themify_is_woocommerce_active() && themify_theme_show_area( 'cart_icon' ) ) :?>
	<div class="cart-icon">
		<div class="cart-wrap">
			<a class="cart-icon-link" href="<?php echo themify_show_slide_cart()?'#slide-cart':wc_get_cart_url(); ?>">
				<em class="icon-shopping-cart">
					<?php 
					echo themify_get_icon(themify_get('setting-ic-cart','fas shopping-cart',true),false,false,false,array('aria-label'=>__('Shop Cart','themify'))); ?>
				</em>
				<span></span>
                <em class="screen-reader-text"><?php _e( 'Cart', 'themify' ); ?></em>
			</a>
		<!-- /.cart-wrap -->
		</div>
	</div>
<?php endif;
