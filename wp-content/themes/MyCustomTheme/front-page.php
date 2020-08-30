<?php /* Template Name: homepage */ ?>
<?php get_header(); ?>

<div class="fullwidthImage">
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
</div>
 
<div class="container topIcons">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-3" id="iconLeft">
			<div class="imgBackground">
				<img src="<?php echo do_shortcode(get_field('segmenticon')); ?>">
			</div>
			<p style="float:left;"><strong>Segment</strong> your data effectively</p>
		</div>

		<div class="col-12 col-lg-3" id="iconCenter" >
			<div class="imgBackground">
			<img src="<?php echo do_shortcode(get_field('distributeicon')); ?>">
		</div>
		<p><strong>Distribute</strong> tasks to your team</p>
		</div>

		<div class="col-12 col-lg-3" id="iconRight">
			<div class="imgBackground">
			<img src="<?php echo do_shortcode(get_field('manageicon')); ?>">
		</div>
		<p><strong>Manage</strong> your workflow</p>
	</div>
	</div>
</div>


<div class="container imageText firstImageText">
	<div class="row">
	<div class="col-12 col-lg-6 textColumn">
			<h2><?php echo do_shortcode(get_field('increasedoutputtext')); ?></h2>
			<p><?php echo do_shortcode(get_field('increasedoutputbody')); ?></p>
		</div>
		<div class="col-12 col-lg-6">
			<img src="<?php echo do_shortcode(get_field('increasedoutputimage')); ?>">
		</div>
	</div>
</div>

<div class="GreyContainer">
<div class="container imageText secondImageText">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img src="<?php echo do_shortcode(get_field('earnrespectimage')); ?>">
		</div>

		<div class="col-12 col-lg-6">
			<h2><?php echo do_shortcode(get_field('earnrespecttext')); ?></h2>
			<p><?php echo do_shortcode(get_field('earnrespectbody')); ?></p>
		</div>
	</div>
</div>
</div>

<div class="container imageText thirdImageText">
	<div class="row">
	<div class="col-12 col-lg-6">
		<h2><?php echo do_shortcode(get_field('followdreamstext')); ?></h2>
		<p><?php echo do_shortcode(get_field('followdreamsbody')); ?></p>
		</div>
		<div class="col-12 col-lg-6">
			<img src="<?php echo do_shortcode(get_field('followdreamsimage')); ?>">
		</div>
	</div>
</div>


<?php get_footer(); ?>