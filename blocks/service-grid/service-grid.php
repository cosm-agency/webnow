<?php
/**
 * service-grid Block Template.
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
$class_name = 'service-grid-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field( 'service-grid' ) ?: 'Your service-grid here...';
$author           = get_field( 'author' ) ?: 'Author name';
$author_role      = get_field( 'role' ) ?: 'Author role';
$image            = get_field( 'image' ) ?: 295;
$background_color = get_field( 'background_color' );
$text_color       = get_field( 'text_color' );

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );

?>
 <section class="bg-white w-full my-14 ">
            <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                <a href="./services.html" class="text-center bg-gray-100 px-4 py-6 space-y-4">
                    <h3 class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold uppercase">
                        Pest Control
                    </h3>
                    <p class="text-gray-600 text-sm leading-normal font-droid">
                        Many companies don’t guarantee their work – <strong>BUT WE DO! </strong> &nbsp;We stand behind every job 100%. &nbsp;We want to be sure you are super pleased – in fact absolutely delighted – with every pest control job we do, so every&nbsp;job we do comes with our Iron Clad, Simple, Solid, Risk free Guarantee.
                    </p>
                </a>
                <a href="./termite-control.html" class="text-center bg-gray-100 px-4 py-6 space-y-4">
                    <h3 class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold uppercase">
                        TERMITE CONTROL
                    </h3>
                    <p class="text-gray-600 text-sm leading-normal font-droid">
                        Does your homeowners’ insurance cover termite damage? If not it’s time to start a preventative termite plan, so you’re not part of the $5 billion in damages caused by the pesky critters every year. Don’t be a victim or say it won’t happen to me.
                    </p>
                </a>
                <a href="./preparation.html" class="text-center bg-gray-100 px-4 py-6 space-y-4">
                    <h3 class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold uppercase">
                        PREP INFO
                    </h3>
                    <p class="text-gray-600 text-sm leading-normal font-droid">
                        It doesn’t take long for an Ideal Pest Control agent to make his away around your house, spraying for and eliminating the potential pests that lurk just outside your doors and walls. However, you can take a few easy steps to make sure his visit is quick, efficient and effective. Just follow <strong>these steps</strong>.
                    </p>
                </a>
                <a href="./index.html" class="text-center bg-gray-100 px-4 py-6 space-y-4">
                    <h3 class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold uppercase">
                        COMMERCIAL
                    </h3>
                    <p class="text-gray-600 text-sm leading-normal font-droid">
                        No matter what kind of business you’re in, food service, healthcare, hospitality, beverage, office buildings or other industries SVE has a solution to 86 your bugs. Find out what you can expect from our pest control and termite service.
                    </p>
                </a>
                <a href="./index.html" class="text-center bg-gray-100 px-4 py-6 space-y-4">
                    <h3 class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold uppercase">
                        RESIDENTIAL
                    </h3>
                    <p class="text-gray-600 text-sm leading-normal font-droid">
                        Free pest control service for new home buyers. Just call within 30 days of purchase and ask for your <strong>FREE Welcome Home Service With New Service Agreement</strong>. We will put an iron curtain of defense around the base of your home that Ants, Spiders, Earwigs, beetles, and other bugs just won’t cross.
                    </p>
                </a>
                <a href="./coupon.html" class="text-center bg-gray-100 px-4 py-6 space-y-4">
                    <h3 class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold uppercase">
                        COUPONS
                    </h3>
                    <p class="text-gray-600 text-sm leading-normal font-droid">
                        As part of our commitment to provide our customers with great service, we offer specials on our pest control and termite services. Please check our special offers page for current savings.
                        <strong> Click Here for Coupons</strong>
                    </p>
                </a>
            </div>
        </section>