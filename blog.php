<?php include('perch/runtime.php'); ?>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NEST | Blog</title>
	<meta name="description" content="Website for King's College father's mental health study Nest">
	<meta name="author" content="James Bristow">
	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Libre+Baskerville:400,400i,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800i" rel="stylesheet">

</head>

<body>
	<header class="main-header">
		<div class="topNav absoluteNav">
			<img class="logo" src="images/nestLogoWhite.svg">
			<div class="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="selected"><a href="index.php">Blog</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="participants.html">Participate</a></li>
					<li><a href="team.html">Team</a></li>
					<li><a href="resources.html">Resources</a></li>
				</ul>
			</div>
		</div>
		<div class="topNav navigation fixedNav hidingNav">
			
			<img class="emailIcon" src="images/email.svg">
			<p class="emailAddress"><a href="mailto:sharin.baldwin@kcl.ac.uk">sharin.baldwin@kcl.ac.uk</a></p>
			<div>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="selected"><a href="index.php">Blog</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="participants.html">Participate</a></li>
					<li><a href="team.html">Team</a></li>
					<li><a href="resources.html">Resources</a></li>
				</ul>
			</div>
		</div>
		<button class="menuButton">Menu</button>

	</header>


	<div class="content">
		<div class="clearfix">
			<div class="hero postHero">
			</div>
		</div>
	</div>
	<div class="blogMainTitle">
		<p class="subheader">Our News</p>
	</div>
	<div class="blogContainer backgroundPink">
		<?php perch_blog_custom([
				'sort'=>'postDateTime',
				'sort-order'=>'DESC',
				'template'=>'blog/homepage_post_in_list.html',
				'count'=>'100'
			]);
		?>
	</div>	
	<div class="overlay noClick">
		<div class="exit">
			<span>x</span>
		</div>
		<div class="modalNav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="participants.html">Participate</a></li>
				<li><a href="team.html">Team</a></li>
				<li><a href="resources.html">Resources</a></li>
			</ul>
		</div>
	</div>
	<footer class="main-footer">
		<img class="logo logo1" src="images/nhsLogo2.png">
		<img class="logo logo2" src="images/nhsLogo3.png">
		<button class="menuButton menuButton2">Menu</button>
	</footer>
	
	<script src="js/scripts.js"></script>

</body>
</html>