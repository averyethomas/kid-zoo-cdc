<?php
	/**
     * Template Name: Single Page
     *
     * @package WordPress
     * @subpackage Kidzoo CDC Inc.
     * @since version 1.0
     */

  	get_header();

  	remove_filter ('the_content', 'wpautop');

?>

    
    <div class="container">
        <div class="col-xs-12">
            <?php the_field('content') ?>
        </div>
    </div>

<?php get_footer(); ?>