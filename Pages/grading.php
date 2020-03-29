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

<!-- Grading Criteria described and met -->
<h1>Grading</h1>

<div class="border6">
<h6>Good Design Techniques (CRAP). Alt and title attributes for each image</h6>
</div>
<div class="border9">
<p class="grading">Followed the same (or similar color concepts) throughout the whole website. Changed some borders around the website in order to make it more unique and less repetitive. </p>
</div>

<hr>

<div class="border6">
<h6>Organization of information, text and graphics make sense, logical, use the CSS float property
for some images.</h6>
</div>
<div class="border9">
<p class="grading">Yes, majority of my images and texts go hand in hand. They, for the most part, are connected by DIV attribute to help them stay together. Float properties are used correctly, floating images to the left or right. </p>
</div>

<hr>

<div class="border6">
<h6>Content includes an interesting read, excellent grammar, perfect spelling. Please do not make the content of
text on the inside pages short. Try to keep the first page (index) to one screen, no scroll bars.</h6>
</div>
<div class="border9">
<p class="grading">My content pages include interesting information that has dense content. I broke it down to a more readable format for a reader to be able to clearly understand the topic. My first page (home page) does not have a scroll bar. </p>
</div>

<hr>

<div class="border6">
<h6>Navigation is easy to get around, intuitive, well labeled</h6>
</div>
<div class="border9">
<p class="grading">My navigation bar is easy to navigate, with simple, yet effective design. Text changes colors and becomes bold when hovered over. </p>
</div>

<hr>

<div class="border6">
<h6>Use of HTML5 and CSS3 (both text and positioning) Valid HTML 5 and Valid CSS3. Remember
to use the validators demonstrated in class</h6>
</div>
<div class="border9">
<p class="grading">HTML and CSS both validate for all pages. </p>
</div>

<hr>

<div class="border6">
<h6>You must have some JavaScript. The JavaScript must have a clear purpose and benefit your site.</h6>
</div>
<div class="border9">
<p class="grading">I have JavaScript in two places. First, it is located on the first page (home page) and allows user to go through the slideshow by using arrows. Second, I included JavaScript in my Survey Page in order to allow users to enter their data and for the data to be sent to my email directly (as well as professors). </p>
</div>

<hr>

<div class="border6">
<h6>That you modified your exercise 4 and included it in this project and made the form submit button
work to send the forms contents to multiple email addresses. Modify exercise 4 from when you
submitted it previously. Change the background color, logo, and the radio button content to relate
to this project, the place you visited. Also when you update exercise 4 for this project make sure
this form has working links to all the pages of this project!</h6>
</div>
<div class="border9">
<p class="grading">I modified exercise 4 and made it properly work with this website. All the information submitted in the survey is sent to my professors and my own email. I made slight changes to it, such as different image, color, and relatable buttons for my website. The links on the survey page allow the user to go back to my website. </p>
</div>

<hr>

<div class="border6">
<h6>A separate linked &quot;Reference&quot; page. You will lose 25% for not having a &quot;References&quot; page.
Follow my sample provided in this specification. You can use an HTML table in this page.</h6>
</div>
<div class="border9">
<p class="grading">Included a reference page on my website in order to cite and give credit to others for utilizing their content. I included an HTML table for easier structure. </p>
</div>

<hr>

<div class="border6">
<h6>Document what you have done in each and every grading category above. This document is going
to be a web page which is linked from your homepage. You can use an HTML table in this page.</h6>
</div>
<div class="border9">
<p class="grading">Complete. </p>
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