<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<title>Moscow, Russia</title>
	<link rel="stylesheet" type="text/css" href="css/ex04.css">

<!-- Arslan Khayrullin -->
<!-- ISTE-240 -->
<!-- 02/17/2019 -->

<script>
<!-- Validates users input date -->

function checkDate(){
    var dateValid=true;
    var vdate = document.getElementById('visitDate').value;
    var today = new Date();   
    console.log("Users date  = " + vdate);
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    
    if (dd < 10) {
     dd = '0' + dd;
    }  // need this in case day number is one digit like 6
    if (mm < 10) {
     mm = '0' + mm;
    }  // need this is month number is 1 digit like 4 
    
    var td = "" + yyyy + "-" + mm + "-" + dd;
    console.log("System date = " + td);
    
    if(vdate >= td){
       document.getElementById('errorMessage').innerHTML="  ** Warning:You cannot select today or the days after. **  "; 
       document.getElementById("visitDate").style.borderColor="red";
       document.getElementById("errorMessage").style.backgroundColor = 'pink';
       dateValid = false;
       }
    else  {
       document.getElementById('errorMessage').innerHTML=""; 
       document.getElementById("visitDate").style.border = null;
       document.getElementById("errorMessage").style = null;
       dateValid = true;
       }// end of else path
       
    return (dateValid);
}

<!-- Radio Button (NONE USED IN THIS SPECIFIC CODE) -->

Read more: https://html.com/tags/comment-tag/#ixzz5fpAZUlZq
function checkIfRadioButtonSelected(){
    var isChecked = false;
	var len = document.getElementsByName('fplace').length;
	var choices = new Array();
	for (var i=0; i<len; i++) 
	{
		if (document.getElementsByName('fplace')[i].checked)
		{	
			choices.push(document.getElementsByName('fplace')[i].value);
		}	
	}//end of for loop

    if (choices.length > 0){
        isChecked = true;
        document.getElementsByTagName('fieldset')[0].style = null;
        document.getElementsByTagName('legend')[0].style= null;
    }
    else{
        document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
        document.getElementsByTagName('legend')[0].style.color = 'red';
    }
    
    return isChecked;
    
}

<!-- Validates form -->

function validateForm() {
    isvalid=true;
    radioButtonChecked = false;
alert(document.getElementById("visitDate").value);

   if(document.getElementById("visitor").value == ''){
		document.getElementById("visitor").style.borderColor="red";
		document.getElementById("visitor").style.backgroundColor = 'pink';
		isvalid=false;
		}
   else
       {
      //  document.getElementById("visitor").style.border = null;
      //document.getElementById("visitor").style.backgroundColor = 'white';
      document.getElementById("visitor").style = null;
       }
   if(document.getElementById("visitDate").value == ''){
		document.getElementById("visitDate").style.borderColor="red";
		document.getElementById("visitDate").style.backgroundColor = 'pink';
		isvalid=false;
		}
   else
       {
     //   document.getElementById("visitDate").style.border= "none";
	 //	document.getElementById("visitDate").style.backgroundColor = 'white';
     document.getElementById("visitDate").style = null;
       }
   
    var radioButtonChecked =  checkIfRadioButtonSelected();  
    var correctDate = checkDate();  
    
    return (isvalid && radioButtonChecked && correctDate);
   
}
    
</script>
</head>

<body>

	<!-- Navbar with homepage -->
	<nav>
		<ul>
			<!-- Homepage -->
			<li> <img class="survey" src="images/moscow.jpg" alt="Moscow" width="100" height="100"> </li>
			<li> <a href = "http://serenity.ist.rit.edu/~ak1767/240/project2/index.php">Go Back </a> </li>
			<li> <a href = "http://serenity.ist.rit.edu/~ak1767/240/project2/map.php"> Maps </a> </li>
		</ul>
	</nav>


	<!-- Proceeds to "process.php" -->
	<form action = "process.php" method = "POST"
          onsubmit="return validateForm();">

		<!-- Heading -->
		<div id="headingquestion">
			<h2 class = "underline"> <!-- add bottom border to this -->
				Quick survey on your visit to Russia
			</h2>
		</div>

         <div id="name">
         Name:
         <input type ="text" id="fullname" name ="name" 
                   placeholder="First, Last" >
         <span class="astric"> * </span>
         </div>

         <div id="age">
         Age
         <input type ="text" id="fullage" name ="age" 
                   placeholder="#" >
         </div>

		<!-- Group number form-->

		<div id="visit">
            		When was the last time you visited?
            		<input type = "date" id="visitDate" name = "vdate" />
            		<span class="astric"> * </span><br />
            	<p id="errorMessage"></p> 
         </div>

		<!-- Group Quantity -->
	<div  id="numgroup">
			How many people did you go with?
			<input type ="number" name ="groupNum" min ="0" max ="50" step ="1" value ="6" style = "margin-bottom: 20px;" >
		</div>
         
         
		<!-- Field Set for favorite place -->
        <div id="favplace">

        <fieldset>
        <legend>Favorite locations in Moscow</legend>

        <input type="checkbox" name="1" value="1" id="bf" onclick="turnoff();">Red Square<br>
        <input type="checkbox" name="2" value="2" id="bf" onclick="turnoff();" >St. Basil's Cathedral<br>
        <input type="checkbox" name="3" value="3"  id="bf" onclick="turnoff();">Bolshoi Theatre<br>
        <input type="checkbox" onclick="turnoff();" name="4" value="4" id="bf">Moscow Metro<br>
        <input type="checkbox" onclick="turnoff();" name="5" value="5" id="bf">Kremlin<br>
        <input type="checkbox" onclick="turnoff();" name="6" value="6" id="bf">Lenin's Mausoleum<br>
        <input type="checkbox" onclick="turnoff();" name="7" value="7" id="bf">GUM<br>
        <input type="checkbox" onclick="turnoff();" name="8" value="8" id="bf">Gorky Park<br>
        <input type="checkbox" name="9" value="9" id="bf"
                onclick="otherplaces();">Other
            &nbsp;&nbsp;
    <input name="other_places" placeholder="Enter Place" type="text" id="other_places" size="60">
            
            
            <br>    
        </fieldset>
        </div><!-- end of radio buttons for favorite Place-->

      <!-- Rated Scrollbar (0-10) -->
      <div id="scrollbar">

		<!-- Scrollbar for town raiting -->
		<br>Rate Moscow from 0-10!<br>
		<p>0
		<input type="range" name="rating" min="0" max="10" step="1" list="set">
		<datalist id = "set">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		</datalist>
		10</p>
		</div><!-- end of range bar -->
        
        
		<div id="button">
			<input type = "submit"  >
		</div><!-- end of div for submit button -->

<!-- Html Validator -->       
   <p>
      <a href="https://validator.w3.org/check?uri=referer"><img
          src="http://www.w3.org/Icons/valid-xhtml10"
          alt="Valid XHTML 1.0!" height="31" width="88" /></a>
    </p>

<!-- Css Validator -->
<p>
    <a href="https://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
            alt="Valid CSS!" />
    </a>

<!-- JS -->
</form>
<script>
var other2 = document.getElementById('other_places'); 
other2.style.visibility = 'hidden';   
function otherplaces()
{
    //alert("JavaScript otherplaces()");
	
	
	var other = document.getElementById('other');
	console.log(other.attributes);
    if  (other.checked == true)  { 
        console.log("turn other box visible");
		other2.style.visibility = 'visible';
	} else {
	    other2.style.visibility = 'hidden';
		}

   }//end of function 

   function getOther(){
          alert("help");
          $_POST[other_places]= document.getElementById('other_places').value;
          var other_place = document.getElementById('other_places').value;
          alert("other_pets in function getOther() -->");
          console.log(other_place);
   }    
   function turnoff()
    {
        var other = document.getElementById('other');
        other2.style.visibility = 'hidden';
        other2.value="";
    }

<!-- END -->
</script>
</body>