<?php include('head.php') ;?>
<body>
<?php include('nav.php') ;?>
	<div id="home">
		<a class="button" id="hamburger"><span id="hamburger-icon">&#9776;</span><span id="x-icon">X</span></a>
		<section id="welcome" class="orange">
			<div class="black small">
				<h1>Hello, I'm Myles</h1>
				<p>Welcome to my site. I design and develop websites, with other skills on the side.</p><br>
				<p>Scroll down to view <a href="#portfolio">my portfolio</a>, learn more about <a href="#what">what I do</a>, or <a href="#contact">contact me</a>.</p>
			</div>
		</section>
		<section id="portfolio">
			<div class="black">
				<h2 style="margin:0;">Here's my Portfolio</h2>
			</div>
			<div class="flexer">
				<figure>
					<a href="moodtunes">
						<img src="assets/moodtunes-thumb.jpg" alt="Moodtunes thumbnail">
						<figcaption><h4>moodtunes</h4></figcaption>
					</a>
				</figure>
				<figure>
					<a href="kregart">		
						<img src="assets/kregart-thumb.jpg" alt="Kreg-Art thumbnail">
						<figcaption><h4>KregArt</h4></figcaption>
					</a>
				</figure>			
				<figure>
					<a href="chord-generator">
						<img src="assets/chord-generator-thumb.jpg" alt="Chord-Generator thumbnail">
						<figcaption><h4>Chord Generator</h4></figcaption>
					</a>
				</figure>
			</div>
		</section>
		<section id="what" class="white">
			<div class="black medium">
				<h2>This is what I do</h2>
				<div class="flexer">
					<div class="left-border bottom-border-mob half">
						<p>My primary skillset is tied to <strong>front-end web development</strong>, which includes creating <strong>responsive, cross-browser designs</strong>, and then building them out from scratch. I also have some experience with <strong>back-end web development</strong>.</p><br>
						<p>Additionally, I have earned certification for multiple applications in the Adobe Suite and am capable of <strong>illustration, media manipulation, video editing</strong> and <strong>audio production</strong>.</p>
					</div>
					<div class="half">
						<div class="bottom-border bottom-border-mob">
							<h3>Web Development Tools</h3>
							<p>HTML5, CSS3, SASS, Javascript/jQuery, SQL, PHP, Bootstrap, Wordpress, Drupal, D2L</p>
						</div>
							<div>
							<h3>Other Media Tools</h3>
							<p>Adobe Illustrator, Adobe InDesign, Adobe Photoshop, Adobe Premiere, Logic, Garageband, Mixcraft</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact" class="orange">
			<div class="black small">
				<h2>Contact Me</h2>
				<p>If you'd like to inquire about my services, feel free to get in touch with me in one of the following ways:</p><br>	
				<div class="flexer bottom-border bottom-link">
					<div class="left-border bottom-border-mob half">
						<h3>email</h3>
						<p><a href="mailto:mealsmalloy@gmail.com">mealsmalloy<br>@gmail.com</a></p>
					</div>
					<div class="half bottom-border-mob">
						<h3>phone</h3>
						<p><a href="tel:778-919-8994">778-919-8994</a></p>
					</div>
				</div>
				<h4><a href="#welcome">Back to the top</a></h4>
			</div>
		</section>
	</div>
	<script>
		jQuery(document).ready(function ($) { 
			//SHOW WELCOME TEXT//
			$("#welcome .black").addClass("show");
			var referrer =  document.referrer;
			if(referrer.indexOf('http://localhost/1984-pumpkin/portfolio-item.php') != -1){
				$("#home").css("right","100vw");
				$("#home").addClass("shift-right");
			}

			//GO TO PORTFOLIO ITEM FUNCTION//
			$("#portfolio a").click(function(e){
				e.preventDefault();
				$link = $(this).attr("href");
				if ($("#home").hasClass("shift-right")) {
					$("#home").toggleClass("shift-right shift-left");
				}
				$("#home").addClass("shift-left");
				setTimeout(function(){
					window.location.href = "portfolio-item.php?" + $link;
				}, 500);
			});
		});
	</script>
</body>

</html>