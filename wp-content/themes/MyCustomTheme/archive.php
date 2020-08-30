<?php /*
 * Template Name: latestNews
 * Template Post Type: page
*/
?>

<style>
    .thumbnailImage img {
        width: 100%;
        height: auto;
    }
    </style>

<style>
body {
	background-color: #F6F0BA;
}
</style>

<?php get_header(); ?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="post" class="featuredImage2" style="background-image: url('<?php echo $thumb['0'];?>')">
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
    <h1><?php echo get_the_title();?></h1>
    <p>Have a read of our latest news</p>
</div>
</div>
</div>
<div class="blogContainer">
<?php
 
 $args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 10
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <div class="container">
        <div class="row" style="margin-bottom:25px;">
        <div class="col-12 col-md-6">
            <div class="thumbnailImage"><?php the_post_thumbnail();?></div>
        </div>
        <div class="col-12 col-md-6">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>"><p> Read more > </p></a>
        </div>
    </div>
    </div>
 
<?php

}
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>


<?php get_footer(); ?>
