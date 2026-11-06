<?php
/**
 * Title: Featured dishes
 * Slug: adepa/featured
 * Categories: adepa
 * Description: Dark editorial section with five asymmetrical dish slots. Dish content is clearly marked placeholder copy until the live menu is published.
 * Keywords: featured, dishes, menu, homepage
 * Viewport Width: 1440
 *
 * @package ADEPA_Food_Hut
 */

?>
 <?php
 $featured_images = array(
 	19 => wp_get_attachment_image_url( 19, 'full' ),
 	22 => wp_get_attachment_image_url( 22, 'full' ),
 	23 => wp_get_attachment_image_url( 23, 'full' ),
 	31 => wp_get_attachment_image_url( 31, 'full' ),
 	32 => wp_get_attachment_image_url( 32, 'full' ),
 );
 ?>
<!-- wp:group {"tagName":"section","align":"full","className":"adepa-featured","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull adepa-featured">
	<!-- wp:group {"className":"adepa-featured__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group adepa-featured__inner">
		<!-- wp:group {"className":"adepa-featured__head adepa-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-featured__head">
			<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
			<p class="adepa-eyebrow">01 — From the kitchen</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"adepa-display-lg"} -->
			<h2 class="wp-block-heading adepa-display-lg">Cooked with<br>confidence.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"adepa-featured__intro"} -->
			<p class="adepa-featured__intro">A short, deliberate menu. African cooking with depth, cooked to order and packed to travel. No filler dishes, no quiet substitutions.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"adepa-dishes adepa-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-dishes">
			<!-- wp:group {"tagName":"article","className":"adepa-dish","layout":{"type":"default"}} -->
			<article class="wp-block-group adepa-dish">
				<!-- wp:group {"className":"adepa-dish__media","layout":{"type":"default"}} -->
				<div class="wp-block-group adepa-dish__media">
					<!-- wp:image {"id":19,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $featured_images[19] ); ?>" alt="Fufu with goat meat" class="wp-image-19"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"adepa-dish__index"} -->
					<p class="adepa-dish__index">01</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"adepa-dish__kicker"} -->
				<p class="adepa-dish__kicker">Signature 01</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"className":"adepa-dish__name"} -->
				<h3 class="wp-block-heading adepa-dish__name">Dish name</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"adepa-dish__desc"} -->
				<p class="adepa-dish__desc">Short description of the dish, its key ingredients and how it is served.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"adepa-dish__meta"} -->
				<p class="adepa-dish__meta"><span class="adepa-dish__price">£—</span><span class="adepa-dish__state">Availability from live menu</span></p>
				<!-- /wp:paragraph -->
			</article>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"article","className":"adepa-dish","layout":{"type":"default"}} -->
			<article class="wp-block-group adepa-dish">
				<!-- wp:group {"className":"adepa-dish__media","layout":{"type":"default"}} -->
				<div class="wp-block-group adepa-dish__media">
					<!-- wp:image {"id":22,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $featured_images[22] ); ?>" alt="Fried yam with fish sauce" class="wp-image-22"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"adepa-dish__index"} -->
					<p class="adepa-dish__index">02</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"adepa-dish__kicker"} -->
				<p class="adepa-dish__kicker">Signature 02</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"className":"adepa-dish__name"} -->
				<h3 class="wp-block-heading adepa-dish__name">Dish name</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"adepa-dish__desc"} -->
				<p class="adepa-dish__desc">Short description of the dish, its key ingredients and how it is served.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"adepa-dish__meta"} -->
				<p class="adepa-dish__meta"><span class="adepa-dish__price">£—</span><span class="adepa-dish__state">Availability from live menu</span></p>
				<!-- /wp:paragraph -->
			</article>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"article","className":"adepa-dish","layout":{"type":"default"}} -->
			<article class="wp-block-group adepa-dish">
				<!-- wp:group {"className":"adepa-dish__media","layout":{"type":"default"}} -->
				<div class="wp-block-group adepa-dish__media">
					<!-- wp:image {"id":23,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $featured_images[23] ); ?>" alt="Amala served with African soup" class="wp-image-23"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"adepa-dish__index"} -->
					<p class="adepa-dish__index">03</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"adepa-dish__kicker"} -->
				<p class="adepa-dish__kicker">Signature 03</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"className":"adepa-dish__name"} -->
				<h3 class="wp-block-heading adepa-dish__name">Dish name</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"adepa-dish__desc"} -->
				<p class="adepa-dish__desc">Short description of the dish, its key ingredients and how it is served.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"adepa-dish__meta"} -->
				<p class="adepa-dish__meta"><span class="adepa-dish__price">£—</span><span class="adepa-dish__state">Availability from live menu</span></p>
				<!-- /wp:paragraph -->
			</article>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"article","className":"adepa-dish adepa-dish--low","layout":{"type":"default"}} -->
			<article class="wp-block-group adepa-dish adepa-dish--low">
				<!-- wp:group {"className":"adepa-dish__media","layout":{"type":"default"}} -->
				<div class="wp-block-group adepa-dish__media">
					<!-- wp:image {"id":31,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $featured_images[31] ); ?>" alt="Ghana Jollof with Grilled Chicken" class="wp-image-31"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"adepa-dish__index"} -->
					<p class="adepa-dish__index">04</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"adepa-dish__kicker"} -->
				<p class="adepa-dish__kicker">Signature 04</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"className":"adepa-dish__name"} -->
				<h3 class="wp-block-heading adepa-dish__name">Ghana Jollof with Grilled Chicken</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"adepa-dish__desc"} -->
				<p class="adepa-dish__desc">Details to be confirmed from the live menu.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"adepa-dish__meta"} -->
				<p class="adepa-dish__meta"><span class="adepa-dish__price">£—</span><span class="adepa-dish__state">Availability from live menu</span></p>
				<!-- /wp:paragraph -->
			</article>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"article","className":"adepa-dish adepa-dish--high","layout":{"type":"default"}} -->
			<article class="wp-block-group adepa-dish adepa-dish--high">
				<!-- wp:group {"className":"adepa-dish__media","layout":{"type":"default"}} -->
				<div class="wp-block-group adepa-dish__media">
					<!-- wp:image {"id":32,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $featured_images[32] ); ?>" alt="Waakye with Shito and Protein" class="wp-image-32"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"adepa-dish__index"} -->
					<p class="adepa-dish__index">05</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"adepa-dish__kicker"} -->
				<p class="adepa-dish__kicker">Signature 05</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"className":"adepa-dish__name"} -->
				<h3 class="wp-block-heading adepa-dish__name">Waakye with Shito and Protein</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"adepa-dish__desc"} -->
				<p class="adepa-dish__desc">Details to be confirmed from the live menu.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"adepa-dish__meta"} -->
				<p class="adepa-dish__meta"><span class="adepa-dish__price">£—</span><span class="adepa-dish__state">Availability from live menu</span></p>
				<!-- /wp:paragraph -->
			</article>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"adepa-featured__foot","layout":{"type":"default"}} -->
		<div class="wp-block-group adepa-featured__foot">
			<!-- wp:paragraph {"className":"adepa-note adepa-note--dark"} -->
			<p class="adepa-note adepa-note--dark">Menu preview. Dish names, descriptions and prices are placeholders until the ADEPA menu is published. Availability will come from the live menu.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"adepa-textlink"} -->
			<p class="adepa-textlink"><a href="/menu">Open the full menu</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
