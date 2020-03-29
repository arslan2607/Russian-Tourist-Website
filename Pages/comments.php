<!-- Arslan Khayrullin -->
<!-- 04/14/2019 -->
<!-- ISTE-240 Final Project -->

<?php
  	
$path = './';
require $path.'../../../dbConnect.inc';	
if ($mysqli) {
	  
	if (isset($_GET['name']) && isset($_GET['comment'])) {
	  
		if( $_GET['name']!='' && $_GET['comment']!='' ){
		
			function info_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}		

$stmt=$mysqli->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
		
$stmt->bind_param("ss", $name, $comment);


$name = info_input($_GET['name']);
$comment = info_input($_GET['comment']);
$submit = $_GET['submitform'];
		
$stmt->execute();
		
$stmt->close();
	  
	}    
}   
$sql = 'select name, comment from comments';
	  
$res=$mysqli->query($sql);
	 
if($res){

        echo '<table><tr>';
        echo '<th> Name </th>';
        echo '<th> Comment </th></tr>';		
while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
	
          echo '<tr>';
          echo '<td>'.$rowHolder['name'].'</td>';
          echo '<td>'.$rowHolder['comment'].'</td>';
          echo '</tr>';		
	  $records[] = $rowHolder;

      }
	  
   }
	
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8"/>
	<title>Arslan Khayrullin - Final Project</title>
	<link rel="stylesheet" type="text/css" href="css/project1.css">
	</head>
	<body>

<!-- Header -->
<?php
	$path = './';
	$page = 'Moscow, Russia';
	include $path.'include/header.php';
	require $path.'../../../dbConnect.inc';
?>

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

<h1>Please leave your feedback below</h1>

<hr>

		<form action="/~ak1767/240/project2/comments.php" method="GET">
			<p class="comments">First name: <input type="name" id="name" name="name" /></p>
      			<p class="comments">Comment: <input type="comment" id="comment" name="comment"/></p>
			<p class="comments"><input type="submit" name="submitform"/></p>
		</form>

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