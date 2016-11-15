//The event handler function
function computeCost() {
	var oranges = document.getElementById("oranges").value;
	var apples = document.getElementById("apples").value;
	var bananas = document.getElementById("bananas").value;
	var blueberry = document.getElementById("blueberry").value;
	
	//Compute cost
	document.getElementById("cost").value=oranges*1.00+apples*2.50+bananas*1.25+blueberry*3.25;
	}
function computeCost(event) {
	var oranges = document.getElementById("oranges").value;
	var apples = document.getElementById("apples").value;
	var bananas = document.getElementById("bananas").value;
	var blueberry = document.getElementById("blueberry").value;
	
	//Compute cost
	document.getElementById("cost").value=oranges*1.00+apples*2.50+bananas*1.25+blueberry*3.25;
	}
	
function checkPostalCode(event) {
	var code = document.getElementById("postalCode").value;
	var ok = code.search(/^[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]$/);
	if (ok!=0){
		alert("The postal code is not in the format xdx dxd (where x is a letter\(upper or lower case\) and d is a digit\n" +
			"Please go back and fix it.");
		return false;
		}
	else
		return true;
}