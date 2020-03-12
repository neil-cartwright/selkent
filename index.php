<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Selkent ADI Group | Home</title>

<link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900" rel="stylesheet">
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js">')</script>
</script>
<script src="node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="node_modules/waypoints/src/shortcuts/inview.js"></script>
<script src="js/scripts.js"></script>

<!-- bootstrap javascript -->
<script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>

</head>
<body>
<?php include 'includes/navigation.php'; ?>
<?php include 'includes/jumbotron.php'; ?>
<?php include 'includes/modal.php'; ?>

<main class="page">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<section class="intro">
					<h2 class="intro-heading animated" style="display:block;">Welcome</h2>
					<p>The group is for local <strong>driving instructors</strong> and road safety professionals. It aims to alert <strong>ADIs and PDIs</strong> to changes in the driver training industry, both nationally and locally, and to provide relevant and topical information with regard to road safety and driver training.</p><p> The group also provides training seminars, and group members can benefit from discounts to related services. Group nights provide attendees with a chance to share ideas with local colleagues, influential road safety professionals, and DVSA representatives.</p>

					<p>Please do come along to a meeting and <strong>support your local association</strong>. You will be made very welcome by Ian and Wendy on the door.</p>

					<p><span class="glyphicon glyphicon-arrow-right animated" id="first-glyph"></span>Join the conversation on <a target="_blank" href="https://www.facebook.com/SelkentADIs">Facebook</a>. You can <strong>contact a member of the Committee </strong>by emailing <a href="mailto:info@selkentadi.co.uk">info@selkentadi.co.uk</a></p>
				</section>


				<article class="meetings" id="meetings">
					<h2 class="meetings-heading">Meetings </h2>

					<p><strong>Group meetings</strong> are held on the <strong>3rd Monday of alternate months</strong>.</p>

					<address>
						<ul class="address">
							<li><span class="glyphicon glyphicon-arrow-right"></span><a target="_blank" href="https://www.google.co.uk/maps/place/Charlton+Park+Rugby+Club/@51.466311,0.0339041,17z/data=!3m1!4b1!4m5!3m4!1s0x47d8a9b1da54e3f7:0x77a13100aa1b54f7!8m2!3d51.466311!4d0.0360928">Charlton Park Rugby Club</a> </li>
							<li>60A Broad Walk</li>
							<li>London</li>
							<li>SE3 8NB</li>
						</ul>
					</address>

					<p><a class="btn btn-info pull-right" href="#" data-toggle="modal" data-target="#myModal">When's the next meeting?</a></p>

				<?php require 'includes/table.php';?>

						<p><strong>Doors open at 7pm</strong>. Meetings start promptly at 7.30pm, so please arrive in plenty of time. Complimentary tea, coffee and biscuits are provided, and you'll be given a warm welcome by Ian and Wendy on the door.</p>

						<p>Meetings usually finish between 9pm and 9.30pm.</p>

						<p><strong>Payment</strong></p>
						<p>You can pay £5 to attend the meeting on the night, or join for £16 per year. This covers to cost of the hall hire plus guest speaker fees and admin costs.</p>
						<p>PDIs get in free. Just show your pink badge at the door.</p>
				</article>

				<section class="membership" id="membership">
					<h2 class="membership-heading">Membership</h2>
					<p>If you would like to join the group you can do this at one of the group nights. Alternatively you can pay online. The fee is £16 per year and entitles you to free entry to all 6 meetings of the year (saving £14).</p>
					<p><span class="glyphicon glyphicon-arrow-right"></span>If you would like to pay online now via paypal please click <a href="#" data-toggle="modal" data-target="#myPaymentModal">HERE</a></p>

					<p>For <strong>more information</strong> please <a href="mailto:info@selkentadi.co.uk">info@selkentadi.co.uk</a>.</p>

				</section>
			</div><!-- col-sm-8 -->

			<div class="col-sm-4">
				<aside class="sidebar">
					<figure>
						<img class="logo" src="images/learner-driver.jpg" alt="learner driver">
					</figure>
					<figure>
						<img class="logo" src="images/driving-test-centre.jpg" alt="learner driver">
					</figure>
					<figure>
						<img class="logo" src="images/debrief.jpg" alt="learner driver">
					</figure>
				</aside>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</main>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section class="code-of-conduct-logos">
				<aside class="foot-of-page-image">
					<figure class="larger-image">
						<img class="logo" src="images/cpd-logo.jpg" alt="continued professional development">
					</figure>
					<figure class="larger-image">
						<img class="logo" src="images/cop-logo.jpg" alt="code of practice">
					</figure>
				</aside>
			</section>
		</div>
	</div>
</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="container">
						<ul>
							<li>&copy SELKent ADI Group 2010 - <span id="time"></span></li>
							<li><a href="mailto:info@selkentadi.co.uk">info@selkentadi.co.uk</a></li>
							<li>Website by <a href="https://www.sitepages.co.uk">sitepages</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<script>
		var time = document.getElementById('time');
		var thisYear = new Date();
		time.innerHTML = thisYear.getFullYear();

	</script>
	<script src="js/smoothScroll.js"></script>
	<script>
		$(document).ready(function() {
			smoothScroll();
		});
	</script>
	<script src="js/showTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.big-learner-relay').on('click', function() {
				$('.big-learner-relay-details').slideToggle();

				var chev = $('h2.big-learner-relay-heading').find('span');
				console.log(chev);
				if( chev.hasClass('glyphicon-chevron-up') ) {
					chev.removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
				} else if( chev.hasClass('glyphicon-chevron-down')) {
					chev.removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
				}
			});//click
		});// ready
	</script>
</body>
</html>
