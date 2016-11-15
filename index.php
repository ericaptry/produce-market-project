<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999/xhtml"
	  lang = "en" xml:lang = "en">
	 <head>
		<meta charset="utf-8">
		<title>Produce Calculator</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
    
    	<script type = "text/javascript" src="index.js"></script>
		
     </head>
    <body>
	<?php
	// Get Form Values
				
	$name=$_POST["name"];
	$street=$_POST["street"];
	$city=$_POST["city"];
	$province=$_POST["province"];
	$postalCode=$_POST["postalCode"];
	$oranges=$_POST["oranges"];
	$apples=$_POST["apples"];
	$bananas=$_POST["bananas"];
	$blueberry=$_POST["blueberry"];
	$payment=$_POST["payment"];
	
		
	//Compute item costs and total
			
	$orangeCost = $oranges * 1;
	$appleCost = $apples *2.5;
	$bananasCost = $bananas * 1.25;
	$blueberryCost = $blueberry *3.25;
	$totalCost = $orangeCost + $appleCost +$bananasCost+$blueberryCost;
		
	// Return results to the browser
	?>
	
	  <div id="top"> 
		<h1> Welcome to the Farmer's Market</h1>
		<h2> Summary of your order ... </h2>
	  </div>
<div id="summary"> 
	  <img src = "images/produce1.png" 
           alt = "fresh produce" 
		  width="300" height="200" style="float:right"/>

	<h4>Customer:</h4>
	<?php
      print ("$name <br> $street <br> $city <br>$province <br>$postalCode <br>");
    ?>
	<h4>Order Information - You ordered:<br></h4>	
	<?php
					
	print("$oranges oranges for $");
	printf("%6.2f<br>",$orangeCost);
	print("$apples kg of apples for $");
	printf("%6.2f<br>",$appleCost);
	print("$bananas kg of bananas for $");
	printf("%6.2f<br>",$bananasCost);	
	print("$blueberry boxes of blueberries for $");
	printf("%6.2f<br>",$blueberryCost);
	print("Total cost $");
	printf("%6.2f<br>",$totalCost);
	print("Payment method: $payment"); 
	
	?>
</div>
  </body>
</html>
