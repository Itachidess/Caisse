<?php
$id = $_GET["id"]
?>

<!DOCTYPE html>
<html>
<head>
<title>eboutique...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3images/w3.css">
<link rel="stylesheet" href="w3images/font-awesome.min.css">
<script>
function valider(){
    var liens;
	var mp = document.calculator.mp.value;
	  liens = "exec_access.php?id=<?php echo $id;?>"+"&mp="+mp;  
    window.location = ""+ liens +""
}

function retour(){
    var liens;
		  liens = "index.php"  
    window.location = ""+ liens +""
}
</script>
</head>
<body>

<!-- #include file="_connexionactivite.asp"-->
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-white w3-left-align w3-large w3-card">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-gray w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>eboutique</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-gray" title="Ajout User"><i class="fa fa-address-card-o"></i></a>
  
  
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Info Compte">
    <img src="w3images/avatar1.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">eStock</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Ajout User</a>
 </div>
<br><br>
<center>
<br><br>
<div class="w3-container w3-card"  style="width:95%;height:570px;"><br>



<FORM name = 'calculator' class="w3-card w3-light-gray" style="width:280px;height:400px;">
<table>
<tr style="width:275px;">
<td colspan="3"  align="center">
<input class="w3-input w3-animate-input w3-border" style="width:240px" type="password" name="mp" id="display" placeholder="Mot de passe">
</td>
</tr>
<tr style="width:275px; height:24px;">
<td colspan="3"  align="center">
</td>
</tr>
<tr style="width:240px;">
  <td  align="left">
    <input class="w3-circle w3-orange" style="width:60px;height:60px" type="button" value="1" onclick="calculator.display.value += '1'">
  </td>
  <td  align="center">
    <input class="w3-circle w3-orange" style="width:60px;height:60px" type="button" value="2" onclick="calculator.display.value += '2'">
  </td>
  <td  align="right">
    <input class="w3-circle w3-orange" style="width:60px;height:60px" type="button" value="3" onclick="calculator.display.value += '3'">
  </td>
</tr>
<tr style="width:240px;">
  <td  align="left">
    <input class="w3-circle w3-orange" style="width:60px;height:60px"  type="button" value="4" onclick="calculator.display.value += '4'">
  </td>
  <td  align="center">
    <input class="w3-circle w3-orange" style="width:60px;height:60px"  type="button" value="5" onclick="calculator.display.value += '5'">
  </td>
  <td  align="right">
    <input class="w3-circle w3-orange" style="width:60px;height:60px"  type="button" value="6" onclick="calculator.display.value += '6'">
  </td>
</tr>  

<tr style="width:240px;" >
  <td align="left">
    <input class="w3-circle w3-orange" style="width:60px;height:60px"  type="button" value="7" onclick="calculator.display.value += '7'">
  </td>
  <td align="center">
    <input class="w3-circle w3-orange" style="width:60px;height:60px"  type="button" value="8" onclick="calculator.display.value += '8'">
  </td>
  <td align="right">
    <input class="w3-circle w3-orange" style="width:60px;height:60px"  type="button" value="9" onclick="calculator.display.value += '9'">
  </td>
</div>
<br><br><br>
<table style="width:260px;">    
<tr>
<td  align="left">
<a class="w3-btn w3-round w3-hover-blue" style="width:65px;" onclick="javascript:retour();"><i class="fa fa-address-card-o" style="font-size:40px;color:gray"></i></a>
</td>
<td  align="center">
<a  class="w3-btn w3-round w3-hover-red" style="width:65px;" onclick="calculator.display.value = ''"><i class="fa fa-pencil-square-o" style="font-size:40px;color:gray"></i></a>
</td> 
 <td  align="right">
<a  class="w3-btn w3-round w3-hover-green" style="width:65px;" onclick="javascript:valider();"><i class="fa fa-check-square-o" style="font-size:40px;color:gray"></i></a>
</td>
 </tr>
 </table>
</form>
</div>

