<?php
/**
 * service-block Block Template.
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
$class_name = 'service-block-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title                = get_field( 'title' ) ?: 'Lorem Ipsum Dolor';
$subtitle             = get_field( 'subtitle' ) ?: 'Lorem Ipsum Dolor';
$link_1_url           = get_field( 'link_1_url' ) ?: "#";

?>
<div class="bg-gray-100 rounded p-6 text-center">
                <a href="<?php echo $link_1_url; ?>">
                    <h3 class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold uppercase mb-3 block">
                        <?php echo $title; ?>
                    </h3>
                    
                    <p class="text-gray-600 text-base leading-normal font-droid">
                    <?php echo $subtitle; ?>
                    </p>
                    </a>                    
                </div>