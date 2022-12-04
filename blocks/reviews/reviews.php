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
$yelp_link        = get_field('yelp_link') ?: '';
$google_link      = get_field('google_link') ?: '';


?>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
        <section class="bg-white w-full py-4">
            <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-8 w-full flex items-center justify-between flex-col-reverse md:flex-row bg-gray-100 py-12 gap-10 rounded">
                <div class="inline-flex flex-col xs:flex-row md:flex-col w-full xs:w-auto gap-3">
                    <a class="inline-flex items-center w-full xs:min-w-[180px] whitespace-nowrap justify-center gap-x-1 px-5 py-2.5 text-white duration-200 border-none rounded font-medium tracking-wide text-base shadow hover:shadow-xl shadow-gray-600/4 bg-red hover:bg-[#ee2128] " href="<?php echo $yelp_link; ?>" target="_blank">
                        <i class="fa-brands fa-yelp"></i>
                        Yelp
                    </a>
                    <a class="inline-flex items-center w-full xs:min-w-[180px] whitespace-nowrap justify-center gap-x-1 px-5 py-2.5 text-white duration-200 border-none rounded font-medium tracking-wide text-base shadow hover:shadow-xl shadow-gray-600/4 bg-green hover:bg-darkGreen" href="<?php echo $google_link; ?>" target="_blank">
                        <i class="fa-brands fa-google"></i>
                        Google
                    </a>
                </div>

                <?php

// Check rows existexists.
if( have_rows('testimonials') ):

    echo '<section class="splide">
    <div class="splide__track ">
          <ul class="splide__list ">';


    // Loop through rows.
    while( have_rows('testimonials') ) : the_row();

        // Load sub field value.

        
        $testimonial = get_sub_field('testimonial');
        echo '<li class="splide__slide"><p class="text-center text-gray-700 text-base md:text-lg leading-5">"';
        echo $testimonial;
        echo '"</p></li>';

    // End loop.
    endwhile;


    echo '</ul>
    </div>
  </section>';



endif;

?>
                <script>
  new Splide( '.splide', {
  classes: {
		arrows: 'splide__arrows hidden',
		arrow : 'splide__arrow hidden',
        pagination: 'mb-0 bottom-0 flex justify-center flex-row space-x-4',
		page      : 'splide__page flex-start bg-gray-500 rounded-sm inline-block hover:cursor-pointer h-4 w-4',
  },
}  ).mount();
</script> 
               
            </div>
        </section>