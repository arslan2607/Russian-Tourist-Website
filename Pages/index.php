<?php
	$path = './';
	$page = 'Moscow, Russia';
	include $path.'include/header.php';
	require $path.'../../../dbConnect.inc';
?>

<body>
<!-- 6 Content Pages and Others -->
<ul>
	<li><a href="../project2/index.php">Home</a></li>
	<li><a href="../project2/places.php">Places to Visit</a></li>
	<li><a href="../project2/funfacts.php">Fun Facts</a></li>
	<li><a href="../project2/map.php">Map of Moscow</a></li>
	<li><a href="../project2/foods.php">Famous Foods</a></li>
	<li><a href="../project2/hotels.php">Best Hotels</a></li>
	<li><a href="../project2/contact.php">Contact Page</a></li>
	<li><a href="../project2/survey.php">Survey</a></li>
	<li><a href="../project2/comments.php">Comments</a></li>
	<li><a href="../project2/reference.php">Reference</a></li>
	<li><a href="../project2/grading.php">Grading</a></li>
</ul>

<!-- Intro Text -->
<h1>Welcome to Moscow, Russia!</h1>
<p class="mainText">Click on the <strong>Arrows</strong> for SlideShow</p>

<!-- Slideshow of 4 Pictures -->
<div id="borderMoscow">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/MoscowUniversity.jpg" alt="MoscowUniversity" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/MoscowNight.jpg" alt="MoscowNight"style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/MoscowSnow.jpeg" alt="MoscowSnow"style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/MoscowCenter.jpg" alt="MoscowCenter"style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>

<!-- Introduction box (with border)-->
<h1>Brief Introduction</h1>
<div class ="border">
<p class="main">Hey, my name is Arslan Khayrullin and I will do my best to give you an awesome 	presentation on Moscow, Russia. Just for your reference, I was born in Russia and 	lived there for 10 years (2000-2010), and later moved to Long Island, New York, where I reside now. Personally, I am fluent in both Russian and English and still visit Russia several times a year! It is a beautiful place to visit, even though 	our modern politics may make it seem something it really is not. My goal is to help give you a realistic image of Moscow, Russia, which will hopefully persuade you into visiting this country in the future. Enjoy! </p>
</div>

<!-- Footer -->
</br>
<div class="footer">
    <?php
	include $path.'include/footer.php';
	mysqli_close($mysqli);
    ?>	
</div>

</body>