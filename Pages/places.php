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

<!-- Top 3 Places to visit in Moscow -->
<h1>Top 3 Places to Visit</h1>

<div class ="border4">
<img class="visit" src="images/RedSquare.jpg" alt="RedSquare" style="width:300px;height:300px;margin-left:15px;">
<h4>Red Square</h4>
<p class="visit">
<strong>Red Square</strong> in Moscow is known for its political symbolism, but was originally named for its loveliness since Krasnaya, or <strong>red</strong> in old Russian meant <strong>beautiful</strong>. This region is truly a masterpiece and every tourist should visit this part of Moscow, since its directly in the center of the city. Red Square is known as the <strong>front yard</strong> of rulers such as Vladimir Putin, Russias current president. Geometrically, the Red Square takes up 800,000 square feet. The body of Soviet Unions first dictator, Vladimir Lenin, is located in that area and his tomb is on display to the public. Lastly, the Red Square has Kremlins Clock, which has one of the most accurate times, where tourists can adjust their watches to match it.
<p>
</div>

<div class ="border4">
<img class="visit" src="images/MoscowMetro.jpg" alt="MoscowMetro" style="width:300px;height:300px;margin-left:15px;">
<h4>Moscow Metro System</h4>
<p class="visit">
<strong>The Metro</strong> was initially opened during Stalins time in 1935 with just 13 stations. Nowadays, the metro is connected to over 180 stations and transports <strong>nine million people</strong> per day. Every single days hundreds of tourists visit the Metro just to experience the amazing artwork that is implemented all over the place. However, the only downfall is that the Russian Metro system is the <strong>second busiest</strong> rail system in the world, so it can get a bit hectic. Every single station in the metro has a unique design which represents a specific era and a political leader at the time. The Metro stations are not simply decorated, but are considered to be works of art. 
<p>
</div>

<div class ="border4">
<img class="visit" src="images/BolshoiTheatre.jpg" alt="MoscowMetro" style="width:300px;height:300px;margin-left:15px;">
<h4>Bolshoi Theatre</h4>
<p class="visit">
One of the biggest parts of the Russian culture and pride is <strong>Bolshoi (Large) Theatre</strong>. It is one of the worlds biggest ballet and opera theaters and is on the same level as other highly respect places, such as La Scala in Italy. From an architectural perspective, the place is enormous and outstanding, with a lot of Russian design elements. The building itself has a very long history behind it, and not a pretty one. The place was burned down, destroyed, and was rebuilt several times throughout the centuries. However, now it is very iconic place to visit. People from <strong>all over the world</strong> come to Bolshoi Theatre just to experience the amazing plays that the place has to offer!
<p>
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
</html>