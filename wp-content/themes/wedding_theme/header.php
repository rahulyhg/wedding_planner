<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- <?php echo get_bloginfo( 'name' ); ?> -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead center-block">
		<div class="container">
			<img class='center-block' src="" alt="Header" style='width: 800px; height: 245px; margin-top: 80px;' />
		</div>
		<div class="container center-block">
			<div class="row">
				<nav class="blog-nav text-center">
					<a class="blog-nav-item active" href="/#">Home</a>
					<?php wp_list_pages( '&title_li=' ); ?>
				</nav>

			</div>
		</div>
	</div>
