<?php
/**
 * service-grid Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'service-grid-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title                = get_field( 'title' ) ?: '';
$subtitle             = get_field( 'subtitle' ) ?: '';
$columns_mobile       = get_field( 'columns_mobile' ) ?: 1;
$columns_tablet       = get_field( 'columns_tablet' ) ?: 2;
$columns_desktop       = get_field( 'columns_desktop' ) ?: 3;

?>
 <section class="bg-white w-full my-14">
            <InnerBlocks class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full grid grid-cols-<?php echo $columns_mobile; ?> sm:grid-cols-<?php echo $columns_tablet; ?> md:grid-cols-<?php echo $columns_desktop; ?> gap-8" />
        </section>