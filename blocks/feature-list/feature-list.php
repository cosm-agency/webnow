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
$title                = get_field( 'title' ) ?: 'Lorem Ipsum Dolor';
$subtitle             = get_field( 'subtitle' ) ?: 'Lorem Ipsum Dolor';

?>

 <section class="bg-white w-full my-10">
            <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full">

                <div class="mt-10 w-full"> 
                <h2 class="text-4xl md:text-3xl text-center font-semibold text-gray-600"><?php echo $title; ?></h2>
                    <p class="text-sm md:text-base text-center text-gray-600 mt-3 font-droid"><?php echo $subtitle; ?></p>
                     
                        <ul class="grid grid-cols-3 sm:grid-cols-2 mx-auto max-w-lg " >
                        <?php

// Check rows existexists.
if( have_rows('features') ):




    // Loop through rows.
    while( have_rows('features') ) : the_row();


        
        $feature = get_sub_field('feature');
        echo '<li class="text-base sm:text-xl font-bold text-gray-600 font-droid"><i class="fa-solid fa-check text-red mr-2"></i>';
        echo $feature;
        echo '</li>';

    // End loop.
    endwhile;






endif;

?>
                        </ul>

             
                </div>
            </div>
        </section>
