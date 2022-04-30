<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Complete Website Using Bootstrap</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	<body>
		<?php include 'menu.php'; ?>
		<div class="jumbotron">
			<h1>I am WebDeveloper</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus vero quas itaque ipsam porro, maiores, eum blanditiis tenetur, minima, incidunt voluptatibus ea eos</p>
		</div>
		
		<section class="my-4">
			<div class="py-5">
				<h2 class="text-center">About Us</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<img src="bgimg1.jpg" class="img-fluid aboutimg">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<h2 class="display-4 py-2">I am Web Developer.</h2>
						<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis enim cupiditate accusamus officia minus, voluptatibus maiores dignissimos rem corporis pariatur iste quos esse? Blanditiis voluptas sit, eveniet aliquid veritatis, hic.</p>
						<a href="about.php" class="btn btn-outline-success">Check More</a>
					</div>
				</div>
			</div>
		</section>

		<footer>
		<p class="p-3 mb-0 bg-dark text-white text-center">@DavidProfessionalProduction</p>
	</footer>
	</body>
</html>