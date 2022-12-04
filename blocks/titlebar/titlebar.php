<?php
/**
 * titlebar Template.
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
$class_name = 'titlebar-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title                = get_field( 'title' ) ?: '';
$subtitle             = get_field( 'subtitle' ) ?: '';

?>
                <section class="bg-gray-200 w-full shadow-lg mb-6">
           <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  py-6 text-center md:text-left">
                <h1 class="text-2xl md:text-3xl font-semibold text-gray-800"><?php echo $title; ?></h1>
                <?php if ($subtitle) { ?> 
                <p class="text-gray-600 text-base leading-normal font-droid block">
                    <?php echo $subtitle; ?>
                </p> 
                <?php } ?> 
           </div>
       </section>