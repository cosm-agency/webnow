<?php
/**
 * Testimonial Block Template.
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
$class_name = 'testimonial-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'testimonial' ) ?: 'Your testimonial here...';
$source           = get_field( 'source' ) ?: 'John Doe';
$background_color = "#FFF";
$text_color = "#000";

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );

?>
<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">


    <blockquote class="flex flex-col sm:flex-row w-full gap-6 py-8 rounded-xl shadow-md my-4 p-4">
                            <span class="text-gray-300 text-4xl">
                                <i class="fa-solid fa-quote-left"></i>
                            </span>
                            <div class="space-y-4 text-gray-800">
                               <p class="font-droid text-base font-normal">
                               <?php echo $text; ?>
                               </p>
                                <div class="text-sm font-bold"><?php echo $source; ?></div>
                            </div>
                        </blockquote>                  

</div>
 


