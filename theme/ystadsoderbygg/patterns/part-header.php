<?php
/**
 * Title: Part: header
 * Slug: ystadsoderbygg/part-header
 * Inserter: no
 *
 * Template part markup lives in a pattern so links use this site's own address.
 */

// Point the menu at the site's "Main menu" (created by the demo setup, editable in Appearance → Editor → Navigation).
$ys_menu = get_posts( array( 'post_type' => 'wp_navigation', 'title' => 'Main menu', 'numberposts' => 1, 'fields' => 'ids', 'post_status' => 'publish' ) );
$ys_ref  = $ys_menu ? '"ref":' . (int) $ys_menu[0] . ',' : '';
?>
<!-- wp:group {"tagName":"div","className":"ys-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group ys-header has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"ys-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group ys-brand"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {<?php echo $ys_ref; // phpcs:ignore ?>"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

<!-- wp:paragraph {"className":"ys-phone","style":{"typography":{"lineHeight":"1.2"}}} -->
<p class="ys-phone" style="line-height:1.2"><a href="tel:<?php echo esc_attr( ys_lead( 'telefon_tel' ) ); ?>"><?php echo esc_html( ys_lead( 'telefon' ) ); ?></a><small>Vi svarar vard. 07–18</small></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ys-header-btn"} -->
<div class="wp-block-buttons ys-header-btn"><!-- wp:button {"className":"ys-track-cta"} -->
<div class="wp-block-button ys-track-cta"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/offert' ) ); ?>">Boka besiktning</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
