<?php
	/**
     * Template Name: About Page
     *
     * @package WordPress
     * @subpackage Kidzoo CDC Inc.
     * @since version 1.0
     */

  	get_header();

  	remove_filter ('the_content', 'wpautop');

?>


<div class="container">
        <div class="col-xs-12 col-md-9">
	    <?php the_field('about_content') ?>
            <br>
	    <?php the_field('admissions_content') ?>
            <br>
            <h1>Gallery</h1>
            <div class="row">
                <?php 
    
                    $images = get_field('gallery');
    
                    if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                                <div class="col-xs-6 col-md-3 gallery-img">
                                    <img style="width: 100%; border: 5px solid #fff;" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </div>
                            <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
        <div class="col-xs-12 col-md-3" id="class-sidebar">
            <h3>Testimonials</h3>
	    <?php
	    
	    // check if the repeater field has rows of data
	    if( have_rows('testimonials') ):
	    
		    // loop through the rows of data
		while ( have_rows('testimonials') ) : the_row();
	    
		    $content = get_sub_field('testimonial_content');
		    $attribute = get_sub_field('testimonial_attribute');
		    
		    ?>
		    
		    <div>
			<div class="testimonial">
			    <p><?php echo $content ?></p>
			</div>
			<p><?php echo $attribute ?></p>
		    </div>
		    
		    <?php
	    
		endwhile;
	    
	    else :
	    
		// no rows found
	    
	    endif;
	    
	    ?>
        </div>
    </div>
<?php get_footer(); ?>