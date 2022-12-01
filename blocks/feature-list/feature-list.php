<?php
/**
 * feature-list Block Template.
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
$class_name = 'feature-list-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'feature-list' ) ?: 'Your feature-list here...';
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
            <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full">

                <div class="mt-10 w-full">
<InnerBlocks />
                    
                        <ul class="grid grid-cols-3 sm:grid-cols-2 mx-auto max-w-lg " >
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid ">
                                <i class="fa-solid fa-check text-red-600"></i> 
                                Ants
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid  ">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Termites
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Mice
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Rats
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Fleas
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Spiders
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Ticks
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Bed Bugs
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Earwigs
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Stinging Pests
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Mites
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Black Widows
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Silverfish
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-600 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Call for more
                            </li>
                        </ul>

             
                </div>
            </div>
        </section>
