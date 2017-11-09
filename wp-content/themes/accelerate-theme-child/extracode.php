

<div id="primary" class="home-page hero-content">
        
    <div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('archives/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div>
</section><!-- .home-page -->
<section class="featured-work">
    <div class="site-content">
        <h4>Featured Work</h4>
        <ul class="homepage-featured-work">
        <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
        <?php while ( have_posts() ) : the_post();
            $image_1 = get_field("image_1");
            $size = "medium";
            ?>
          <li class="individual-featured-work">
            <figure>
                <?php echo wp_get_attachment_image($image_1, $size); ?>
            </figure> 
                        
            <h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h3>  
          </li> 
            <?php endwhile; // end of the loop. ?> 
            
        </ul>        
    </div>
</section>
                    





<section class="recent-posts">
<div class="blog-post">
            <h3>From the Blog</h3>
            <?php query_posts('posts_per_page=1'); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?> 
                
          <?php endwhile; // end of the loop. ?> 
                 <?php wp_reset_query(); // resets the altered query back to the original ?>
</div>
</section>


<?php wp_reset_query(); // resets the altered query back to the original ?>



<?php get_footer(); ?>

/////////////////////////////////////////////////////////////////////

get_header(); ?>

<section class="home-page">
    <div class="site-content"> <!--.site-content puts everything in the middle -->
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="homepage-hero">
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('archives/case-studies/') ?>">View Our Work</a>
            </div><!-- .homepage-hero -->    
			<?php endwhile; // end of the loop. ?>
    </div> <!-- .site-content -->    
</section><!-- .home-page -->
 
<section class="featured-work">
    <div class="site-content">
        <h4>Featured Work</h4>
        <ul class="homepage-featured-work">
        <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
        <?php while ( have_posts() ) : the_post();
            $image_1 = get_field("image_1");
            $size = "medium";
        ?>
          <li class="individual-featured-work">
            <figure>
                <?php echo wp_get_attachment_image($image_1, $size); ?>
            </figure> 
                        
            <h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h3>  
          </li> 
            <?php endwhile; // end of the loop. ?> 
            
        </ul>        
    </div>
</section>
                         
<section class="recent-posts">
    
</section>


