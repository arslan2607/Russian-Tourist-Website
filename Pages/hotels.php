<!-- Header -->
<?php
	$path = './';
	$page = 'Moscow, Russia';
	include $path.'include/header.php';
	require $path.'../../../dbConnect.inc';
?>

<!-- 6 Content Pages -->

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

<hr>

<!-- Script file for images -->
<!-- When a mouse is hovered over an image, a different image of the same hotels pops up -->
<!-- Allows the user to view different images without images taking up extra space on the page -->
<script>
function moveover1() {
    document.getElementById('left').src="images/Hotel1New.jpg";
}
function moveback1() {
    document.getElementById('left').src="images/Hotel1.jpg";
}
function moveover2() {
    document.getElementById('right').src="images/Hotel2New.jpg";
}
function moveback2() {
    document.getElementById('right').src="images/Hotel2.jpg";
}
function moveover3() {
    document.getElementById('left2').src="images/Hotel3New.jpg";
}
function moveback3() {
    document.getElementById('left2').src="images/Hotel3.jpg";
}
function moveover4() {
    document.getElementById('right2').src="images/Hotel4New.jpg";
}
function moveback4() {
    document.getElementById('right2').src="images/Hotel4.jpg";
}
</script>

<!-- Top 4 Hotels to stay at -->
<h1>Best Hotels to Stay At</h1>

<hr>
<div class="border5">
<img id="left" src="images/Hotel1.jpg" onmouseover="moveover1()"
onmouseout="moveback1()" alt="Hotel1" style="width:350px;height:300px;">
<h5>Radisson Royal Hotel</h5>
<p class="hotel">Radisson Royal Hotel in Moscow houses around 500 guest rooms and suites, more than five restaurants and three bars, a wellness center and meeting spaces that can accommodate upwards of 1000 guests. It is also centrally located in Moscow by public transportation and numerous restaurants and shops. It is a very respected Hotel in the heart of Moscow. 
</p>
</div>

<hr>
<div class="border5">
<img id="right" src="images/Hotel2.jpg" onmouseover="moveover2()"
onmouseout="moveback2()"alt="Hotel2" style="width:350px;height:300px;">
<h5>4 Seasons Hotel</h5>
<p class="hotel">The hotel puts guests within easy reach of top Moscow sights like the Red Square, Lenins Mausoleum and the famous St. Basils Cathedral. Inside this Four Seasons outpost, guests will find a heated indoor pool, a 24-hour gym and a spa with a hair and nail salon. The food selection is limitless with a huge variety of foods to choose from. 4 Seasons Hotel is known by every local in the area! 
</p>
</div>

<hr>
<div class="border5">
<img id="left2" src="images/Hotel3.jpg" onmouseover="moveover3()"
onmouseout="moveback3()"alt="Hotel3" style="width:350px;height:300px;">
<h5>Lotte Hotel</h5>
<p class="hotel">Lotte Hotel Moscow wins over guests with its impressive staff. The hotels employees are top class, they are frequently described as genuinely friendly and eager to help. Plus, many speak English fluently, which allows for easy communication. This property is located in the Arbat District in Moscow, by various shops and eateries. Arbat is a huge shopping center, so make sure to bring your wallet. 
</p>
</div>

<hr>
<div class="border5">
<img id="right2" src="images/Hotel4.jpg" onmouseover="moveover4()"
onmouseout="moveback4()"alt="Hotel4" style="width:350px;height:300px;">
<h5>The Ritz-Carlton</h5>
<p class="hotel">The location of this Ritz outpost it one of its major assets. Situated in the heart of Moscow, just a short walk from the Kremlin and St. Basils Cathedral, the hotel puts guests near all the city has to offer. Accommodations at The Ritz-Carlton, Moscow include courtyard views, marble bathrooms, flat-screen TVs and free Wi-Fi access. This hotel is definitely top notch!
</p>
</div>

<hr>

<!-- Footer -->
</br>
<div class="footer">
    <?php
	include $path.'include/footer.php';
	mysqli_close($mysqli);
    ?>	
</div>

</body>
</html>