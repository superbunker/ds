<html>
<head>

	<meta charset="utf-8" />
	<title>Dream Shit</title>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="/juice/responsiveslides.min.js"></script>

	
	<script>
	$(function() {
	  
		$("#slides1").responsiveSlides({
			auto: true,             // Boolean: Animate automatically, true or false
			speed: 3000,            // Integer: Speed of the transition, in milliseconds
			timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			pager: false,           // Boolean: Show pager, true or false
			nav: false,             // Boolean: Show navigation, true or false
			random: true,          // Boolean: Randomize the order of the slides, true or false
			maxwidth: 9000,           // Integer: Max-width of the slideshow, in pixels


		});
		
		$("#slides2").responsiveSlides({
			auto: true,             // Boolean: Animate automatically, true or false
			speed: 7000,            // Integer: Speed of the transition, in milliseconds
			timeout: 8000,          // Integer: Time between slide transitions, in milliseconds
			pager: false,           // Boolean: Show pager, true or false
			nav: false,             // Boolean: Show navigation, true or false
			random: true,          // Boolean: Randomize the order of the slides, true or false
			maxwidth: 800,           // Integer: Max-width of the slideshow, in pixels
		});
		
	});
	</script>


	<link rel="stylesheet" href="styles.css">


<?php include $_SERVER['DOCUMENT_ROOT'] . '/juice/header.php' ; ?>


<META HTTP-EQUIV="REFRESH" CONTENT="60">
</head>
<body bgcolor="#000" background="/images/rotate.php">


<ul id="slides1" class="rslides">

<?php 
	function random_file1($dir = 'gifs')
	{
		$files = glob($dir . '/*.*');
		$file = array_rand($files);
		return $files[$file];
	}

	$i = 1;
	while ($i <= 15):
		$myFile1=random_file1();
		echo '<li><img src="' . $myFile1 .'"></li> ';
		$i++;
	endwhile;
 ?>

</ul>


<ul id="slides2" class="rslides">

<?php 
	function random_file2($dir = 'gifs')
	{
		$files = glob($dir . '/*.*');
		$file = array_rand($files);
		return $files[$file];
	}

	$i = 1;
	while ($i <= 15):
		$myFile2=random_file2();
		echo '<li><img src="' . $myFile2 .'"></li> ';
		$i++;
	endwhile;
 ?>

</ul>



</body>
</html>
