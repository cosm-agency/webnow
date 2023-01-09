<?php
	$city = get_field('city', 'option');
	$state = get_field('state', 'option');
  $address_1 = get_field('address_1', 'option');
  $address_2 = get_field('address_2', 'option');

	$color_primary = get_field('color_primary', 'option');
	$color_primaryDark = get_field('color_primaryDark', 'option');
?>
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?> 


<footer id="colophon" class="w-full"  role="contentinfo">
<?php do_action( 'tailpress_footer' ); ?>
        <!-- Desktop -->
        <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full hidden md:flex items-center justify-between py-5">
            <div class="space-y-2">
  
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'footer-menu',
						'container_class' => 'space-y-2',
						'menu_class'      => 'flex divide-x divide-gray-300',
						'theme_location'  => 'footer',
						'li_class'        => 'text-gray-100 hover:text-gray-200 text-sm font-droid pr-3 hover:underline pl-3 first:pl-0',
						'fallback_cb'     => false,
					)
				);
				?>				 	
      

                <p class="font-droid  text-gray-200 text-sm opacity-80">&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?></p>
            </div>
            <div class="text-right">
                <p class="text-gray-100 text-base font-droid">
                  <?php echo get_bloginfo( 'name' );?>
                  <span class="text-gray-200 text-sm block">
                    <?php if (isset($address_1)) { echo $address_1; } ?> 
                    <?php if (isset($address_2)) { echo $address_2; } ?> - 
                    <?php echo $city; ?>, 
                    <?php echo $state; ?></span></p>
            </div>
        </div>

        <!-- Mobile -->
        <div class="mx-auto max-w-5xl px-5 lg:px-7 2xl:px-0 w-full  md:hidden flex gap-y-5 flex-col py-3.5">
            <div class="border-b sm:border-transparent border-gray-200/70 py-3 relative w-full" x-data="{ open: false }">
                <div class="flex justify-between items-center px-1.5 cursor-pointer md:cursor-default text-white" @click="open = ! open">
                  <h3>Jump To Page</h3>
                  <span class="duration-200 ease-out" x-bind:class="! open ? 'rotate-0' : 'rotate-180'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'footer-menu',
						'container_class' => '',
						'menu_class'      => 'mt-4 space-y-2.5',
						'theme_location'  => 'footer',
						'li_class'        => 'text-sm text-white hover:text-gray-300',
						'fallback_cb'     => false,
					)
				);
				?>				
              </div>
            <div class="text-center">
                <p class="text-gray-100 text-base font-droid"><?php echo get_bloginfo( 'name' );?> <br> <span class="text-gray-300 text-sm"> - <?php echo $city; ?>, <?php echo $state; ?></span></p>
                <p class="text-gray-200 text-sm font-droid">&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?></p>
            </div>
        </div>
    </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
