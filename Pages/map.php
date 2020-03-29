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

<h1>Moscow, Russia</h1>

<hr>

<!-- Implements a map of the center of Moscow, Russia -->
<!-- www.embedgooglemap.net -->
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="900" height="650" id="gmap_canvas" src="https://maps.google.com/maps?q=kremlin%20moscow&t=&z=13&ie=UTF8&iwloc=&output=embed">
    </iframe>
    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
  </div>
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