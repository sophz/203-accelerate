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

<div class="about-header">
  <div class="about-header-wrapper" >
    <h1>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
  </div>
</div>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
      <div class="about-page-content">
        <div class="about-services">
          <h2>Our Services</h2>
          <p>We take pride in our clients and the content we create for them.
            Here’s a brief overview of our offered services.</p>
        </div>

<article class="Our Services">
  <?php query_posts('posts_per_page=4&post_type=services'); ?>
        <?php while ( have_posts() ) : the_post();
            $service_description = get_field("service_description");
            $icon = get_field("icon");
            $size = "full";
             ?>

          <aside class="individual-service">
            <div class="service-icon">
              <?php echo wp_get_attachment_image( $icon, $size ); ?>
            </div>
            <div class="service-description service">
              <h2><?php the_title(); ?></h2>
              <h5><?php echo $service_description; ?></h5>
            </div>
          </aside>

			<?php endwhile; // end of the loop. ?>
      	<?php wp_reset_query(); ?>
      </article>

      <section class="work-with-us">
        <h2>Interested in working with us?</h2>
        <a class="button" href="#">Contact Us</a>
      </section>
    </div>
	</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
