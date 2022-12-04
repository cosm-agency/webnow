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
$title                = get_field( 'title' ) ?: 'Lorem Ipsum Dolor';
$subtitle             = get_field( 'subtitle' ) ?: 'Lorem Ipsum Dolor';
$text                 = get_field( 'announcement' ) ?: 'Your announcement here...';
$link_1_url           = get_field( 'link_1_url' ) ?: "#";
$link_1_text          = get_field( 'link_1_text' ) ?: "Click Here";
$foreground_image     = get_field( 'foreground_image' ) ?: 0;
$background_image     = get_field( 'background_image' ) ?: 0;
$background_color     = get_field( 'background_color' );
$text_color           = get_field( 'text_color' );

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );

?>
        <section class="bg-white w-full my-10 mx-auto max-w-3xl px-8 lg:px-7 2xl:px-0 text-center space-y-4 border-b border-gray-300">
            <div class="mx-auto max-w-3xl px-5 lg:px-7 2xl:px-0 w-full">
                <div class="w-full text-center space-y-4 border-b border-gray-300 px-4">
                    
                    <div class="flex flex-row space-x-4 justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <p class="text-base sm:text-xl text-gray-500 font-semibold pb-2.5 ">
                   
                        Your local exterminator in Tulare County that you can count on.
</p>
</div>
                </div>
            </div>                
        </section>