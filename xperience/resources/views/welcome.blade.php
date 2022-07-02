@extends('layouts.app')

@section('content')
<!doctype html>
<html>

<body>

	<!--Dashboard section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Ready For <br>your New Adventure?</h1>
			<p>“Don’t be that person who is too busy when you are young  <br> and then too tired when you are old.”</p>
			<a href="#" class="home-btn">Let's go now</a>
		</div>
	</section>

	<!--container--->
	<section class="container">
		<div class="text">
			<h2>Start Your Vacation <br> with Lots of Services!</h2>
		</div>

		<div class="row-items">
			<div class="container-box">
				<div class="container-img">
					<img src="img/trip1.png">
				</div>
				<h4>Ship Cruises</h4>
				<p>150 Properties</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img src="img/trip2.png">
				</div>
				<h4>Food Tours</h4>
				<p>150 Properties</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img src="img/trip3.png">
				</div>
				<h4>Summer Rest</h4>
				<p>150 Properties</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img src="img/trip4.png">
				</div>
				<h4>Mountains Tours</h4>
				<p>150 Properties</p>
			</div>

		</div>
	</section>

	<!--Package section--->
	<section class="package" id="package">
		<div class="title">
			<h2>Our Upcoming <br> Tour Package</h2>
		</div>

		<div class="package-content">
			<div class="box">
				<div class="thum">
					<img src="img/img1.png">
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>London</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<img src="img/img2.png">
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>New York</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<img src="img/img3.png">
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>Dubai</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!--destination section--->
	<section class="destination" id="destination">
		<div class="title">
			<h2>Our Most Popular <br> Destination!</h2>
		</div>

		<div class="destination-content">
			
			<div class="col-content">
			<a href="{{route('checkout.create', 'komodo-island')}}">
				<img src="img/img-1.jpg">
				<h5>Komodo Island</h5>
				<p>Nusa Tenggara</p>
			</a>
			</div>

			
			<div class="col-content">
			<a href="{{route('checkout.create', 'jomblang-cave')}}">
				<img src="img/img-2.jpg">
				<h5>Jomblang Cave</h5>
				<p>Yogyakarta</p>
			</a>
			</div>
			
			<div class="col-content">
				<img src="img/img-3.jpg">
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<img src="img/img-4.jpg">
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<img src="img/img-5.jpg">
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<img src="img/img-6.jpg">
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

		</div>
	</section>

	<!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe for more Amazing Discounts and <br> Free Trips</p>
		</div>

		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">98 West 21th Street</a></li>
						<li><a href="#">New York NY 10016</a></li>
						<li><a href="#">+1(123)-456-7890</a></li>
						<li><a href="#">info@mydomain.com</a></li>
						<li><a href="#">+1(123)-456-7890</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook' ></i></a>
						<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#"><i class='bx bxl-twitter' ></i></a>
						<a href="#"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2022 All rights reserved | Made by Andrew Z</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
@endsection