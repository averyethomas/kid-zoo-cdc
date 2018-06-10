<?php
	/**
     * The template for displaying 404 pages (Not Found)
     *
     * @package WordPress
     * @subpackage BFG Marketing, LLC
     * @since version 1.0
     */

  	get_header();

?>

<div class="hero gray" ng-class="{'expand': isExpanded}">
    <div class="container">
            <div class="main-title col-xs-12 col-sm-9 col-md-10">
                <h1>Oops!</h1>
            </div>
    </div>
</div>

<div class="container single">
        <h3>We couldn't find the page you're looking for.</h3>
        <p>Error code: 404</p>
        <p>Would you like to return to the <a href="/">home page</a> instead? Or view some of our latest <a href="/work">work</a>?</p>
</div>

<?php get_footer(); ?>