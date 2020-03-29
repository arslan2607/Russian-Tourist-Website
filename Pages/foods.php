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

<!-- Famous foods (5) and their descriptions -->
<h1>Famous Foods</h1>

<hr>

<div class="borderleft">
<img class="foodleft" src="images/Food1.jpg" alt="Food1" style="width:300px;height:300px;">
<p class="food"><strong>Borscht</strong> tastes like a chunky stew. It is probably the most iconic food in Russia. If you do not eat Borscht, you are not considered Russian.
</p>
<div class="border7">
<h6>Main Ingredients</h6>
<p class="food">Beef</p>
<p class="food">Cabbage</p>
<p class="food">Carrots</p>
<p class="food">Bay Leaves</p>
<p class="food">Black Pepper</p>
</div>
</div>

<hr>

<div class="borderright">
<img class="foodright" src="images/Food2.jpg" alt="Food2" style="width:300px;height:300px;">
<p class="food"><strong>Salad Olivie</strong> is a Russian salad that is very unique. Every family makes their own, with their own special ingredients. By far the most popular dish for celebrating New Years. 
</p>
<div class="border7">
<h6>Main Ingredients</h6>
<p class="food">Potatoes</p>
<p class="food">Vegetables</p>
<p class="food">Eggs</p>
<p class="food">Meat</p>
<p class="food">Mayonnaise</p>
</div>
</div>

<hr>

<div class="borderleft">
<img class="foodleft" src="images/Food3.jpg" alt="Food3" style="width:300px;height:300px;">
<p class="food"><strong>Blini</strong> are crepe like pancakes which are mostly topped with sweet toppings. Those frequently include caviar on top. 
</p>
<div class="border7">
<h6>Main Ingredients</h6>
<p class="food">Eggs</p>
<p class="food">Milk</p>
<p class="food">Flour</p>
<p class="food">Baking Powder</p>
<p class="food">Sugar</p>
</div>
</div>

<hr>

<div class="borderright">
<img class="foodright" src="images/Food4.jpg" alt="Food4" style="width:300px;height:300px;">
<p class="food"><strong>Pelmeni</strong> frequently are mistaken for Chinese dumplings, however, they have a completely different taste from them. Very famous dish for Russian teenagers and college students. 
</p>
<div class="border7">
<h6>Main Ingredients</h6>
<p class="food">Buttermilk</p>
<p class="food">Sour cream</p>
<p class="food">Eggs</p>
<p class="food">Salt</p>
<p class="food">Flour</p>
</div>
</div>

<hr>

<div class="borderleft">
<img class="foodleft" src="images/Food5.jpg" alt="Food5" style="width:300px;height:300px;">
<p class="food"><strong>Chak-Chak</strong> is deep fried dough that is topped with hot honey syrup. They are usually left to harden before eating. Very popular sweet and dessert food. 
</p>
<div class="border7">
<h6>Main Ingredients</h6>
<p class="food">Wheat flour</p>
<p class="food">Honey</p>
<p class="food">Eggs</p>
<p class="food">Oil</p>
<p class="food">Saugar + Salt</p>
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