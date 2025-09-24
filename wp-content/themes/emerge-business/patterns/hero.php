<?php
/**
 * Title: Hero
 * Slug: emerge-business/hero
 * Categories: banner
 *
 * @package emerge-business
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-image.jpg' ) ); ?>","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-base-color has-text-color has-link-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--60);padding-bottom:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-image.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"100px","width":"0px","style":"none"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"base","fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size" style="border-style:none;border-width:0px;border-radius:100px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Digital Innovation', 'emerge-business' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-x-large-font-size" style="line-height:1.3"><?php esc_html_e( 'Crafting Solutions For Your Marketing', 'emerge-business' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-body"}}}},"textColor":"custom-body"} -->
<p class="has-custom-body-color has-text-color has-link-color"><?php esc_html_e( 'Collaboratively disintermediate move to impacter compellingly web architectures.', 'emerge-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"className":"is-style-emerge-business-flat-button","style":{"border":{"radius":"100px"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"extra-small"} -->
<div class="wp-block-button has-custom-font-size is-style-emerge-business-flat-button has-extra-small-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:100px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Get Consultant', 'emerge-business' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->