<?php

	// include the file with all the search places
	include('./systems.php');

	if(isset($_GET['q'])) { // If a search has been done...
	
		// Save the query in a variab;e
		$q = $_GET['q']; 
		
		// And see if a particular system has been specified
		if(!isset($_GET['s'])) { // No
			// Pick a random number
			$select = rand(0, count($systems)-1);
		} else { // Yes
			$select = $_GET['s'];
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is My Search</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png" />
</head>

<body>

<div id="container">	
	<div class="line" id="banner">
		<div class="span3 unit left" id="logo">
			<h1><a href="/">This is My Search</a></h1>
		</div>
	
<?php
	if(isset($_GET['q'])) { 
		
	echo '<div class="twitter-share span3 unit right lastUnit">
			<a href="http://twitter.com/?status=I%20just%20searched%20for%20%27' . $q . '%27%3A%20http%3A%2F%2Fthisismysearch.com%2F%3Fq%3D' . str_replace(" ", "%2B", $q)  . '%26s%3D' . $select . '%20%23thisismysearch" class="lib-button-small">Share this on Twitter</a><br />
			<a href="/" class="new-search">Or, Try a New Search</a>
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

	echo '</div>
	<div id="body">';

	if(!isset($_GET['q'])) { // No search yet
?>

	<div class="line" id="teaser">
		<div class="span2of3 unit left">
			<h2 class="dark">Every librarian has a favorite search.</h2>
	
			<h2 class="light">What's yours?</h2>
		</div>
		<div class="span3 unit left lastUnit">
			<p style="text-align:center;margin-top:.75em;"><a href="https://twitter.com/search?q=%23thisismysearch&amp;f=realtime" class="lib-button">Explore Some Favorites</a></p>
		</div>
	</div>
	
	<div class="line" id="more-info">
		<div class="span3 unit left" id="bubble">
			<h3>Get out of your bubble</h3>
			
			<p>Try your favorite search somewhere new. We&#8217;ll pick a random library search tool for you.</p>
			
		</div>
		<div class="span3 unit left" id="refresh">
			<h3>Try and try again</h3>
			
			<p>Not happy with the results? Refresh the page and you&#8217;ll get another tool. Find the best one to share.</p>
			
		</div>
		<div class="span3 unit left" id="plus">
			<h3>Add your library's tools</h3>
			
			<p>Think your catalog or discovery service should be included? You can <a href="http://twitter.com/?status=%40ThisIsMySearch%20Please%20add%20my%20library%20to%20your%20silly%20website.%20Our%20URL%20is%3A">suggest we add it to our list</a>.</p>
		</div>
		
	</div>

<?php
		
	} else { 
		
		// There was a search. Show the results.
?>
		<div id="loading"><div><img src="img/loading.gif" /></div></div>
		<iframe id="results" src="<?php echo $systems[$select] . $q; ?>" onload="document.getElementById('loading').style.display='none'"></iframe>';
		
<?php	
	}
?>

	</div>
	
	<footer>
		<ul>
			<li><a href="https://github.com/mreidsma/thisismysearch#about">About</a></li>
			<li><a href="http://github.com/mreidsma/thisismysearch">Github</a></li>
			<li>Apologies to <a href="http://thisismyjam.com">This is My Jam</a></li>
		</ul>
	</footer>
</div>

</body>
</html>