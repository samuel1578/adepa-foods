<?php
/**
 * Hero pattern for ADEPA Food Hut homepage.
 *
 * This pattern has been updated to support three hero images with automatic rotation.
 * Images are managed through WordPress Media Library and can be individually replaced
 * by the site owner without editing code.
 *
 * @package ADEPA_Food_Hut
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"adepa-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull adepa-hero">
	<!-- wp:group {"className":"adepa-hero__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group adepa-hero__grid">
		<!-- wp:group {"className":"adepa-hero__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-hero__copy">
			<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
			<p class="adepa-eyebrow">African kitchen — Milton Keynes &amp; Northampton</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"adepa-hero__title"} -->
			<h1 class="wp-block-heading adepa-hero__title">Bold African flavour,<em>delivered.</em></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"adepa-hero__lead"} -->
			<p class="adepa-hero__lead">ADEPA Food Hut is a delivery kitchen. One menu, cooked to order and sent to your door across Milton Keynes and Northampton.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"adepa-actions"} -->
			<div class="wp-block-buttons adepa-actions">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/menu">View the menu</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"adepa-btn--ghost"} -->
				<div class="wp-block-button adepa-btn--ghost"><a class="wp-block-button__link wp-element-button" href="/delivery">How delivery works</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"className":"adepa-hero__note"} -->
			<p class="adepa-hero__note">Delivery only. Every address and delivery charge is confirmed by our team, and ordering is subject to operating hours.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"adepa-hero__media","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-hero__media">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"adepa-hero__image adepa-hero__image--active"} -->
			<figure class="wp-block-image size-full adepa-hero__image adepa-hero__image--active"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="Fufu served with two bowls of rich African soup and stew on a white plate"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"adepa-hero__image"} -->
			<figure class="wp-block-image size-full adepa-hero__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-dish-02.svg' ) ); ?>" alt="Secondary hero image"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"adepa-hero__image"} -->
			<figure class="wp-block-image size-full adepa-hero__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-dish-03.svg' ) ); ?>" alt="Tertiary hero image"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"adepa-caption"} -->
			<p class="adepa-caption">Fufu, soup and stew — a taste of home.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<span class="adepa-stamp" aria-hidden="true">Delivery only<br>MK · NN</span>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"adepa-ticker","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull adepa-ticker">
		<!-- wp:paragraph {"className":"adepa-ticker__row"} -->
		<p class="adepa-ticker__row"><span>Delivery only</span><span>Milton Keynes</span><span>Northampton</span><span>Orders confirmed by our team</span><span>Subject to operating hours</span></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->