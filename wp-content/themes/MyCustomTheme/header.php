<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php wp_head();?>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/b8ec4f6d51.js"></script>

	<div class="fullWidthHeader">
	<div class="container">
		<div class="row">
			<div class="col-6" style="display:flex;">
				<div class="logoContainer" style="">
					<img style="width: 190px; padding-bottom: 10px;" src="wp-content/uploads/2020/08/Webathon_logo.png" style="float:left; width: 180px;">
				</div>
			</div>
			
				
			<div class="col-6">
			<div class="menuContainer">
            <?php
			wp_nav_menu( array( 
				'theme_location' => 'primary-menu', 
				'container_class' => 'custom-menu-class' ) ); 
			?>

			</div>
			</div>
	</div>
	</div>
			</div>
</head>

<body>
