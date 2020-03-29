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

<!-- Picture of Myself -->
<figure>
	<div class="mypic2">
		<img src="images/arslanpic.jpg" alt="Arslan Khayrullin" height="400" width="450">
	</div>
</figure>

<!-- Contact Information -->
<div class ="border2">
	<h1>Contact Information</h1>
	<p><strong>Name:</strong> Arslan Khayrullin</p>
	<p><strong>Email:</strong> ak1767@rit.edu</p>
	<p><strong>Cell Phone:</strong> (631)413-3507</p>
	<p><strong>College Major:</strong> WMC</p>
	<p><strong>Brief Intro:</strong> Originally born in Moscow, Russia. Resided in the city for 10 years. Still visit twice a year, every year. </p>
<p><a href="http://serenity.ist.rit.edu/~ak1767/240/project2/include/GradingRubric.pdf">Grading Rubric</a></p>
</div>

</br>
</br>
</br>
</br>
</br>

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