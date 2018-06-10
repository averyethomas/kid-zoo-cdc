<?php
	/**
     * Template Name: Home Page
     *
     * @package WordPress
     * @subpackage Kidzoo CDC Inc.
     * @since version 1.0
     */

  	get_header();

?>
    <div class="home">
	<div id="hero">
	    <img src="<?php the_field('hero_image') ?>">
	</div>
	<div class="container">
	    <div class="col-xs-12">
		<?php the_field('content') ?>
	    </div>
	    <div id="classrooms" class="row">
            <div class="col-xs-12 col-md-9">
                <div class="class-nav col-xs-6 col-sm-6 col-md-3" ng-repeat="item in classrooms" ng-click="selectClassroom(item)">
                        <p ng-bind-html="item.title.rendered | preserveHtml"></p>
                </div>
                
                <br>
                <br>
                <div class="class-nav-line">
                </div>
                <div class="class-triangle">
                    
                </div>
                <div ng-show="classroom" class="class-info">
                    <h2 ng-bind-html="classroom.title.rendered | preserveHtml"></h2>
                    <p ng-bind-html="classroom.acf.description | preserveHtml"></p>
                    <img ng-src="{{classroom.acf.image}}" style="width: 100%">
                </div>
            </div>
		
		<div class="col-xs-12 col-md-3" id="class-sidebar" style="vertical-align: top">
		    <?php the_field('classroom_expectations') ?>
		</div>
	    </div>
	</div>
    </div>

<?php get_footer(); ?>