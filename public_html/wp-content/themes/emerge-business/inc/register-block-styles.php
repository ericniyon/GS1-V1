<?php
/**
 * Block styles.
 *
 * @package emerge-business
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function emerge_business_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'emerge-business-flat-button',
			'label' => __( 'Flat button', 'emerge-business' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'emerge-business-list-underline',
			'label' => __( 'Underlined list items', 'emerge-business' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'emerge-business-box-shadow',
			'label' => __( 'Box shadow', 'emerge-business' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'emerge-business-box-shadow',
			'label' => __( 'Box shadow', 'emerge-business' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'emerge-business-box-shadow',
			'label' => __( 'Box shadow', 'emerge-business' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'emerge-business-plus',
			'label' => __( 'Plus & minus', 'emerge-business' ),
		)
	);
}
add_action( 'init', 'emerge_business_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function emerge_business_unregister_block_style() {
	wp_enqueue_script(
		'emerge-business-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		emerge_business_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'emerge_business_unregister_block_style' );
