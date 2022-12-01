<?php
/**
 * reviews Block Template.
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
$class_name = 'reviews-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'reviews' ) ?: 'Your reviews here...';
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
            <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-8 w-full flex items-center justify-between flex-col-reverse md:flex-row bg-gray-100 py-12 gap-10 rounded">
                <div class="inline-flex flex-col xs:flex-row md:flex-col w-full xs:w-auto gap-3">
                    <button class="inline-flex items-center w-full xs:min-w-[180px] whitespace-nowrap justify-center gap-x-1 px-5 py-2.5 text-white duration-200 border-none rounded font-medium tracking-wide text-base shadow hover:shadow-sm shadow-gray-600/4 bg-red hover:bg-[#ee2128]">
                        <i class="fa-brands fa-yelp"></i>
                        Yelp
                    </button>
                    <button class="inline-flex items-center w-full xs:min-w-[180px] whitespace-nowrap justify-center gap-x-1 px-5 py-2.5 text-white duration-200 border-none rounded font-medium tracking-wide text-base shadow hover:shadow-sm shadow-gray-600/4 bg-green hover:bg-darkGreen">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Write Review
                    </button>
                </div>
                <div class="flex w-full">
                   <p class="text-center text-gray-700 text-base md:text-lg leading-5">
                    "I just want to say that since we have had Sierra Vista Exterminators we have had the best care and have not had any problems. Gene is nice and friendly really good at what he does we are very pleased so I recommend that you get Sierra Vista for your pest control."
                   </p>
                </div>
            </div>
        </section>