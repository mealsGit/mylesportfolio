<?php include('head.php') ;?>
<?php
	$link =	$_SERVER['REQUEST_URI'];
	
	$selected_item = substr($link, strpos($link, "?") + 1);
	
	//$results = $mysqli->query("SELECT * FROM `myles-portfolio` WHERE hrefval = 'moodtunes'"); 
	
	$results = $mysqli->query("SELECT * FROM `myles-portfolio` WHERE hrefval = '" . $selected_item ."'"); 
	
	$portfolio_array = array();
	
	if ($results) {
		while ($portfolio = mysqli_fetch_assoc($results)) {
			$portfolio_array[] = $portfolio;
		}
	} else {
		print "Failure connecting to database!";
	}
	$portfolio_item = $portfolio_array[0];
	//print "<pre>";
	//print_r($portfolio_item);
	//print "</pre>";
	$trimmed_url = str_replace("http://","",$portfolio_item['url']);
	$trimmed_url = str_replace(".com/",".com",$trimmed_url);
?>
<body>
<?php include('nav.php') ;?>
<div id="portfolio-item">
	<a id="back" class="button" href="index.php"><span>&#8678;</span></a>
	<a class="button" id="hamburger"><span id="hamburger-icon">&#9776;</span><span id="x-icon">X</span></a>
		<section id="description">
			<div class="black large">	
				<h2><?php print ($portfolio_item['title']);?></h2>		
				<a href="<?php print ($portfolio_item['url']);?>" class="image"><img src="assets/<?php print ($portfolio_item['image'])?>" alt="<?php print ($portfolio_item['title']);?> Screenshot"></a>		
				<div class="flexer bottom-border bottom-link">
					<div class="left-border half bottom-border-mob">
						<h3>Background</h3>
						<?php print ($portfolio_item['background']);?>
					</div>
					<div class="half">
						<div class="bottom-border bottom-border-mob">
							<h3 style="margin-bottom:0;"><?php print ($portfolio_item['date']);?></h3>
						</div>
						<div class="bottom-border bottom-border-mob">
							<h3>Responsibilities</h3>
							<ul>
								<?php print ($portfolio_item['responsibilities']);?>
							</ul>
						</div>
						<div>
						<div class="bottom-border-mob">
							<h3>Tools Used</h3>
							<p><?php print ($portfolio_item['tools']);?></p>
						</div>
					</div>
				</div>
			</div>
			<h4 style="text-align:center;"><?php if (($portfolio_item['url'])!= ""){?>View <a href="<?php print ($portfolio_item['url']);?>"><?php print $trimmed_url;?></a> or <a href="index.php#portfolio">g<?}else{?><a href="index.php#portfolio">G<?}?>o back to my portfolio</a></h4>
		</section>
		<section id="portfolio">
			<div class="black">
				<h2 style="margin:0;">More of my Portfolio</h2>
			</div>
			<div class="flexer">
				<?php include('portfolio-thumbs.php') ;?>
			</div>
			<div class="black"></div>
		</section>
</div>
<script>
	jQuery(document).ready(function ($) { 
		$("#portfolio-item").addClass("shift-left");
		//BACK FUNCTION//
		$("#back").click(function(e){
			e.preventDefault();
			if ($("#portfolio-item").hasClass("shift-left")) {
				$("#portfolio-item").toggleClass("shift-right shift-left");
			}
			setTimeout(function(){
				window.location.href = "index.php";
			}, 500);
		});
		$("#portfolio div.flexer a").click(function(e) {
			e.preventDefault();
			if ($("#portfolio-item").hasClass("shift-left")) {
				$("#portfolio-item").toggleClass("shift-right shift-left");
			}
			$link = $(this).attr("href");
			setTimeout(function(){
				window.location.href = $link;
			}, 500);
		});
	});
</script>
</body>
</html>