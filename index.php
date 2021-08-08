<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Lucas Rouiller-Monay - Personal Website and Resume</title>

	<meta name="description" content="Lucas Rouiller-Monay | Personal Website and Resume">
	<meta name="author" content="Lucas Rouiller-Monay" />
	<link rel="canonical" href="https://lucasrouillermonay.dev" />

    <!-- Pages -->
    <script src="./js/pages/about.js"></script>

	<!-- AJAX Validation form -->
	<style>

	.error-input {
		border: 0.3em solid red;
	}

	/* form status */
	.error {
    	font-size: 1em;
    	color: red;
    	font-weight: 700;
    	text-align: center;
	}

	.success {
    	font-size: .5em;
    	color: green;
    	font-weight: 700;
    	text-align: center;
	}

	fieldset {
		margin-bottom: 2em !important;
	}

	</style>

	<!-- STYLESHEETS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="./css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<!--

  ,-.       _,---._ __  / \
 /  )    .-'       `./ /   \
(  (   ,'            `/    /|
 \  `-"             \'\   / |
  `.              ,  \ \ /  |
   /`.          ,'-`----Y   |
  (            ;        |   '
  |  ,-.    ,-'         |  /
  |  | (   |            | /
  )  |  \  `.___________|/
  `--'   `--'

What are you doing here ? 

-->

<body class="dark">

<!-- Preloader -->
<div id="preloader">
	<div class="outer">
		<!-- Google Chrome -->
		<div class="infinityChrome">
			<div></div>
			<div></div>
			<div></div>
		</div>

		<!-- Safari and others -->
		<div class="infinity">
			<div>
				<span></span>
			</div>
			<div>
				<span></span>
			</div>
			<div>
				<span></span>
			</div>
		</div>
		<!-- Stuff -->
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
			<defs>
				<filter id="goo">
					<feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
					<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
					<feBlend in="SourceGraphic" in2="goo" />
				</filter>
			</defs>
		</svg>
	</div>
</div>

<header class="desktop-header-3 fixed-top">

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="" style="font-weight: 700;">
				Lucas <span style="color: #FF4C60;">Rouiller-Monay</span>
			</a>
			<button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto scrollspy">
					<li class="nav-item"><a class="underline-animation nav-link" href="#home">Home</a></li>
					<li class="nav-item"><a class="underline-animation nav-link" href="#projects">Projects</a></li>
					<li class="nav-item"><a class="underline-animation nav-link" href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>

	</div>

</header>

<!-- main layout -->
<main class="content-3">

	<!-- section home -->
	<section id="home" class="home d-flex align-items-center">
		<div class="container">

			<!-- intro -->
			<div class="intro">
				<!-- avatar image -->
				<img src="./img/avatar.png" width="250px" height="250px" alt="Illustration of a character sit in front of a computer" class="mb-4" />

				<!-- info -->
				<h1 class="mb-2 mt-0" style="font-size: 2em;">Lucas Rouiller-Monay</h1>
				<p class="mb-0">I'm an apprentice as an IT-Specialist in Software Development at Groupe Mutuel</p>

				<!-- social icons -->
				<ul class="social-icons light list-inline mb-0 mt-4">
					<li class="list-inline-item"><a href="https://github.com/Heyimlulu" target="_blank" rel="noopener"><i class="fab fa-github"></i></a></li>
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/lucas-rouiller-monay/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
				</ul>

				<!-- buttons -->
				<div class="mt-4">
					<a href="#contact" target="_blank" class="btn btn-default btn-style">Contact me</a>
				</div>
			</div>

			<!-- parallax layers -->
			<div class="parallax" data-relative-input="true">

				<svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg"><path d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z" fill="#FFD15C" fill-rule="evenodd"/></svg>

				<svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg"><path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none" fill-rule="evenodd"/></svg>

				<svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg"><path d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z" fill="#44D7B6" fill-rule="evenodd"/></svg>

				<svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C" fill-rule="evenodd"/></svg>

				<svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"/></svg>

				<svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg"><g fill="#FF4C60" fill-rule="evenodd"><path d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z"/><path d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z"/></g></svg>

				<svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg"><path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none" fill-rule="evenodd"/></svg>

				<svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"/></svg>

				<svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9" xmlns="http://www.w3.org/2000/svg"><path d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z" fill="#6C6CE5" fill-rule="evenodd"/></svg>

				<svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg"><g fill="#44D7B6" fill-rule="evenodd"><path d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z"/><path d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z"/></g></svg>

				<svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg"><path d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z" fill="#FFD15C" fill-rule="evenodd"/></svg>

			</div>
		</div>

	</section>

<!-- section projects -->
<section id="projects">

	<div class="container">

		<!-- section title -->
		<h2 class="section-title wow fadeInUp">My Projects</h2>

		<div class="spacer" data-height="60"></div>

		<!-- portfolio filter (desktop) -->
		<ul class="portfolio-filter list-inline wow fadeInUp">
			<li class="current list-inline-item" data-filter="*">All</li>
			<li class="list-inline-item" data-filter=".personal-project">Personal Project</li>
			<li class="list-inline-item" data-filter=".orif-aigle">Orif (Aigle)</li>
		</ul>

		<!-- portfolio filter (mobile) -->
		<div class="pf-filter-wrapper">
			<select class="portfolio-filter-mobile">
				<option value="*">All</option>
				<option value=".personal-project">Personal Project</option>
				<option value=".orif-aigle">Orif (Aigle)</option>
			</select>
		</div>

		<!-- portolio wrapper -->
		<div class="row portfolio-wrapper">

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item personal-project">
				<a href="#small-dialog" class="work-content">
					<div class="portfolio-item rounded shadow-dark" style="background-color: #20c997;">
						<div class="details">
							<span class="term">Personal Project</span>
							<h4 class="title">RacoonBot#4764</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="img/works/1.svg" alt="Designed by stories / Freepik" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
					<h2>RacoonBot#4764</h2>
					<p>This is my first discord bot I created using the Discord.JS API only and Node.JS, but I released a new version of it using the Discord Akairo Framework. RacoonBot is a multipurpose bot for fun, general and utility commands.</p>
					<a href="https://top.gg/bot/734426328002068481" rel="noopener" class="btn btn-default btn-style">View on Top.gg</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item personal-project">
				<a href="#small-dialog-2" class="work-content">
					<div class="portfolio-item rounded shadow-dark" style="background-color: #FFD15C;">
						<div class="details">
							<span class="term">Personal Project</span>
							<h4 class="title">Paanya#9764</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="img/works/2.svg" alt="Designed by vectorjuice / Freepik" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="small-dialog-2" class="white-popup zoom-anim-dialog mfp-hide">
					<h2>Paanya#9764</h2>
					<p>This is my second discord bot using Discord.JS API, Discord Akairo Framework and Node.JS, it has over 100 commands and is in active development. Paanya is a multipurpose fun bot for discord : Moderation, Image manipulation, Minigames and Utilities</p>
					<a href="https://top.gg/bot/829230505123119164" rel="noopener" class="btn btn-default btn-style">View on Top.gg</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item orif-aigle">
				<a href="#small-dialog-3" class="work-content">
					<div class="portfolio-item rounded shadow-dark" style="background-color: #FF4C60;">
						<div class="details">
							<span class="term">Orif (Aigle)</span>
							<h4 class="title">Systems Backup</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="img/works/3.svg" alt="Designed by vectorjuice / Freepik" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="small-dialog-3" class="white-popup zoom-anim-dialog mfp-hide">
					<h2>Systems Backup</h2>
					<p>Provide a backup solution for servers (Active Directory & File Server) and the personal data of the users present in the IT section at Orif Aigle on a Synology NAS.</p>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item orif-aigle">
				<a href="#small-dialog-4" class="work-content">
					<div class="portfolio-item rounded shadow-dark" style="background-color: #6f42c1;">
						<div class="details">
							<span class="term">Orif (Aigle)</span>
							<h4 class="title">Auto Insurance Management</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="img/works/4.svg" alt="Freepik illustration" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="small-dialog-4" class="white-popup zoom-anim-dialog mfp-hide">
					<h2>Auto Insurance Management</h2>
					<p>An automobile insurance management application using the Spring Boot, Maven and Bootstrap frameworks</p>
				</div>
			</div>

		</div>

	</div>

</section>


	<!-- section contact -->
	<section id="contact">

		<div class="container">

			<!-- section title -->
			<h2 class="section-title wow fadeInUp">Contact</h2>

			<div class="spacer" data-height="60"></div>

			<div class="row">

				<div class="col-md-8 text-center mx-auto">

					<!-- Contact Form Status -->
					<span id="response-form"></span>

					<!-- Contact Form -->
					<form id="contact-form" class="contact-form mt-6">

						<div class="messages"></div>

						<div class="row">
							<fieldset class="column col-md-6">
								<!-- Name input -->
								<input type="text" class="form-control" name="name" id="name" value="" placeholder="Fullname"  tabindex="1" autofocus>
								<div class="error"></div>
							</fieldset>

							<fieldset class="column col-md-6">
								<!-- Email input -->
								<input type="email" class="form-control" id="email" name="email" value="" placeholder="E-Mail" tabindex="2">
								<div class="error"></div>
							</fieldset>

							<fieldset class="column col-md-12">
								<!-- Subject input -->
								<input type="text" class="form-control" id="subject" name="subject" value="" placeholder="Subject" tabindex="3">
								<div class="error"></div>
							</fieldset>

							<fieldset class="column col-md-12">
								<!-- Message textarea -->
								<textarea class="form-control" id="message" name="message" value="" rows="5" placeholder="Message" tabindex="4"></textarea>
								<div class="error"></div>
							</fieldset>

							<div>
								<!-- Google ReCaptcha field -->
								<input type="hidden" id="recaptchaResponse" name="recaptcha-response">
							</div>
						</div>

						<button id="contact-submit" name="submit" type="submit" class="btn btn-default">Submit</button>

					</form>

				</div>

			</div>

		</div>

	</section>

	<div class="spacer" data-height="96"></div>

</main>

<footer>
	<p class="text-center" style="font-size: .6em;margin: 2em;">
		Template by <a href="https://themeforest.net/user/jthemes/portfolio" target="_blank">Jthemes</a>

		<span style="margin: 0 3px;"> | </span>

		Redesign by <a href="" target="">&copy; Lucas Rouiller-Monay</a>
	</p>
</footer>

<!-- Javascript code for ReCaptcha verification -->
<script src="https://www.google.com/recaptcha/api.js?render=6LeOHPoZAAAAAPVZ7ueeIdDvJw70-rLxDd3O9Scp"></script>
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LeOHPoZAAAAAPVZ7ueeIdDvJw70-rLxDd3O9Scp', {action: 'homepage'}).then(function(token) {
			document.getElementById('recaptchaResponse').value = token
		});
	});
</script>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/2.1.0/jquery.infinitescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.6.0/validator.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Morphext/2.4.4/morphext.min.js"></script>
<script src="./js/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="./js/custom.js"></script>
<script src="./js/dizzy.js"></script>
<script srx="./js/ajax.js"></script>

</body>

</html>
