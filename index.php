<!DOCTYPE html>
<html>
	<head>
		<title>Evan Dempsey</title>
		
		<!-- favicon bullshit >:( -->
		<link rel="icon" type="image/x-icon" href="/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Evan Dempsey">
		<meta name="description" content="Hello! I'm Evan Dempsey, a prospective software developer,
		and this website is where you can find my portfolio and resume.">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1 id="name"><span id="home"><span id="font">Evan Dempsey</span> <span id="slash">/</span> <span class="italics">Gentleman & Scholar</span></span></h1>
			<nav>
				<ul>
					<!--<li id="blog-button"><a href="blog.php">BLOG</a></li>-->
					<li><a href="#links">LINKS</a></li>
					<li><a href="#projects">PROJECTS</a></li>
					<li><a href="#about">MISSION</a></li>
				</ul>
			</nav>
		</header>
		<div id="container">
			<h2>Welcome.</h2>
			<figure id="me">
				<img src="images/george!.jpg" alt="A cartoon monkey thinking about a banana.">
				<figcaption>A portrait of the artist as a young monkey.</figcaption>
			</figure>
			<p class="cont-text">Hi! I'm Evan, and I am a recent college graduate looking for work as a software developer.</p>
			<p class="cont-text">On this website, you can find demos and links to some projects I've done. You can also download my
			<a href="resume.pdf" target="_blank">resume</a>.</p>
			<p class="cont-text">Feel free to contact me at <strong>evangd@umich.edu</strong>
			if you have any questions about my experience and/or aspirations.</p>
			<h2 id="about">My Goal</h2>
			<p class="cont-text">When I first enrolled at the University of Michigan, now my alma mater, my plan was to study
			computer science. Somewhere along the way, however, I decided to take a break from the coding grind and weigh my options.
			I left college with a dual degree in History and German, and minors in Computer Science and Creative Writing.</p>
			<p class="cont-text">After a year traveling the country and completing service projects with
			<a href="https://www.americorps.gov/serve/americorps/americorps-nccc" target="_blank">AmeriCorps NCCC</a>,
			and in search of place to begin my career, I have decided to return to the tech world and carve out a career
			as a programmer. </p>
			<p class="cont-text">In addition to the ~2 years of programming in <strong>C++</strong> that I did for my college coursework,
			I recently took an <a href="https://www.coursera.org/specializations/web-applications" target="_blank">online course</a> 
			that walked students through the development of a CRUD Web application
			using the <strong>LAMP</strong> stack. In order to sharpen old skills and acquire new ones,
			I'm doing daily LeetCode problems and looking for open-source projects to contribute to.</p>
			<h2 id="projects">Projects</h2>
				<ul>
					<li class="cont-text">This website! Everything you see is built in custom <strong>HTML</strong>,
					<strong>CSS</strong>, and <strong>JavaScript</strong>,
					with some <strong>PHP/WordPress</strong> integration on the way.</li>
				</ul>
				<p class="cont-text">Stay tuned for more.</p>
			<h2 id="links">Links</h2>
				<ul>
					<li class="cont-text"><a href="http://www.linkedin.com/in/evan-needs-a-job" target="_blank">LinkedIn</a></li>
					<li class="cont-text"><a href="https://github.com/evangd" target="_blank">GitHub</a></li>
					<li class="cont-text"><a href="resume.pdf" target="_blank">Resume</a></li>
				</ul>
		</div>
		<footer>
			<p>&copy; 2023 Evan Dempsey</p>
		</footer>
		<!-- JAVASCRIPT -->
		<script>
			document.getElementById('home').addEventListener('click', function() {
				window.scrollTo({top: 0, behavior: 'smooth'});
			});
		</script>
	</body>
</html>