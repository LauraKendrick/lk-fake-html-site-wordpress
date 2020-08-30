<?php /* Template Name: ContactUs */ ?>
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
        <div class="col-10">
         <?php echo do_shortcode(get_field('TableShortcode')); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
