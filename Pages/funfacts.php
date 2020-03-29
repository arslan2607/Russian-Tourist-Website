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

<!-- 6 Fun Facts about Russia -->
<h1>Fun Facts</h1>

<div class="border5">
<h5>Moscow is the largest city on the European continent.</h5>
</div>
<img class="fun" src="images/FunMoscow1.jpg" alt="Fun1" style="width:650px;height:400px;">

<div class="border5">
<h5>Some of the richest men live in Moscow. In 2012, Moscow broke the record with the most amount of billionaires permanently residing in the city. In 2017, however, it took third place.</h5>
</div>
<img class="fun" src="images/FunMoscow2.jpg" alt="Fun2" style="width:650px;height:400px;">

<div class="border5">
<h5>Moscows Metro System is one of the largest in Europe, and 6th longest in the World. </h5>
</div>
<img class="fun" src="images/FunMoscow3.jpg" alt="Fun3" style="width:650px;height:400px;">

<div class="border5">
<h5>Population of Moscow is 12 million people, 2nd most populous city in Europe.</h5>
</div>
<img class="fun" src="images/FunMoscow4.jpg" alt="Fun4" style="width:650px;height:400px;">

<div class="border5">
<h5>Kremlin is the worlds largest medieval fortress.</h5>
</div>
<img class="fun" src="images/FunMoscow5.jpg" alt="Fun5" style="width:650px;height:400px;">

<div class="border5">
<h5>The first McDonalds opened on January 31,  1990. The line to the cafe ran for a few miles on that day.</h5>
</div>
<img class="fun" src="images/FunMoscow6.jpg" alt="Fun6" style="width:650px;height:400px;">

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