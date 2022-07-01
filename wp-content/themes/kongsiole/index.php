<?php
/**
 * 
 * User for test Only!!!!
 */

get_header();
?>

<div id="services">
	<div class="container">
		<?php
		if(is_home() or is_front_page() ) {
			the_content();
		} else {
			
		}
		?>	
	</div>
	<!--container-->
</div>
<!-- service -->	

<?php
get_footer();
