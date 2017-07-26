<?php include('perch/runtime.php'); ?>
<?php
	$post_slug = perch_get('s');
?>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Fathers Mental Health</title>
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
		<div class="firstBar clearfix infoBar">
			<div class="firstBarText">
				<?php perch_blog_post($post_slug); ?>
				<div style="height: 50px;"></div>
		    	<a href="blog.php" class="button4" style="margin:0;">MORE POSTS</a>
				<!-- <div style="height: 50px;"></div> -->
			</div>
			<div class="survey">
				<div class="healthVisitors">
					<p><a href="participants.html#forHealthVisitors"><strong>Click here</strong> if you are a <i>health visitor</i> wishing to participate</a></p>
				</div>
				<div class="wrapper">
					<img src="images/surveyClipboard.svg">
					<!-- <h2>PARTICIPATE IN THE STUDY</h2> -->
					<div class="horizLine"></div>
					<p>This website presents the background and aims of a study that is being carried out in London. If you are a new dad (within one year of the birth of your first child) or you are about to become a new dad, and live in the London boroughs of Lambeth, Southwark, Ealing, Brent or Harrow you may be able to take part and contribute to this study.</p>
					<a href="participants.html" class="button2">PARTICIPATE</a>
				</div>
			</div>
		</div>
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




