<!DOCTYPE html>

<html>


 
<head>
 
    <title>Travelling</title>
    <style type="text/css">a {text-decoration: none}</style>
    <link rel="stylesheet" href="..\Styling\pag2.css">

</head>


<body>


<div class="barnav">
  
<table style="width:100%" align="center" bg-color="white" cellpadding="12">
<tr>
<td align="center" style="width:10%" class="fll"><a href="..\..\index.html">Home</a></td>


<td align="center" style="width:10%" class="fll"><a href="Browse.html">Browse</a></td>



<td align="center" style="width:10%" class="flr"><a href="Contact.html">Contact</a></td>
<td align="center" style="width:10%" class="flr"><a href="More.html">Help</a></td>


<td align="center" style="width:10%" class="flr"><a href="SignUp.html">Sign Up</a></td>


</tr>
</table>
</div>

<div class="jumbotron">
<table style="width:100%" align="center" bg-color="white" cellpadding="12px">
<tr>
<td align="center" style="width:30%"><img src="..\Images\discover.png"></td>

<td align="center" style="width:30%"><img src="..\Images\book.png"></td>
<td align="center" style="width:30%"><img src="..\Images\travel.png"></td>
</tr>
</table>
</div>


<h2 align="center">Application Form</h2>
<p align="center"><i>In order to apply for booking a house you must complete the following form. Please give <b>true information about yourself</b>. Every point is to be filled. We take no responsibility for a wrong completion.</i></p>


<form action="SignUp.php" method="POST">
<table align="center" cellpadding="10px">

<tr>

<td align="center">First Name</td>
<td align="center"><input type="text" size="30" maxlength="160" name="num"></td>
<td rowspan="100%" align="center"><img src="..\Images\invite.png" height="300px" width="300px"></td></tr>
<tr>
<td align="center">Last Name</td>
<td align="center"><input type="text" size="30" maxlength="160" name="num"></td>
</tr>
<tr>
<td align="center">Age</td>
<td align="center">
&lt14<input type="radio" name="nums" value="1"> &nbsp &nbsp &nbsp
14-17<input type="radio" name="nums" value="2"> &nbsp &nbsp &nbsp
18-24<input type="radio" name="nums" value="3">
 &nbsp &nbsp &nbsp
&gt 25<input type="radio" name="nums" value="4"></td>
</tr>
<tr>
<td align="center">Occupation</td>
<td align="center"><input type="text" size="30" maxlength="160" name="num"></td>
</tr>
<tr>
<td align="center">Gender</td>
<td align="center">Male<input type="radio" name="num" value="1"> &nbsp &nbsp &nbsp
Female<input type="radio" name="num" value="2"></td>
</tr>
<tr>
<td align="center">Where would you like to travel?</td>
<td align="center">
Bucharest<input type="checkbox" name="num" value="1">
Paris<input type="checkbox" name="num" value="2">
Lisbon<input type="checkbox" name="num" value="3">
Budapest<input type="checkbox" name="num" value="4">
Berlin<input type="checkbox" name="num" value="5">
<br>
London<input type="checkbox" name="num" value="6">
Washington D.C.<input type="checkbox" name="num" value="7">
Amsterdam<input type="checkbox" name="num" value="8">
Barcelona<input type="checkbox" name="num" value="9">
Istanbul<input type="checkbox" name="num" value="10">
<br>
Mexico City<input type="checkbox" name="num" value="11">
New York<input type="checkbox" name="num" value="12">
Rome<input type="checkbox" name="num" value="13">
Tokyo<input type="checkbox" name="num" value="14">
Vienna<input type="checkbox" name="num" value="15">
</td>
</tr>
<tr><td align="center">Do you have travel credit?</td>
<td align="center"><select name="num">
<option value="1">No</option>
<option value="2">Under 200</option>
<option value="3">200-499</option>
<option value="4">500-1499</option>
<option value="5">1500-2999</option>
<option value="6">3000-4999</option>
<option value="7">Over 5000</option>
</select>
</td>
</tr>
<tr>
<td align="center">Invite a friend and earn travel credit</td>
<td align="center"><textarea name="num" rows="6" cols="50">Write a short paragraph describing why you want to take your friend travelling.</textarea></td>
</tr>
<tr>
<td align="center"><input type="submit" name="buton1" value="Submit"></td>
<td align="center"><input type="reset" name="buton2" value="Reset"></td>
</tr>



</table>
</form>

<?php

if(isset($_POST["buton1"]))
{
	echo "Your application was submitted! You will soon receive an e-mail regarding the details.";



unset($_POST["buton1"]);
}
?>


<div class="betwas">

<table width="80%" align="center">
<tr>
<td align="left">
<h3>Project on travelling</h3> 
</td>
<td align="center">
<h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img src="..\Images\copyr.png" width="10px">Copyrights reserved</h3> 
</td>
<td align="right">
<h3>Produced & Owned by Cristian Nancu</h3>
</td>
</tr>
</div>
</body>

</html>