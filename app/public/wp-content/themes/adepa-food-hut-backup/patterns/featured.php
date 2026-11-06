<?php
/**
 * Title: Featured dishes
 * Slug: adepa/featured
 * Categories: adepa
 * Description: Dark editorial section with three asymmetrical dish slots. Dish content is clearly marked placeholder copy until the live menu is published.
 * Keywords: featured, dishes, menu, homepage
 * Viewport Width: 1440
 *
 * @package ADEPA_Food_Hut
 */

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
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-dish-01.svg' ) ); ?>" alt="Temporary dish image placeholder — replace with approved ADEPA food photography"/></figure>
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
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-dish-02.svg' ) ); ?>" alt="Temporary dish image placeholder — replace with approved ADEPA food photography"/></figure>
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
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-dish-03.svg' ) ); ?>" alt="Temporary dish image placeholder — replace with approved ADEPA food photography"/></figure>
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
