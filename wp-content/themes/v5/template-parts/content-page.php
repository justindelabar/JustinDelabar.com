<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package v5
 */

?>



<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>		



		<li>
			<a href="<?php echo get_permalink(); ?>"><div class="entry-image" style="background: url(<?php echo $src[0]; ?>) top center; background-size: cover;"></div></a>
		</li>



