<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

  <?php while ( have_posts() ) : the_post();
      $service_description = get_field("service_description");
      $icon = get_field("icon");
      $size = "full";
       ?>

  <article class="Our Services">
    <aside class="case-study-sidebar">
      <h2><?php the_title(); ?></h2>
      <h5><?php echo $service_description; ?></h5>
      <?php if($icon) {
        echo wp_get_attachment_image( $icon, $size );
      } ?>

      <?php the_content(); ?>

      <p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
    </aside>
  </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
