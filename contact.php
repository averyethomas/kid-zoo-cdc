 <?php
 	/**
      * Template Name: Contact Page
      *
      * @package WordPress
      * @subpackage Kidzoo CDC, INC.
      * @since version 1.0
      */

   	get_header();

   	remove_filter ('the_content', 'wpautop');

 ?>
 
 <div>
    <div class="container contact">
      <?php
      
      while ( have_posts() ) : the_post();
	 
	 get_template_part( 'template-parts/content', 'page' );
	 
	 endwhile
	 ?>
	 
        <div class="col-xs-12 col-md-9">
            <h1><?php the_title(); ?></h1>
            <div class="col-xs-12 col-sm-6" style="padding: 4%;">
                <div style="padding-bottom: 10%;"><?php the_field('content') ?></div>
                <p><div class="glyphicon glyphicon-home"></div> <?php the_field('address') ?></p>
                <p><div class="glyphicon glyphicon-earphone"></div><a href="tel:<?php the_field('phone_number') ?>" ><?php the_field('phone_number') ?></a></p>
                <p><div class="glyphicon glyphicon-envelope"></div><a href="mailto:<?php the_field('email') ?>" ><?php the_field('email') ?></a></p>

            </div>
            <div class="col-xs-12 col-sm-6">
	       <?php the_field('contact_form_embed') ?>
            </div>
            <div class="col-xs-12">
                <?php the_field('map_embed') ?>
            </div>
            
            
        </div>
        <div class="col-xs-12 col-md-3 contact-sidebar">
            <h3>Hours of Operation</h3>
            <?php the_field('hours') ?>
        </div>
        <div class="col-xs-12 col-md-3 contact-sidebar">
            <h3>Holidays</h3>
            <?php the_field('holidays') ?>
        </div>
    </div>
 </div>

 

    <?php get_footer(); ?>