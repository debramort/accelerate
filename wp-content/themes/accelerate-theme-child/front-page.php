<?php
/**
 * The template for displaying the homepage
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

<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<!-- FEATURED WORK -->
<section class="featured-work">
	<div class="site-content clearfix">
		<h4>Featured Work</h4>
		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
		<!-- the loop -->
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li class="individual-featured-work">
				<a href="<?php the_permalink(); ?>">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					<h3><?php the_title(); ?></h3>
				</a>
			</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>
</section>


<!--Our Services -->
<section class="our-services">
	<div class="site-content clearfix">
    <?php while ( have_posts() ) : the_post();
        
        $service_image_1 = get_field('serviceimg_1'); 
        $service_image_2 = get_field('serviceimg_2');
        $service_image_3 = get_field('serviceimg_3');
        $service_image_4 = get_field('serviceimg_4');
	    $size = "full";
    ?>


		<h4>Our Services</h4>
			<div>
                <ul>
                    <li class="quarter-width">
                        <img src="<?php the_field('serviceimg_1'); ?>" alt="" />
                        <h3><?php the_field('service1'); ?></h3>
                        

                        
                    </li>
                    <li class="quarter-width">
                        <img src="<?php the_field('serviceimg_2'); ?>" alt="" />
                        <h3><?php the_field('service2'); ?></h3>
                    </li>
                    <li class="quarter-width">
                        <img src="<?php the_field('serviceimg_3'); ?>" alt="" />
                        <h3><?php the_field('service3'); ?></h3>
                    </li>
                    <li class="quarter-width">
                        <img src="<?php the_field('serviceimg_4'); ?>" alt="" />
                        <h3><?php the_field('service4'); ?></h3>
                    </li>
                    
                    
                </ul>    


            </div>
    <?php endwhile; // end of the loop. ?>
    <?php wp_reset_query(); // resets the altered query back to the original ?>
	</div>
</section>


<!-- RECENT BLOG POST -->
<section class="recent-posts">
	<div class="site-content">
        <div class = "blog-tweet">
		<div class="blog-post">
			<h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
				<!-- the loop -->
				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
				<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div>
        
        <div class = "twitter-app">
            <h4>Recent Tweet</h4>           
            <h3 class="widget-title"><a target="_blank" href="https://twitter.com/debramort2">@Accelerate</a></h3>
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <div id="secondary" class="widget-area" role="complementary">
                    
	        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
            
            <?php endif; ?>
            <a class="read-more-link" href="http://twitter.com">Follow Us ›</a>
        </div>
        </div>    
	</div>
</section>

<?php get_footer(); ?>
