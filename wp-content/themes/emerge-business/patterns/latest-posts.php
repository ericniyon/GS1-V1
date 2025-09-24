<?php
/**
 * Title: Latest Posts
 * Slug: emerge-business/latest-posts
 * Categories: theme
 *
 * @package emerge-business
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"width":"0px","style":"none"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Recent Blogs', 'emerge-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1.1"},"spacing":{"padding":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-heading"}}}},"textColor":"custom-heading","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-custom-heading-color has-text-color has-link-color has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--30);line-height:1.1"><?php esc_html_e( 'Checkout Our Latest Insights &amp; Blogs', 'emerge-business' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":42,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-query animated animated-fadeInUp"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|medium","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","scale":"contain","style":{"border":{"radius":"6px"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":5,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-small"},"padding":{"top":"var:preset|spacing|30","bottom":"0"}},"typography":{"letterSpacing":"-0.03em","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|custom-heading"}}}},"textColor":"custom-heading","fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-author {"textAlign":"left","avatarSize":24,"showAvatar":false,"textColor":"custom-body","fontSize":"x-small"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","textColor":"custom-body","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->