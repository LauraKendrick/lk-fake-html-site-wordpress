<div class="et_pb_row">
<div class="pageContent">
	<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
        '<div id="blogFeaturedImage">'.
         the_post_thumbnail();
         '</div>';
         '<h1>'. the_title();'</h1>';
         '<i class="fa fa-calendar"></i>&nbsp;&nbsp' .the_date();
            the_post();
            the_content(); 
            //get_field('blogimage1');
            ?><img src="<?php the_field('blogimage1'); ?>" />
            <img src="<?php the_field('blogimage2'); ?>" />
            <img src="<?php the_field('blogimage3'); ?>" />
            <?php
        }
        }
?>
</div>
</div>



<table class="blogPostsTable">
  <tr>
 <td>
<a href="<?php the_permalink() ?>"><div class="blogFeaturedImage"><?php the_post_thumbnail(); ?></div></a>
</td>  
 </tr>


 <tr>
 <td>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</td>  
 </tr>
<tr>
 <td>
<a href="<?php the_permalink() ?> <p><i class='fa fa-calendar' style='font-size:100px;'"></i></p><?php the_date(); ?></div></a>
</td>  
 </tr>
 <tr>
<td><?php 
// Display the Post Excerpt
the_excerpt(__('(more�)')); ?></td>
  
 <tr>
 </table>
 