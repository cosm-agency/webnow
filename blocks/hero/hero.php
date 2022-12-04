<?php
/**
 * Hero Block Template.
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
$class_name = 'hero-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'hero' ) ?: 'Your hero here...';
$author           = get_field( 'author' ) ?: 'Author name';
$author_role      = get_field( 'role' ) ?: 'Author role';
$image            = get_field( 'image' ) ?: 295;
$background_color = get_field( 'background_color' );
$text_color       = get_field( 'text_color' );

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );

?>
<section class="bg-black w-full relative overflow-hidden ">
            <div class="h-[750px] md:h-[600px] hero-content relative">
                <img class="h-full w-full object-cover object-center bg-black" src="/wp-content/uploads/86yourbugs/86yourbugs-bg1.jpg" alt="">
            </div>
            <div class="h-auto md:h-[600px] absolute z-[5] top-0 w-full">
                <!-- Desktop -->
                <div class="mx-auto max-w-5xl w-full hidden md:block">
                    <div class="grid grid-cols-12 w-full relative md:h-[600px]">
                        <div class="absolute col-start-1 col-span-8 xl:col-span-4 z-[0] h-full flex items-end">
                            <div class="w-full h-full">
                                <img src="/wp-content/uploads/86yourbugs/person.png" class="h-full w-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="absolute z-[1] col-span-8 2xl:col-span-8 col-start-4 2xl:col-start-5 w-full py-12 pr-5 2xl:pr-0">
                            <div class="italic text-right w-full space-y-2">
                                <h2 class="text-5xl font-semibold text-white" style="text-shadow: 0 2px 4px #000;">Get Rid of Pests & Termites</h2>
                                <p class=" text-white" style="text-shadow: 0 2px 4px #000;">Friendly, Dependable Service – Guaranteed Results</p>
                            </div>
                            <div class="bg-yourbugs-red rounded-md px-4 py-3.5 mt-10">
                                <p class="text-center text-white text-3xl font-medium py-3 bg-black bg-opacity-50 rounded-sm" style="  text-shadow:
   -1px -1px 0 #000,  
    1px -1px 0 #000,
    -1px 1px 0 #000,
     1px 1px 0 #000; ">
                                    <em>Proudly Servicing Tulare County For 10+ Years</em>
                                </p>
                                <ul class="flex flex-row gap-x-3 mt-2 bg-white flex-wrap py-4 px-3 gap-y-2 justify-center font-droid rounded list-none">
                                    <li class="text-gray-700 text-xl font-bold list-none pr-6">Termite Control</li>
                                    <li class="text-gray-700 text-xl font-bold list-disc pr-6">Residential Post Control</li>
                                    <li class="text-gray-700 text-xl font-bold list-disc">Family Owned</li>
                                    <li class="text-gray-700 text-xl font-bold list-none pr-6">Commercial Pest Control</li>
                                    <li class=" text-gray-700 text-xl font-bold list-disc"><span class="text-red">Guaranteed Results</span></li>
                                </ul>
                            </div>
                            <div class="flex items-center justify-end gap-6 w-4/5 ml-auto mt-10">
                                <div>
                                    <img src="/wp-content/uploads/86yourbugs/yelp.png"  class="w-full h-auto" alt="">
                                </div>
                                <div>
                                    <img src="/wp-content/uploads/86yourbugs/angies-list.png"  class="w-full h-auto" alt="">
                                </div>
                                <div>
                                    <img src="/wp-content/uploads/86yourbugs/bbb-business-rating.png"  class="w-full h-auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile -->
                <div class="block md:hidden w-full px-5 py-14">
                    <div class="rounded-md bg-gray-800 bg-opacity-60 p-6">
                        <h2 class="text-3xl font-semibold text-white text-center">Get Rid of Pests & Termites</h2>
                        <p class="text-black text-center p-6 bg-black bg-opacity-20 rounded-sm">
                            <em class="text-black">Proudly Servicing Tulare County For 10+ Years</em>
                        </p>
                        <ul class="space-y-2.5 mt-5">
                            <li class="text-base sm:text-xl font-bold text-gray-100 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Termite Control
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-100 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Post Control
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-100 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Residential
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-100 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Commercial
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-100 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Family Owned
                            </li>
                            <li class="text-base sm:text-xl font-bold text-gray-100 font-droid">
                                <i class="fa-solid fa-check text-red-600"></i>
                                Guaranteed Results
                            </li>
                        </ul>
                    </div>
                    <div class="w-full flex justify-center my-8">
                        <img class="w-4/5 xs:w-full max-w-xs h-auto" src="/wp-content/uploads/86yourbugs/bbb-business-rating.png" alt="business-rating">
                    </div>
                    <div class="w-full flex flex-col sm:flex-row justify-center items-center gap-5">
                        <a href="tel:(559) 784-8600" class="inline-flex justify-center items-center w-full shadow-md shadow-black/60 sm:w-auto gap-x-2 text-white px-5 py-2 bg-yourbugs-green hover:bg-yourbugs-darkGreen duration-200 border-none rounded font-bold tracking-wide text-lg">
                            <i class="fa-solid fa-phone"></i>
                            <span>
                                Call Now (559) 784-8600
                            </span>
                        </a>
                        <a href="./schedule-consultation.html" class="hover:shadow-sm inline-flex justify-center items-center w-full shadow-md shadow-black/60 sm:w-auto gap-x-2 text-white px-5 py-2 bg-yourbugs-green hover:bg-yourbugs-darkGreen duration-200 border-none rounded font-bold tracking-wide text-lg">
                            Schedule Consultation
                        </a>
                    </div>
                </div>
            </div>
        </section>