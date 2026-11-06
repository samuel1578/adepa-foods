<?php
/**
 * Starter pages for the public navigation.
 *
 * These pages make the primary navigation resolve to distinct URLs, as required
 * by the PRD. Copy is deliberately limited to confirmed information and clearly
 * labelled development placeholders. Existing pages are never overwritten.
 *
 * @package ADEPA_Food_Hut
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Build the starter page definitions.
 *
 * @return array<string, array{title: string, content: string}>
 */
function adepa_starter_pages() {
	$pages = array(
		'menu'       => array(
			'title'   => 'Menu',
			'content' => <<<'HTML'
<!-- wp:paragraph {"className":"adepa-lead"} -->
<p class="adepa-lead">The live menu — every dish, price and current availability — will be published here from the kitchen's menu system.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"adepa-empty-state","layout":{"type":"default"}} -->
<div class="wp-block-group adepa-empty-state">
<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
<p class="adepa-eyebrow">Menu in preparation</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">This menu is not published yet.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>No dishes or prices have been invented for this build. Once the ADEPA menu is live, this page will list every dish with its description, price and availability. Sold-out dishes will stay visible, clearly labelled and unavailable to order.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>The menu stays open to browse when ordering is closed. New orders are accepted only during published operating hours.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
HTML,
		),
		'about'      => array(
			'title'   => 'About',
			'content' => <<<'HTML'
<!-- wp:paragraph {"className":"adepa-lead"} -->
<p class="adepa-lead">ADEPA Food Hut is a delivery kitchen cooking bold African food for Milton Keynes and Northampton.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">One kitchen, one standard.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>ADEPA is built around a simple idea: food should arrive the way it was intended to be eaten — hot, generous and full of flavour. The menu is short and deliberate, and it is kept current by the people cooking from it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We are delivery only. Every order is reviewed by our team, the delivery address is checked and the delivery charge is confirmed before the kitchen begins. Nothing is accepted automatically, and no dish is quietly substituted when it runs out.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">What that means for you</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Delivery across our confirmed service area, with each address checked individually.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A live menu that shows real availability, including sold-out dishes.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>An order status you can follow in your account once the customer portal opens.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"adepa-note"} -->
<p class="adepa-note">Development placeholder: approved brand history, team details and photography are still to be supplied.</p>
<!-- /wp:paragraph -->
HTML,
		),
		'delivery'   => array(
			'title'   => 'Delivery',
			'content' => <<<'HTML'
<!-- wp:paragraph {"className":"adepa-lead"} -->
<p class="adepa-lead">ADEPA delivers to Milton Keynes and Northampton. These are our intended delivery areas, and every address is subject to manual confirmation by our team.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">How delivery is confirmed</h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li>You submit an order with your delivery address during operating hours.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Our team checks whether the address can be served and confirms the delivery charge.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>We accept or decline the order. If it is accepted, the kitchen prepares it and sends it out.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:group {"className":"adepa-empty-state","layout":{"type":"default"}} -->
<div class="wp-block-group adepa-empty-state">
<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
<p class="adepa-eyebrow">Please note</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">An order is a request, not a confirmation.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Submitting an order does not guarantee delivery. Coverage, the delivery charge and acceptance are confirmed by our team. We do not publish delivery times or charges until they are confirmed for your address.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Delivery only</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>There is no collection or pickup at launch. Ordering is available only during published operating hours, and advance orders are not supported.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"adepa-note"} -->
<p class="adepa-note">Operating hours and delivery charges are pending client confirmation and are not published in this preview.</p>
<!-- /wp:paragraph -->
HTML,
		),
		'contact'    => array(
			'title'   => 'Contact',
			'content' => <<<'HTML'
<!-- wp:paragraph {"className":"adepa-lead"} -->
<p class="adepa-lead">A monitored phone number and email address will be published here once the business confirms them.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"adepa-empty-state","layout":{"type":"default"}} -->
<div class="wp-block-group adepa-empty-state">
<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
<p class="adepa-eyebrow">Contact details pending</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">No contact details have been invented for this preview.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>ADEPA's confirmed telephone number, email address and business address will be added here before launch. Order and delivery questions are answered on the Delivery page in the meantime.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
HTML,
		),
		'my-account' => array(
			'title'   => 'My Account',
			'content' => <<<'HTML'
<!-- wp:paragraph {"className":"adepa-lead"} -->
<p class="adepa-lead">Customer accounts, ordering and order tracking are part of the next phase of the ADEPA build.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>When the customer portal opens, you will be able to create an account, place a delivery order and follow each stage of its progress in one place.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Until then, authorised staff can sign in to the WordPress dashboard to manage the site.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/wp-login.php">Staff sign in</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
HTML,
		),
		'privacy'    => array(
			'title'   => 'Privacy',
			'content' => <<<'HTML'
<!-- wp:paragraph {"className":"adepa-lead"} -->
<p class="adepa-lead">The ADEPA privacy policy is pending approval and has not been published.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"adepa-empty-state","layout":{"type":"default"}} -->
<div class="wp-block-group adepa-empty-state">
<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
<p class="adepa-eyebrow">Policy pending</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">This policy will be replaced before launch.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>No policy text has been invented. The approved policy will set out what customer data is collected, why it is needed and how it is protected.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
HTML,
		),
		'terms'      => array(
			'title'   => 'Terms',
			'content' => <<<'HTML'
<!-- wp:paragraph {"className":"adepa-lead"} -->
<p class="adepa-lead">ADEPA's ordering and delivery terms are pending approval and have not been published.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"adepa-empty-state","layout":{"type":"default"}} -->
<div class="wp-block-group adepa-empty-state">
<!-- wp:paragraph {"className":"adepa-eyebrow"} -->
<p class="adepa-eyebrow">Terms pending</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">This page will be replaced before launch.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>No terms have been invented. The approved terms will cover ordering, delivery, cancellation and offline payment.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
HTML,
		),
	);

	/**
	 * Filter the starter pages so later phases can adjust the public routes.
	 *
	 * @param array<string, array{title: string, content: string}> $pages Page definitions.
	 */
	return apply_filters( 'adepa_starter_pages', $pages );
}

/**
 * Create the starter pages once, without overwriting anything that exists.
 *
 * Runs on theme activation only. It never modifies existing pages and writes
 * no custom database tables.
 *
 * @return void
 */
function adepa_create_starter_pages() {
	if ( get_option( 'adepa_starter_pages_seeded' ) ) {
		return;
	}

	foreach ( adepa_starter_pages() as $slug => $page ) {
		if ( get_page_by_path( $slug, OBJECT, 'page' ) ) {
			continue;
		}

		wp_insert_post(
			array(
				'post_title'   => $page['title'],
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => $page['content'],
			)
		);
	}

	update_option( 'adepa_starter_pages_seeded', 1 );
}
add_action( 'after_switch_theme', 'adepa_create_starter_pages' );
