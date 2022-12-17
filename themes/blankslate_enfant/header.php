<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- font-family -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">	

<?php wp_head(); ?>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
		<div class="container-fluid">
			
			<a href="http://localhost:8888/planty_wp/"> <img src="http://localhost:8888/planty_wp/wp-content/uploads/2022/11/Logo.png" alt="" id="logo"> </a>
		  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		 	</button>
		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  	<?php 
					wp_nav_menu([
					'theme_location' => 'header',
					'container'=>false,
					'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0'
					]
					
					)
				?>
				<!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#">Accueil</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="#">Nous renconter</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Admin</a>
				</li> 
				</ul>  -->
				<button onclick="window.location.href= 'planty_wp/commander/';" class="button-commander"> Commander </button>	
		 	</div>
		</div>
	</nav>
