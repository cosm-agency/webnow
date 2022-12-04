<?php
/**
 * widget-feature-list Block Template.
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
$class_name = 'widget-feature-list-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title                = get_field( 'title' ) ?: 'Lorem Ipsum Dolor';
$subtitle             = get_field( 'subtitle' ) ?: 'Lorem Ipsum Dolor';
$icon                 = get_field( 'icon' ) ?: "arrow";

?>

<div class="border border-gray-800 rounded">
                        <div class="py-3 px-5 bg-red">
                            <h3 class="text-white text-lg font-semibold"><?php echo $title; ?></h3>
                        </div>
                        <ul class="p-5 space-y-2">


                        <?php

// Check rows existexists.
if( have_rows('features') ):




    // Loop through rows.
    while( have_rows('features') ) : the_row();


        
        $feature = get_sub_field('feature');
        echo '<li class="flex gap-x-2.5 items-center">';
        echo '<span class="text-green">';
        if ($icon == "check") { ?>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        <?php } 
        else if ($icon == "arrow") { ?>        
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
      <?php } 
         
    echo '</span><span class="text-base">';
        echo $feature;
        echo '</span></li>';

    // End loop.
    endwhile;






endif;

?>                        
                        </ul>
                    </div>
