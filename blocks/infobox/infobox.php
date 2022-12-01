<?php
/**
 * infobox Block Template.
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
$class_name = 'infobox-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'infobox' ) ?: 'Your infobox here...';
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
            <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-8 w-full flex items-center flex-col md:flex-row justify-between bg-gray-100 py-12 gap-10">
                <div class="flex w-full flex-col gap-y-4">
                    <h3 class="text-2xl text-gray-700 font-semibold">
                        Sierra Vista Exterminators – 86 Your Bugs
                    </h3>
                   <p class="text-gray-800 text-sm leading-normal font-droid">
                    For over 10 years, homeowners and business owners throughout Tulare County have counted on SVE, Porterville’s best pest and termite control company to offer the professional, quality exterminating services. We take care of our customers the way we would want to be taken care of.  We have found that our customers soon become our friends that we meet in the grocery store and around town as we take care of our daily business. We want to treat you our customers, as friends and work with you to keep your homes pest free. When you deal with Gene & Kim Day you are dealing with the owners of the company and we have a reputation to uphold. We are a full-service pest and termite control company providing the highest quality service for Porterville, Tulare, Camp Nelson, Springville, Visalia, Terra Bella, Lindsay and the surrounding areas.
                   </p>
                </div>
                <div class="flex w-full">
                    <img src="../assets/86yourbugs/Fotolia_74619773_XS.jpg" class="w-full h-full" alt="">
                </div>
            </div>
        </section>