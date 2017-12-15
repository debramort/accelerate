<?php
/**
 * The template for displaying the about page
 *
 *  
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<section class = "about">
	<div  class="home-page hero-content about-page">
		 
            <p>Accelerate is a strategy and marketing agency<br> 
                located in the heart of NYC. Our goal is to build<br> 
                businesses by making our clients visible<br> and
                making their customers smile.</p>
                 
    </div><!-- .main-content -->
</section>

<section class = "about-services">
    <div class ="site-content services-content clearfix">
        <div class= "services-intro">
            <h4>Our Services</h4>
            <p>We take pride in our clients and the content we create for them.<br>
            Here's a brief overview of our offered services.</p>
        </div>
        
    </div>
 
    <div class = "site-content  clearfix">
        <div class = "services-area-content"> 

            <?php while ( have_posts() ) : the_post(); 
                    $image_1 = get_field("image-1");
                    $image_2 = get_field("image-2");
                    $image_3 = get_field("image-3");
                    $image_4 = get_field("image-4");
                    $size = "full";?>
                <div class ="service-area strategy">
                        <figure class ="service-icon left-service-icon strategy-icon">
                            <?php echo wp_get_attachment_image($image_1, $size); ?>
                        </figure> 
                    <div class ="service-text right-service-text">
                            <h2><?php the_field('service-1'); ?></h2>
                            <p><?php the_field('service1-description'); ?></p>    
                    </div>
                </div>
            
                <div  class ="service-area influencer">
                    <div class = "service-text left-service-text">
                        <h2><?php the_field('service-2'); ?></h2>
                        <p><?php the_field('service2-description'); ?></p>    
                    </div> 
                            <figure class = "service-icon right-service-icon influencer-icon">
                                <?php echo wp_get_attachment_image($image_2, $size); ?>
                                    </figure>
                </div> 
            
                <div class ="service-area social">
                        <figure class ="service-icon left-service-icon social-icon">
                            <?php echo wp_get_attachment_image($image_3, $size); ?>
                        </figure> 
                    <div class ="service-text right-service-text">
                            <h2><?php the_field('service-3'); ?></h2>
                            <p><?php the_field('service3-description'); ?></p>    
                    </div>
                </div>
            
                <div  class ="service-area design">
                    <div class = "service-text left-service-text">
                        <h2><?php the_field('service-4'); ?></h2>
                        <p><?php the_field('service4-description'); ?></p>    
                    </div> 
                            <figure class = "service-icon right-service-icon influencer-icon">
                                <?php echo wp_get_attachment_image($image_4, $size); ?>
                                    </figure>
                </div> 
            
                 
		  <?php endwhile; // end of the loop. ?>
            
          <?php wp_reset_query(); // resets the altered query back to the original ?>
            
	   </div><!-- #content -->
    </div><!--services-content -->
</section>

<section class ="contact-us site-footer">
    <div class="site-content  clearfix about-page-contact">
        <div class = "about-contact-text">
            <h3>Interested in working with us?</h3>
            <a href= "http://localhost:8888/accelerate1/contact" class = "button contact-us-button">Contact Us</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
