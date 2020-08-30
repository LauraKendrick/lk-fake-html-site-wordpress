<?php /* Template Name: Allblogposts */ ?>
<?php get_header(); ?>


<style>
body {
	background-color: #F6F0BA;
}
</style>

<div class="pageTitle">
    <h1><?php echo get_the_title();?></h1>
</div>

<div class="et_pb_row">
<div class="pageContent">
	<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
        ?>
        <div class="pageFeaturedImage">
        <?php
         the_post_thumbnail();
         ?>
         </div>
         <?php
            the_post();
            the_content(); 
        }
        }
?>
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
        
        <div class="postsTable">
        <table>
            <tr>
                <td class="thumbnailImage"><?php the_post_thumbnail();?></td>
            </tr>
            <tr class="blogTitle">
                <td><h3><?php the_title(); ?></h3></td>
            </tr>
            <tr>
                <!--<td><i id="dataPublished" class="fa fa-calendar"></i>&nbsp;&nbsp;<?php the_date(); ?></td>-->
            </tr>
            <tr>
                <td class="blogExpert"><p><?php the_excerpt(); ?></p></td>
            </tr>
        </table>
        </div>
 
<?php

}
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>
</div>


<?php get_footer(); ?>
