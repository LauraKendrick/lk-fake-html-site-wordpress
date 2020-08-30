<?php /* Template Name: homepage */ ?>
<?php get_header(); ?>

<div class="fullwidthImage" style="width:100%; max-width:100%;">
	<!--<img src="http://localhost/fakehtmlsite/wp-content/uploads/2020/08/Webathon_lumberjack-man.png" style="width:100%:">-->
	<div class="container">
    <div class="row">
        <div class="col-12" style="margin-top:110px;">
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
	</div>
 
<div class="container topIcons">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-3" id="iconLeft" style="padding-left:0px;">
			<div class="imgBackground">
				<img src="http://localhost/fakehtmlsite/wp-content/uploads/2020/08/Webathon_segment.png">
			</div>
			<p style="float:left;"><strong>Segment</strong> your data effectively</p>
		</div>

		<div class="col-12 col-lg-3" id="iconCenter" >
			<div class="imgBackground" style="margin:0 auto;">
			<img src="http://localhost/fakehtmlsite/wp-content/uploads/2020/08/Webathon_distribute.png">
		</div>
		<p style="margin:0 auto;"><strong>Distribute</strong> tasks to your team</p>
		</div>

		<div class="col-12 col-lg-3" id="iconRight" style="padding-right:0px;">
			<div class="imgBackground" style="float:right;">
			<img src="http://localhost/fakehtmlsite/wp-content/uploads/2020/08/Webathon_manage.png">
		</div>
		<p style="float:right;"><strong>Manage</strong> your workflow</p>
	</div>
	</div>
</div>


<div class="container imageText" style="padding-top:165px; height: 600px;">
	<div class="row">
	<div class="col-12 col-lg-6" style="margin: auto 0;">
			<h2><?php echo do_shortcode(get_field('increasedoutputtext')); ?></h2>
			<p style="padding-top:25px;"><?php echo do_shortcode(get_field('increasedoutputbody')); ?></p>
		</div>
		<div class="col-12 col-lg-6">
			<img src="http://localhost/fakehtmlsite/wp-content/uploads/2020/08/Webathon_tech-girl.png" style="width: 100%;">
		</div>
	</div>
</div>

<div class="GreyContainer">
<div class="container imageText" style="height:500px; padding-top: 90px;">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img src="http://localhost/fakehtmlsite/wp-content/uploads/2020/08/Webathon_family-around-computer.png" style="width: 100%;">
		</div>

		<div class="col-12 col-lg-6" style="margin: auto 0;">
			<h2><?php echo do_shortcode(get_field('earnrespecttext')); ?></h2>
			<p style="padding-top:25px;"><?php echo do_shortcode(get_field('earnrespectbody')); ?></p>
		</div>
	</div>
</div>
</div>

<div class="container imageText" style="padding-top:110px; height: 600px;">
	<div class="row">
	<div class="col-12 col-lg-6" style="margin: auto 0;">
		<h2><?php echo do_shortcode(get_field('followdreamstext')); ?></h2>
		<p style="padding-top:25px;"><?php echo do_shortcode(get_field('followdreamsbody')); ?></p>
		</div>
		<div class="col-12 col-lg-6">
			<img src="http://localhost/fakehtmlsite/wp-content/uploads/2020/08/Webathon_handshake.png" style="width: 100%;">
		</div>
	</div>
</div>


<?php get_footer(); ?>