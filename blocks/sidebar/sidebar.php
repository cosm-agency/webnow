<?php
/**
 * sidebar Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$sidebar_selection             = get_field( 'sidebar_selection' ) ?: '';


?>
<section class="bg-white w-full mb-20">
           <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  grid grid-cols-1 md:grid-cols-12 gap-8 mt-8">
           
                <InnerBlocks class="md:col-span-8 w-full" />
                
                <div class="md:col-span-4 w-full space-y-4">
                    <?php dynamic_sidebar( $sidebar_selection ); ?>
                    
            
                  
                </div>
           </div>
       </section>