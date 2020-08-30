<?php /* Template Name: Pricing */ ?>

<?php get_header(); ?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="post" class="featuredImage2" style="background-image: url('<?php echo $thumb['0'];?>')">
</div>

<div class="navyContainer" id="quoteContainer">
<div class="container">
	<div class="row">
		<div class="col-1">
			<i class="fa fa-quote-left" style="font-size:50px;"></i>
		</div>
	<div class="col-10" id="bookQuote">
	<h2 style="text-align: center;"><?php echo do_shortcode(get_field('book_quote')); ?></h2>
	</div>

			<div class="col-1">
				<i class="fa fa-quote-right" style="font-size:50px;"></i>
		</div>
	</div>
</div>

	<div class="container">
    <div class="row">
        <div class="col-12" style="color:white;">
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
</div>

<div class="blueDivider" style="background-color: #111C40;">
	<img src="http://localhost/harrypotter/wp-content/uploads/2020/07/creamDivider.png" style="width:100%;">
</div>

<div class="blueContainer" style="background-color:#F6F0BA;">
<div class="container">
	<div class="row">
		<div class="col-12 col-md-6">
			<h2>Key moments in the books</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6">
			<img class="bookImages" src="<?php echo do_shortcode(get_field('imageone')); ?>">
		</div>

		<div class="col-12 col-md-6" style="padding-top: 20px;">
			<h4><?php echo do_shortcode(get_field('headingone')); ?></h4>
			<p><?php echo do_shortcode(get_field('textone')); ?></p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-md-6">
			<img class="bookImages" src="<?php echo do_shortcode(get_field('imagetwo')); ?>">
		</div>

		<div class="col-12 col-md-6" style="padding-top: 20px;">
			<h4><?php echo do_shortcode(get_field('headingtwo')); ?></h4>
			<p><?php echo do_shortcode(get_field('texttwo')); ?></p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-md-6">
			<img class="bookImages" src="<?php echo do_shortcode(get_field('imagethree')); ?>">
		</div>

		<div class="col-12 col-md-6" style="padding-top: 20px;">
			<h4><?php echo do_shortcode(get_field('headingthree')); ?></h4>
			<p><?php echo do_shortcode(get_field('textthree')); ?></p>
		</div>
	</div>
</div>
</div>


<div class="blueDivider" style="background-color: #F6F0BA;">
	<img src="http://localhost/harrypotter/wp-content/uploads/2020/07/greyDivider-1.png" style="width:100%;">
</div>

<div class="greyContainer">
<div class="container">
	<div class="row">
		<div class="col-12">
			<h3>Book Stats</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-md-6">
			<p><strong>Year published: </strong><?php echo do_shortcode(get_field('datepublished')); ?></p>
			<p><strong>Number of pages: </strong><?php echo do_shortcode(get_field('numberpages')); ?></p>
			<p><strong>Copies sold: </strong><?php echo do_shortcode(get_field('copiessold')); ?></p>
		</div>
		<div class="col-12 col-md-6">
			<p><strong>Awards won: </strong><?php echo do_shortcode(get_field('awardswon')); ?></p>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?> 