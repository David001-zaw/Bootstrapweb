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
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="bgimg1.jpg" class="d-block w-100" alt="Beautiful bg">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="bgimg2.jpg" class="d-block w-100" alt="Beautiful bg">
				<div class="carousel-caption">
					<h3>Chicago</h3>
					<p>Thank you, Chicago!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="bgimg3.jpg" class="d-block w-100" alt="Beautiful bg">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<section class="my-4">
		<div class="py-5">
			<h2 class="text-center">About Us</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-5 col-12">
					<img src="bgimg1.jpg" class="img-fluid aboutimg">
				</div>
				<div class="col-lg-6 col-md-7 col-12">
					<h1>I am Web Developer.</h1>
					<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis enim cupiditate accusamus officia minus, voluptatibus maiores dignissimos rem corporis pariatur iste quos esse? Blanditiis voluptas sit, eveniet aliquid veritatis, hic.</p>
					<a href="about.php" class="btn btn-outline-success">Check More</a>
				</div>
			</div>
		</div>
	</section>

	<section class="my-4">
		<div class="py-5">
			<h2 class="text-center">Our Services</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
						<img class="card-img-top" src="bgimg3.jpg" alt="Card image">
						<div class="card-body">
							<h4 class="card-title">Beautiful Nature</h4>
							<p class="card-text">Some example text.</p>
							<a href="#" class="btn btn-primary">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
						<img class="card-img-top" src="bgimg3.jpg" alt="Card image">
						<div class="card-body">
							<h4 class="card-title">Beautiful Nature</h4>
							<p class="card-text">Some example text.If there are many? how would you do? Lorem ipsum dolor sit amet.</p>
							<a href="#" class="btn btn-primary">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
						<img class="card-img-top" src="bgimg3.jpg" alt="Card image">
						<div class="card-body">
							<h4 class="card-title">Beautiful Nature</h4>
							<p class="card-text">Some example text.</p>
							<a href="#" class="btn btn-primary">See Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="my-4">
		<div class="py-5">
			<h2 class="text-center">Gallery</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="bgimg2.jpg" class="img-fluid pb-4">
				</div>
			</div>
		</div>
	</section>

	<section class="my-4">
		<div class="py-5">
			<h2 class="text-center">Contact Us</h2>
		</div>
		<div class="w-50 m-auto">
			<form action="userinfo.php" method="post" id="inputForm">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Email ID</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Comments</label>
					<textarea class="form-control" name="comments"></textarea>
				</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</section>

	<footer>
		<p class="p-3 mb-0 bg-dark text-white text-center">@DavidProfessionalWebsiteProduction</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>