<?php

include('admin/pages/connect.php');


$product_name = $_POST['product_name'];
$filename = $_POST['filename'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$size = $_POST['size'];


if(!$quantity || !$size || !$product_name || !$price)
{
    $error = 'formerror';
    include('index.php');
    exit;
}
 $total_sum = $price * $quantity; 

?>

	<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dudu Vybez | Model, Singer, Songwriter, Producer, Entrepreneur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Model, Singer, Songwriter, Producer, Entrepreneur" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link rel="icon" href="images/logo2.png" />

	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- web-fonts -->

	<link href="//fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">
	<!-- //web-fonts -->
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="home">
		<!-- header -->
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="main-nav-agile-w3layouts">
				<!-- <div class="search">
					<form action="#" method="post">
						<input class="serch" type="search" name="serch" placeholder="Search here..." required="">
						<button class="btn1">
							<i class="fas fa-search"></i>
						</button>
						<div class="clearfix"> </div>
					</form>
				</div> -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Chronicle</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
							<a class="navbar-brand" href="index.php">
							<img src="images/vibeslogo.jpeg" alt="Your logo" title="Your logo" style="height:100px;" />
						</a>
					</div>
				</div>
				
        
    </a>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
					<ul class="nav navbar-nav navbar-right cl-effect-15">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden">
							<a class="page-scroll" href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="index.php">Home</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#about">Bio</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#team">Store</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#gallery">Gallery</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#latest">Latest Single</a>
						</li>

						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Drop Down
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#gallery" class="scroll">Gallery</a>
								</li>
								<li>
									<a href="#latest" class="scroll">Latest Single</a>
								</li>
								<li>
									<a href="#coming" class="scroll">Coming soon</a>
								</li>
								<li>
									<a href="#team" class="scroll">Store</a>
								</li>

							</ul>
						</li> -->
						<!-- <li>
							<a class="page-scroll" href="#testimonials">reviews</a>
						</li> -->
						<li>
							<a class="page-scroll" href="#contact">Contact</a>
						</li>

					</ul>

				</div>

				<!-- /.navbar-collapse -->

				<div class="clearfix"></div>
			</div>
			<!-- /.container -->
		</nav>
	</div>
    <!-- banner --><!-- banner -->
	<div class="banner_top_wthree_agileinfo">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="container">
						<div class="carousel-caption">
							<h3>Music is the shorthand of emotion.<br><h4>As inconsistent as the waves of emotions flow, they're always subject to the control of emotion.</h4></h3>
							



							<div class="bnr-button">
								<!-- <a class="act" href="single.php">Read More</a> -->
							</div>

						</div>
					</div>
				</div>
				<div class="item item2">
					<div class="container">
						<div class="carousel-caption">
							<h3>Touching heaven on frequency.<br><h4>While singing, you sometimes find that your soul has left beyond the aura of your body.</h4></h3>
							



							<div class="bnr-button">
								<!-- <a class="act" href="single.php">Read More</a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="item item3">
					<div class="container">
						<div class="carousel-caption">
							<h3>Creating reality from imagination. <br><h4>Of all that was built, the very first process had to be imagination.</h4></h3>
							



							<div class="bnr-button">
								<!-- <a class="act" href="single.php">Read More</a> -->
							</div>

						</div>
					</div>
				</div>
				<div class="item item4">
					<div class="container">
						<div class="carousel-caption">

							<h3>If music be the food of love, play on.<br><h4>At certain times, a song is the best expression you could possibly have about an emotion.</h4></h3>
							



							<div class="bnr-button">
								<!-- <a class="act" href="single.php">Read More</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!-- The Modal -->
		</div>
	</div>

	<div class="ab_content contact" id="contact">
		<div class="container">
			<h3 class="tittle_w3ls">Complete Your Order</h3>
			<div class="inner_sec_info_agile-w3ls">
				<h6>Please fill this form to complete your order.</h6>
				<div class="contcat-form-w3layouts">
					<form action="proc-order.php" method="post">
						<div class="user-tp">
							<label class="head">Name
								<span class="star"> * </span>
							</label>
							<input type="text" name="name" placeholder="" required="">
						</div>
						<div class="user-tp">
							<label class="head">Email
								<span class="star"> * </span>
							</label>
							<input type="email" name="email" placeholder="" required="">
						</div>
						<div class="user-tp">
							<label class="head">Phone
								<span class="star"> * </span>
							</label>
							<input type="text" name="phone" placeholder="" required="">
						</div>
						<div class="user-tp">
							<!-- <label class="head">Date
								<span class="star"> * </span>
							</label>
							<div class="book_date">
								<input id="datepicker" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
								    required="">
							</div> -->
						</div>
						<div class="user-tp">
							<!-- <label class="head">Time
								<span class="star"> * </span>
							</label>
							<div class="book_date">
								<input type="text" id="timepicker" name="Time" class="timepicker form-control" value="">

							</div> -->
						</div>
						<div class="clearfix"></div>
						
						<div class="user-tp frame">
							<label class="head">Address
								<span class="star"> * </span>
							</label>
							<textarea name="address" placeholder="" required=""></textarea>
						</div>

						<input type = "hidden" name="price" value ="<?php echo $price; ?>">
						<input type = "hidden" name="product_name" value ="<?php echo $product_name; ?>">
						<input type = "hidden" name="total_sum" value ="<?php echo $total_sum; ?>">
						<input type = "hidden" name="filename" value ="<?php echo $filename; ?>">
						<input type = "hidden" name="quantity" value ="<?php echo $quantity; ?>">
						<input type = "hidden" name="size" value ="<?php echo $size; ?>">


						<input type="submit" value="Complete Order">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- /footer -->
	<div class="social_footer">
		<div class="social-nav">
			<div class="col-md-3 ft">
				<a href="#">
					<span class="fab fa-facebook-f"></span>
				</a>
			</div>
			<div class="col-md-3 ft tweet">
				<a href="#">
					<span class="fab fa-twitter"></span>
				</a>
			</div>
			<div class="col-md-3 ft gm">
				<a href="#">
					<span class="fab fa-instagram"></span> 
				</a>
			</div>
			<div class="col-md-3 ft pin">
				<a href="#">
					<span class="fab fa-youtube"></span>
				</a>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //footer -->
	<div class="cpy-right-agile-w3ls">
		<p>© 2021 Dudu Vybez. All rights reserved | Design by
			<a href="http://aledoy.com"> Aledoy</a>
		</p>
	</div>
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<script type="text/javascript" src="js/all.js"></script>

	<!--search jQuery-->
	<script src="js/search.js"></script>
	<!--search jQuery-->
	<!-- Scrolling Nav JavaScript -->
	<script src="js/scroll_menu.js"></script>
	<!-- //fixed-scroll-nav-js -->

	<script>
		$(".hover").mouseleave(
			function () {
				$(this).removeClass("hover");
			}
		);
	</script>
	<!--//scripts-->
	<!-- js for portfolio lightbox -->
	<script src="js/jquery.chocolat.js "></script>
	<link rel="stylesheet " href="css/chocolat.css " type="text/css " media="screen ">
	<!--light-box-files -->
	<script type="text/javascript ">
		$(function () {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
	<!-- /js for portfolio lightbox -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- Time -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />

	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!-- //Time -->
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
<!-- js -->
<script type="text/javascript" src="js/simplyCountdown.js"></script>
<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
<script>
	var d = new Date();
	simplyCountdown('simply-countdown', {
		year: d.getFullYear(),
		month: d.getMonth() + 2,
		day: 25
	});
	simplyCountdown('simply-countdown-custom', {
		year: d.getFullYear(),
		month: d.getMonth() + 2,
		day: 25
	});
	$('#simply-countdown-losange').simplyCountdown({
		year: d.getFullYear(),
		month: d.getMonth() + 2,
		day: 25
	});
</script>
<!--js-->
	<!-- player -->
	<link rel="stylesheet" href="css/plyr.css" />
	<script src="js/html5media.min.js"></script>
	<script src="js/plyr.js"></script>
	<script src="js/index-player.js"></script>
	<!--// player -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
			    containerID: 'toTop', // fading element id
			    containerHoverID: 'toTopHover', // fading element hover id
			    scrollSpeed: 1200,
			    easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	<!-- //smooth-scrolling-of-move-up -->
	<script src="js/bootstrap.js"></script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>

</html>