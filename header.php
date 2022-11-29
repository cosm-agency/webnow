<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>
	<header class="w-full bg-white" x-data="{ openMenu: false }">
        <!-- Desktop -->
        <div class="relative w-full z-10">
            <!-- TOP -->
            <div class="bg-white w-full py-5 sm:py-3">
                <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  flex items-center justify-between">
                 
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="/index.html" class="hover:opacity-90 duration-200">
								<?php echo get_bloginfo( 'name' ); ?>
								</a>
						<?php } ?>
					 
                    <div class="block md:hidden pl-6">
                        <button type="button" @click="openMenu = ! openMenu" class="text-gray-900 hover:text-gray-800" aria-expanded="false" id="hamburger">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-7 w-7 duration-200 ease-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden md:flex flex-col items-end">
                        <div class="inline-flex gap-x-2">
                            <a href="https://www.facebook.com/pages/Sierra-Vista-Exterminators/161823970512429?sk=info" target="_blank" class="border rounded-md text-center w-8 py-0.5 duration-150 text-black border-gray-900 hover:text-darkGreen hover:border-darkGreen"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://plus.google.com/105860143008314393522/about" target="_blank" class="border rounded-md text-center w-8 py-0.5 duration-150 text-black border-gray-900 hover:text-darkGreen hover:border-darkGreen "><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="mt-1.5">
                            <a href="tel:(559) 784-8600" class="hover:underline font-normal font-droid space-x-1 hover:text-darkGreen">
                                <i class="fa-solid fa-phone"></i>
                                <span class="text-lg font-medium">
                                    Call Now (559) 784-8600
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom -->
            <div class="w-full bg-gradient-to-b from-red to-darkRed py-3.5 relative z-50 md:block hidden">
                <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  flex items-center md:flex-row flex-col justify-between gap-x-2">
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  flex items-center md:flex-row flex-col justify-between gap-x-2',
						'menu_class'      => 'md:space-x-5 w-full flex flex-col md:flex-row',
						'theme_location'  => 'primary',
						'li_class'        => 'text-white hover:text-gray-200 text-sm lg:text-base w-auto font-droid',
						'fallback_cb'     => false,
					)
				);
				?>							

                    <div class="block flex-none mt-4 mb-2 md:mt-0">
                        <a href="./schedule-consultation.html" class="inline-flex py-2 px-5 duration-200 border-none rounded font-bold tracking-wide text-sm lg:text-base font-droid shadow hover:shadow-sm  text-white bg-green hover:bg-darkGreen shadow-gray-500">
                            Schedule Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile -->
        <div class="fixed z-50 w-full top-0 h-screen md:hidden block" x-show="openMenu" @click.outside="openMenu = false" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
            <!-- TOP -->
            <div class="bg-white w-full py-5 sm:py-3">
                <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  flex items-center justify-between">
                    <a href="./index.html" class="hover:opacity-90 duration-200">
                        <img class="h-20 sm:h-auto align-middle w-full sm:max-w-sm" src="../assets/86yourbugs/logo.png" alt="86 Your Bugs">
                    </a>
                    <div class="block pl-">
                        <button type="button" class="text-gray-900 hover:text-gray-800"  @click="openMenu = ! openMenu" aria-expanded="false" id="hamburger">
                            <span class="sr-only">Open menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 duration-200 ease-out" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile -->
            <div class="w-full h-full bg-gradient-to-b from-red to-darkRed py-5">
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  flex items-center md:flex-row flex-col justify-between gap-x-2',
						'menu_class'      => 'md:space-x-5 w-full flex flex-col md:flex-row',
						'theme_location'  => 'primary',
						'li_class'        => 'text-white hover:text-gray-100 text-base w-full py-2.5 px-2 hover:bg-darkRed',
						'fallback_cb'     => false,
					)
				);
				?>				 	
            </div>
        </div>
    </header>
	

	<div id="content" class="site-content flex-grow">
		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
