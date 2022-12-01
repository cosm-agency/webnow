<?php
/**
 * announcement Block Template.
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
$class_name = 'announcement-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'announcement' ) ?: 'Your announcement here...';
$author           = get_field( 'author' ) ?: 'Author name';
$author_role      = get_field( 'role' ) ?: 'Author role';
$image            = get_field( 'image' ) ?: 295;
$background_color = get_field( 'background_color' );
$text_color       = get_field( 'text_color' );

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );

?>
        <section class="bg-white w-full my-10">
            <div class="mx-auto max-w-2xl px-5 lg:px-7 2xl:px-0 w-full">
                <div class="w-full text-center space-y-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold  text-gray-600">The best pest and termite control company in Tulare County, give us a call for <span class="text-red">All Your Pest</span> and <span class="text-red">Termite Needs</span>.</h1>
                    <p class="text-base sm:text-lg  text-gray-500 font-semibold pb-2.5 border-b border-gray-300 pb-8">
                        <i class="fa-solid fa-marker"></i>
                        Your local exterminator in Tulare County that you can count on.
</p>
                </div>
            </div>                
        </section>