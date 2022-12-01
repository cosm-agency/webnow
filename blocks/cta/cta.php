<?php
/**
 * cta Block Template.
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
$class_name = 'cta-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'cta' ) ?: 'Your cta here...';
$author           = get_field( 'author' ) ?: 'Author name';
$author_role      = get_field( 'role' ) ?: 'Author role';
$image            = get_field( 'image' ) ?: 295;
$background_color = get_field( 'background_color' );
$text_color       = get_field( 'text_color' );

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );

?>
        <section class="bg-white w-full">
            <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full text-center border-t border-gray-200 py-12">
                <h2 class="text-xl md:text-3xl text-gray-900">Call Sierra Vista Exterminators Tulare County's Best Pest & Termite Specialists at <strong>(559) 784-8600</strong></h2>
                <p class="text-yourbugs-red text-3xl font-bold mt-6 font-droid">Friendly, Dependable Service – Guaranteed Results</p>
                <a href="./schedule-consultation.html" class="inline-flex items-center w-full sm:w-auto sm:min-w-[180px] whitespace-nowrap justify-center gap-x-1 text-white px-10 py-5 bg-green hover:bg-yourbugs-darkGreen duration-200 border-none rounded font-bold tracking-wide text-xl mt-10 shadow-md hover:shadow shadow-black/60">
                   Schedule Consultation
                </a>
                <p class="font-droid text-lg sm:text-xl text-gray-700 mt-6">Servicing Porterville, Tulare, Visalia, Terra Bella, and Surrounding Areas</p>
            </div>
        </section>