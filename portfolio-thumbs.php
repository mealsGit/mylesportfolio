<?php 
	$link =	$_SERVER['REQUEST_URI'];
	//print $link; 
	$selected_item = substr($link, strpos($link, "?")); 
	$selected_item = str_replace("?","",$selected_item);
	print $selected_item;
	foreach ($thumb_results as $thumb_data) {
		if (strpos($link, $selected_item) == true) {
			//print "This is a portfolio page";
			$thumb_url = "portfolio-item.php?" . $thumb_data['hrefval'];
			print $thumb_url;
		} else {
			$thumb_url = $thumb_data['hrefval'];
		}
		if ($thumb_data['hrefval'] != $selected_item) {
			print "<figure><a href='" . $thumb_url . "'><img src='assets/" . $thumb_data['hrefval'] . "-thumb.jpg' alt='". $thumb_data['title'] . "thumbnail'><figcaption><h4>" . $thumb_data['title'] . "</h4></figcaption></a></figure>";
		}
	};
?>
