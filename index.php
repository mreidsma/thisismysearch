<?php

	// include the file with all the search places
	include('./systems.php');

	if(isset($_GET['q'])) {
	
		$q = $_GET['q'];
		
		if(!isset($_GET['s'])) {
			// Pick a random number
			$select = rand(0, count($systems)-1);
		} else {
			$select = $_GET['s'];
		}
	
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>This is My Search</title>
	<style>
	html, body, div, span, applet, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	a, abbr, acronym, address, big, cite, code,
	del, dfn, em, img, ins, kbd, q, s, samp,
	small, strike, strong, sub, sup, tt, var,
	b, u, i, center,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td,
	article, aside, canvas, details, embed, 
	figure, figcaption, footer, header, hgroup, 
	menu, nav, output, ruby, section, summary,
	time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}
	/* HTML5 display-role reset for older browsers */
	article, aside, details, figcaption, figure, 
	footer, header, hgroup, menu, nav, section {
		display: block;
	}
	body {
		line-height: 1;
	}
	ol, ul {
		list-style: none;
	}
	blockquote, q {
		quotes: none;
	}
	blockquote:before, blockquote:after,
	q:before, q:after {
		content: '';
		content: none;
	}
	table {
		border-collapse: collapse;
		border-spacing: 0;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="http://gvsu.edu/cms3/assets/741ECAAE-BD54-A816-71DAF591D1D7955C/libui.css" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
	
	<style>
		body { font-family: helvetica, verdana, arial, sans-serif;margin:0;padding:0; background-color: #f2f2f2;}
		a {color: #00528D; }
		#banner { background-color: #000; width: 100%;}
		#banner #logo { padding: 0 .5em !important;}
		h1 { font-size: 1.85em;font-family: 'Ubuntu', sans-serif; text-transform:uppercase; margin-left: 1em; color: #fff; padding-top: .6125em;}
		h1 a { text-decoration: none; color: #fff;}
		.twitter-share { padding-top: 1em; text-align:right;}
		form { margin: 1em auto !important;}
		.lib-simple-form input[type="text"] { width: 72% !important; }
		label { display:none;}
		.new-search { color: #ddd; margin-top: .6em; display:inline-block;font-size: .8125em;}
		#results { width: 100%; height: 600px; border: 0;}
		h2 { font-size: 1.8em;}
		h2, h3 { font-weight: bold; background-color: #f2f2f2;}
		h3 { font-size: 1.6em; text-align: center; color: #00528D;}
		h2.light { color: #00528D;}
		h2.dark { color: #333;margin-bottom: .6125em;}
		#teaser { margin: 6% auto;width: 94%; }
		#more-info { width: 94%; margin: 0 auto;}
		#more-info div.span3 { padding-top: 5.25em;}
		#refresh { background: url(img/refresh.png) top center no-repeat;}
		#plus {background: url(img/plus.png) top center no-repeat; }
		#bubble {background: url(img/bubble.png) top center no-repeat; }
		footer { width: 100%; background-color: #444; color: #ddd; padding: .6em 0; margin: auto; margin-top: 1em;text-align:center;font-size: .8125em;}
		footer ul { list-style: none;}
		footer a { color: #ddd;}
		#banner div.left,
		#teaser div.left { float: none;}
		#banner h1 { text-align: center;}
		#banner div.span2of3,
		#teaser div.span2of3 { margin: 0 auto; }
		#teaser div.span2of3 { width: 90%; }
		#banner div.span3,
		#teaser div.span3 { width: 100%; }
		@media screen and (min-width: 43em) {
			#teaser div.span2of3 { width: 70%; }
			h2 { font-size: 2em;}
		}
		@media screen and (min-width: 62.55em) {
			.lib-simple-form input[type="text"] { width: 80% !important;}
			#banner #logo { padding: .5em !important;}
			#banner h1 { text-align: left;}
			#banner div.span3,
			#teaser div.span3 { width: 32%; }
			#banner div.left,
			#teaser div.left { float: left;}
			#banner div.span2of3,
			#teaser div.span2of3 { width: 64%; }
		}
	</style>
	
</head>

<body>
	
	<div class="line" id="banner">
		<div class="span3 unit left" id="logo">
			<h1><a href="index.php">This is My Search</a></h1>
		</div>
	
<?php
	if(isset($_GET['q'])) { 
		
	echo '<div class="twitter-share span3 unit right lastUnit">
			<a href="http://twitter.com/?status=I%20just%20searched%20for%20' . $q . '%3A%20http%3A%2F%2Fthisismysearch.com%2F%3Fq%3D' . $q . '%26s%3D' . $select . '%20%23thisismysearch" class="lib-button-small">Share this on Twitter</a><br />
			<a href="index.php" class="new-search">Or, Try a New Search</a>
			</div>';

} else {
	
	?>
	<div class="span2of3 unit left lastUnit">
		<form action="" class="lib-simple-form" method="get">
			<div>
			<label for="search">Enter Your Search</label>
			<input type="text" id="search" name="q" placeholder="What's your favorite search?"/>
			<input class="lib-button-small-grey" type="submit" style="margin-bottom: 0;float:right;margin-right:.25em;margin-top:.25em;" value="Search" />
			</div>
		</form>
	</div>

	<?php
}

	echo '</div>';

	if(!isset($_GET['q'])) { // No search yet
?>

	<div class="line" id="teaser">
		<div class="span2of3 unit left">
			<h2 class="dark">Every librarian has their favorite search.</h2>
	
			<h2 class="light">What's yours?</h2>
		</div>
		<div class="span3 unit left lastUnit">
			<p style="text-align:center;"><a href="https://twitter.com/search?q=%23thisismysearch&amp;f=realtime" class="lib-button">Explore More Favorites</a></p>
		</div>
	</div>
	
	<div class="line" id="more-info">
		<div class="span3 unit left" id="bubble">
			<h3>Get out of your bubble</h3>
			
			<p>Try your favorite search in someone else&#8217;s tool. We&#8217;ll pick a random library search tool for you.</p>
			
		</div>
		<div class="span3 unit left" id="refresh">
			<h3>Try and try again</h3>
			
			<p>Not happy with your results? Refresh the page and you&#8217;ll get another tool. Find the best one to share.</p>
			
		</div>
		<div class="span3 unit left" id="plus">
			<h3>Add your library's tools</h3>
			
			<p>Think you&#8217;re catalog or discovery service should be included? You can <a href="http://twitter.com/?status=%40ThisIsMySearch%20Please%20add%20my%20library%20to%20your%20silly%20website.%20Our%20URL%20is%3A">suggest we add it to our list</a>.</p>
		</div>
		
	</div>


<?php
		

	} else { // There was a search
		
	// Let's pick one of the search systems
		
		echo '<iframe id="results" src="' . $systems[$select] . $q . '"></iframe>';
		
		
		
		
?>

<?php
	}
?>
	
	<footer>
		<p>Built by <a href="http://twitter.com/TheRealArty">Cynthia Ng</a> and <a href="http://twitter.com/mreidsma">Matthew Reidsma</a> at the bar after <a href="http://libtechconf.com">Library Technology Conference 2014</a>.</p>
		<p>Thought up with Chris Schommer, <a href="http://codyhanson.com">Cody Hanson</a>, <a href="http://twitter.com/johnwchapman">John Chapman</a>, and Ben Durrant. Apologies to <a href="http://thisismyjam.com">This is My Jam</a>.</p>
	</footer>

</body>
</html>