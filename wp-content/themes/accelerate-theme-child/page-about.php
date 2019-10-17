<?php
/**
 * The template for displaying about page
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

			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

  <div>
  <h1>Our Services</h1>
  <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services</p>
</div>

<section class="services">
    <?php query_posts('post_type=about'); ?>

        <?php while ( have_posts() ) : the_post();
        $services_offered = get_field("services_offered");
        $icon = get_field("icon");
        $size = "full";
        ?>

      <div class="service">
          <figure>
            <?php echo wp_get_attachment_image($icon, $size); ?>
          </figure>
          <div class="service-description">
            <h4><?php echo $services_offered; ?></h4>
            <?php the_content(); ?>
          </div>
        <?php endwhile;?>
        <?php wp_reset_query(); ?>
</section>
<?php get_footer(); ?>
