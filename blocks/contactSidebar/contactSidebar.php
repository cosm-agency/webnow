<?php
/**
 * contactSidebar Block Template.
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
$class_name = 'contactSidebar-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title                = get_field( 'title' ) ?: 'Lorem Ipsum Dolor';
$subtitle             = get_field( 'subtitle' ) ?: 'Lorem Ipsum Dolor';
$text                 = get_field( 'text' ) ?: 'Your announcement here...';
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
        <section class="bg-white w-full">
            <div class="mx-auto max-w-2xl px-5 lg:px-7 2xl:px-0 w-full text-center border-t border-gray-200 py-12">
                <h2 class="text-xl md:text-3xl text-gray-900"><?php echo $title; ?></h2>
                <p class="text-yourbugs-red text-3xl font-bold my-4 font-droid"><?php echo $subtitle; ?></p>
                <a href="<?php echo $link_1_url; ?>" class="inline-block w-full sm:w-auto sm:min-w-[180px] whitespace-nowrap justify-center gap-x-1 text-white px-10 py-5 bg-green hover:bg-yourbugs-darkGreen duration-200 border-none rounded font-bold tracking-wide text-xl mb-4 shadow-md hover:shadow shadow-black/60">
                <?php echo $link_1_text; ?>
                </a>
                <div class="block mt-6">
                <p class="font-droid text-lg sm:text-xl text-gray-700 inline-block mx-auto"><?php echo $text; ?></p>
                </div>
            </div>
        </section>