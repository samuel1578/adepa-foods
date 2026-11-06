<?php
/**
 * Title: Delivery information
 * Slug: adepa/delivery
 * Categories: adepa
 * Description: Delivery areas, manual confirmation process and the no-collection rule.
 * Keywords: delivery, areas, milton keynes, northampton
 * Viewport Width: 1440
 *
 * @package ADEPA_Food_Hut
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"adepa-delivery","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull adepa-delivery">
	<!-- wp:group {"className":"adepa-delivery__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group adepa-delivery__inner">
		<!-- wp:group {"className":"adepa-delivery__head adepa-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-delivery__head">
			<!-- wp:group {"className":"adepa-delivery__title","layout":{"type":"default"}} -->
			<div class="wp-block-group adepa-delivery__title">
				<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
				<p class="adepa-eyebrow">04 — Delivery</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"className":"adepa-display-lg"} -->
				<h2 class="wp-block-heading adepa-display-lg"><span class="adepa-motion-line">Milton Keynes.</span><br><span class="adepa-motion-line">Northampton.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"className":"adepa-delivery__lead"} -->
			<p class="adepa-delivery__lead">These are ADEPA's intended delivery areas. Coverage is not automatic: every address is checked by our team before an order is accepted, and the delivery charge is confirmed at the same time.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"adepa-areas adepa-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-areas">
			<!-- wp:group {"className":"adepa-area","layout":{"type":"default"}} -->
			<div class="wp-block-group adepa-area">
				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"adepa-area__name"} -->
					<p class="adepa-area__name">Milton Keynes</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"adepa-area__meta"} -->
					<p class="adepa-area__meta">Intended delivery area · subject to confirmation</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"adepa-area__map"} -->
				<figure class="wp-block-image size-full adepa-area__map"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/maps/map-milton-keynes.svg' ) ); ?>" alt="Milton Keynes delivery coverage map showing grid roads and central delivery hub"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"adepa-area","layout":{"type":"default"}} -->
			<div class="wp-block-group adepa-area">
				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"adepa-area__name"} -->
					<p class="adepa-area__name">Northampton</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"adepa-area__meta"} -->
					<p class="adepa-area__meta">Intended delivery area · subject to confirmation</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"adepa-area__map"} -->
				<figure class="wp-block-image size-full adepa-area__map"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/maps/map-northampton.svg' ) ); ?>" alt="Northampton delivery coverage map showing River Nene corridor and town centre delivery hub"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"adepa-steps","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-steps">
			<!-- wp:group {"className":"adepa-step","layout":{"type":"default"}} -->
			<div class="wp-block-group adepa-step">
				<!-- wp:paragraph {"className":"adepa-step__num"} -->
				<p class="adepa-step__num">01</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Send your order</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Choose your dishes and add your delivery address during published operating hours.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"adepa-step","layout":{"type":"default"}} -->
			<div class="wp-block-group adepa-step">
				<!-- wp:paragraph {"className":"adepa-step__num"} -->
				<p class="adepa-step__num">02</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">We confirm</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Our team checks the address, confirms the delivery charge and accepts or declines the order.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"adepa-step","layout":{"type":"default"}} -->
			<div class="wp-block-group adepa-step">
				<!-- wp:paragraph {"className":"adepa-step__num"} -->
				<p class="adepa-step__num">03</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">The kitchen cooks</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Once accepted, the kitchen prepares your order and sends it out. Our team confirms its status with you.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"adepa-notice","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-notice">
			<!-- wp:paragraph {"className":"adepa-notice__label"} -->
			<p class="adepa-notice__label">Please note</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"adepa-notice__text"} -->
			<p class="adepa-notice__text">Submitting an order is a request, not a confirmation. Nothing is accepted until our team confirms it. We do not promise delivery times, live driver tracking or automatic delivery pricing.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"adepa-textlink adepa-notice__link"} -->
			<p class="adepa-textlink adepa-notice__link"><a href="/delivery">Read how delivery works</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
