<?php wp_footer(); ?>

<div class="footerContainer">
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6 col-md-2">
			<?php
			if(is_active_sidebar('footer-sidebar-1')){
			dynamic_sidebar('footer-sidebar-1');
			}
			?>
		</div>

		<div class="col-12 col-sm-6 col-md-2">
			<?php
			if(is_active_sidebar('footer-sidebar-2')){
			dynamic_sidebar('footer-sidebar-2');
			}
			?>
		</div>

		<div class="col-12 col-sm-6 col-md-2">
			<?php
			if(is_active_sidebar('footer-sidebar-3')){
			dynamic_sidebar('footer-sidebar-3');
			}
			?>
		</div>

		<div class="col-12 col-sm-6 col-md-2">
			<?php
			if(is_active_sidebar('footer-sidebar-4')){
			dynamic_sidebar('footer-sidebar-4');
			}
			?>
		</div>

		<div class="col-12 col-sm-6 col-md-2">

		</div>

		<div class="col-12 col-sm-6 col-md-2" style="padding-right:0px;">
			<?php
			if(is_active_sidebar('footer-sidebar-5')){
			dynamic_sidebar('footer-sidebar-5');
			}
			?>
		</div>
	</div>


	<div class="row copyrightRow" style="padding-top: 125px;">
		<div class="col-12 col-lg-8">
			<?php
			if(is_active_sidebar('footer-sidebar-6')){
			dynamic_sidebar('footer-sidebar-6');
			}
			?>
		</div>
	</div>
</div>
</div>
</body>
</html>