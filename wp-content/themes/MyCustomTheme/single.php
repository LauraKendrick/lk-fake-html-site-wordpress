
<?php /*
 * Template Name: Featured Article
 * Template Post Type: post
*/
?>

<style>
    .blogFeaturedImage img {
        width: 100%;
    }

    #featuredImage123 {
        width: 100%;
        height: auto;
    }

    #fullWidthHeaderImage {
        width: 100%;
        margin-left: 0;
        margin-right: 0;
    }
</style>
<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="post" class="featuredImage2" style="background-image: url('<?php echo $thumb['0'];?>')">
</div>

<div class="blueDivider" style="background-color: #111C40;">
	<img src="http://localhost/harrypotter/wp-content/uploads/2020/07/creamDivider.png" style="width:100%;">
</div>

<div class="blueContainer" style="background-color:#F6F0BA;">
<div class="container">
    <div class="row">
        <div class="col-12">
           <h1> <?php the_title(); ?> </h1>
            <div class="postDate"><i class='fa fa-calendar' style='font-size:20px;'></i><?php echo get_the_date(); ?></div>
            <div class="postAuthor"><i class='fa fa-calendar' style='font-size:20px;'></i><?php echo get_the_author(); ?></div>
        </div>
        <div class="col-12" id="blogPostImage">
            <?php the_content(); ?>
</div>
</div>
</div>


<?php endwhile; ?>
<?php endif; ?>

<div class="blueDivider" style="background-color: #F6F0BA;">
	<img src="http://localhost/harrypotter/wp-content/uploads/2020/07/greyDivider-1.png" style="width:100%;">
</div>

<div class="greyContainer">
<div class="container">
	<div class="row">
		<div class="col-12">
			<h3>Read our latest news</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-6">
      <?php previous_post_link(); ?> 
</div>   

		<div class="col-6" style="text-align:right;">
      <?php next_post_link(); ?>    
    </div>

	</div>
</div>
</div>

<?php get_footer(); ?>