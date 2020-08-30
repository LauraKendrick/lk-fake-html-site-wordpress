<?php /* Template Name: information */ ?>
<?php get_header(); ?>

<div class="container" id="pageTitle">
    <div class="row">
        <div class="col-12">
            <h1><?php echo get_the_title();?></h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
	        <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content(); 
                }
                }
        ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-4">
            <img class="shadow-lg" style="width:100%;" src="<?php the_field('image1'); ?>" />
            <h3>Step I</h3>
            <p>Lorem ipsum</p>
        </div>

        <div class="col-4">
            <img class="shadow-lg" style="width:100%;" src="<?php the_field('image2'); ?>" />
            <h3>Step I</h3>
            <p>Lorem ipsum</p>
        </div>
        </div>

        <div class="col-4">
            <img class="shadow-lg" style="width:100%;" src="<?php the_field('image3'); ?>" />
            <h3>Step I</h3>
            <p>Lorem ipsum</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
        <p>Start exploring the night sky with 3 simple steps. Discover the wonders hidden amonst the stars in the sky above us</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6" style="padding-right:0px;">
            <img src="http://localhost/nightsky/wp-content/uploads/2020/06/nightSky.jpg" style="width:100%;">
        </div>
        <div class="col-6" style="padding-left:0px;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6" style="padding-right:0px;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-6" style="padding-left:0px;">
            <img src="http://localhost/nightsky/wp-content/uploads/2020/06/nightSky.jpg" style="width:100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-6" style="padding-right:0px;">
            <img src="http://localhost/nightsky/wp-content/uploads/2020/06/nightSky.jpg" style="width:100%;">
        </div>
        <div class="col-6" style="padding-left:0px;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-10">
         <?php echo do_shortcode(get_field('TableShortcode')); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
