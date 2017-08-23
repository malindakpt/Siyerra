<?php
	ob_start();
	session_start(); 
	include '../loginS2.php';
	include '../config.php';
	include '../getCost.php';
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/logo.png" />
	<title>Photography DIARY</title>
	
 
	 
	 <script src="../js/jquery.js"> </script> 
	<link rel="stylesheet" type="text/css" href="../css/w3css.css">
	<link rel="stylesheet" type="text/css" href="../css/template.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css"> 

	<link rel="stylesheet" type="text/css" href="../css/main.css?1.3">
</head>

<body>
	<div class="header">
	<div id="overlay"></div>	
	<?php

		$result = explode(";;;;", login());	
		if("ok" != $result[0]){
			echo "ip";
			header("Location: ../login.php"); /* Redirect browser */
			exit();
		}else{
			echo '<h3 style="float:left  ;  margin: 0 auto;">'.$result[2].'</h3><br>';
			echo '<script>var tableName = "'.$result[1].'";</script>';
			echo '<script>function loadHeader(){ 	loadScript("js/header/'.$result[1].'H.js",function(){console.log("header loaded");});}</script>'; 
			echo '<script>function loadFooter(){ 	loadScript("js/footer/'.$result[1].'F.js",function(){console.log("footer loaded");});}</script>'; 

			if((int)$result[4] < 30){
				echo '<script>swal("'.$result[4].' Days To Expire Your Account !", "Please deposite '.$result[3].'/= to account of P.K.M.M.Kumarasinghe, BOC 70588880 and send a copy of slip to malindakpt@gmail.com", "warning")</script>';
			}

			echo '<script>var enlargements = "'.$result[5].'".split("####");</script>';
			echo '<script>var studioName = "'.$result[2].'";</script>';
		}
	?>
	<span style="    display: inline-block;
		margin-top: 10px;
		margin-left: -80px;"><a>Photography DIARY</a></span>
	<span style="    float: right;">
		<a href=../index.php style="margin-right: 5px;">Diary</a>
	<?php
		if("ok" != $result[0]){echo "<a href=../login.php >login</a>";}else{	echo "<a href=../login.php >logout</a>";}	
	?>
	</span>
	<br>
	</div> 
	 
	<div class="row">
		<div class="hideInMobile col-3 col-m-3">

			<div class=" asideX">
			
			</div>

		</div>
		<div class="col-6 col-m-9" style="width:100%">

 

<script>
function ovOn() {
    document.getElementById("overlay").style.display = "block";
}

function ovOff() {
    document.getElementById("overlay").style.display = "none";
}
function send(){
	ovOn();
	var attr={};
	$.each($('li'), function(index, value){  
		attr[value.innerHTML]=value.innerHTML+"?"+$('input')[index].value;
	}); 
	$.post('setCost.php', attr,
               function(returnedData) {
                   
				  console.log(returnedData);
				  ovOff();
				  
              }).fail(function() {
			   alert("error");
			   ovOff();
    });
}
</script>

<?php
	$result = getAllCost();
	$resArr = explode(";;;;",$result);
	$resMap = array();
	for ($i = 0; $i < sizeof($resArr)-1; $i++) {
		$arr = explode("?",$resArr[$i]);
		$resMap[$arr[0]] = $arr[1];
	}
?>

<div class="w3-bar w3-black">
  <button class="w3-btn w3-black w3-padding-small" onclick="openCat('SignatureBoard')">Signature Board</button>
  <button class="w3-btn w3-black w3-padding-small" onclick="openCat('Enlargements')">Enlargements</button>
  <button class="w3-btn w3-black w3-padding-small" onclick="openCat('ThankCard')">Thankyou Cards</button>
  <button class="w3-btn w3-black w3-padding-small" onclick="openCat('AlbumCost')">Album</button>
    <button class="w3-btn w3-black w3-padding-small" onclick="openCat('Video')">Video </button>
  <button class="w3-btn w3-black w3-padding-small" onclick="openCat('Other')">Other</button> 
</div>

<div>
<button onclick="send()" class="w3-btn w3-green w3-padding-small" style="float:right;margin:5px"> Save Changes </button>

</div>

<script>
function openCat(cityName) {
    var i;
    var x = document.getElementsByClassName("cat");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>

<div id="Other" class="w3-container cat" style="display:none">

	
	<?php 
		echo "<h4>Drone Camera Cost and Price</h4>";
		echo "<ul id='droneCamCOst'>";
			echo '<li class="lbl-settings">Drone Camera Cost</li><input type="number" value="'.$resMap['Drone Camera Cost'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">Drone Camera Price</li><input type="number" value="'.$resMap['Drone Camera Price'].'"  class="w3-input input-get-cost"/>';		
		echo "</ul>"
	?>
	

	<?php  
	$MiniAlbumSizes = explode("value", getProperty("MiniAlbumSizes"));

	echo "<h4>MiniAlbum Cost and Price</h4>";
	echo "<ul id='MiniAlbumCost'>";
	
		for ($y = 1; $y < sizeof($MiniAlbumSizes); $y++) {
			$v2 = explode("\"",$MiniAlbumSizes[$y])[1];
			echo '<li class="lbl-settings">'.$v2.':Mini Album Cost</li><input  type="number"  value="'.$resMap[$v2.':Mini Album Cost'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">'.$v2.':Mini Album Price</li><input type="number"  value="'.$resMap[$v2.':Mini Album Price'].'"  class="w3-input input-get-cost"/>';		
		}
	echo "</ul>"
?>

<?php 
		echo "<br><br><h4>Design Cost For Large Album</h4>";
		echo "<ul id='helperCost'>";
			echo '<li class="lbl-settings">Design Cost For 1 Large Album</li><input  type="number" value="'.$resMap['Design Cost For 1 Large Album'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">Design Price For 1 Large Album</li><input  type="number" value="'.$resMap['Design Price For 1 Large Album'].'"  class="w3-input input-get-cost"/>';		
		echo "</ul>"
	?>

<?php 
		echo "<br><br><h4>Design Cost For Mini Album</h4>";
		echo "<ul id='helperCost'>";
			echo '<li class="lbl-settings">Design Cost For 1 Mini Album</li><input  type="number" value="'.$resMap['Design Cost For 1 Mini Album'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">Design Price For 1 Mini Album</li><input  type="number" value="'.$resMap['Design Price For 1 Mini Album'].'"  class="w3-input input-get-cost"/>';		
		echo "</ul>"
	?>

	<?php 
		echo "<br><br><h4>Helper Cost and Price</h4>";
		echo "<ul id='helperCost'>";
			echo '<li class="lbl-settings">Cost For 1 Helper</li><input  type="number" value="'.$resMap['Cost For 1 Helper'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">Price For 1 Helper</li><input  type="number" value="'.$resMap['Price For 1 Helper'].'"  class="w3-input input-get-cost"/>';		
		echo "</ul>"
	?>
</div>

<div id="SignatureBoard" class="w3-container cat">
<?php  
	$EnlargementSizes = explode("value", getProperty("EnlargementSizes"));

	echo "<h4>SignatureBoard Cost and Price</h4>";
	echo "<ul id='enlargementCost'>";
	
		for ($y = 1; $y < sizeof($EnlargementSizes); $y++) {
			$v2 = explode("\"",$EnlargementSizes[$y])[1];
			echo '<li class="lbl-settings">'.$v2.':Signature Board Cost</li><input  type="number"  value="'.$resMap[$v2.':Signature Board Cost'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">'.$v2.':Signature Board Price</li><input type="number"  value="'.$resMap[$v2.':Signature Board Price'].'"  class="w3-input input-get-cost"/>';		
		}
	echo "</ul>"
?>
</div>

<div id="Video" class="w3-container cat" style="display:none">
<?php 
	$VidQuality = explode("value",getProperty("VidQuality"));
	$VidNoOfCam = explode("value", getProperty("VidNoOfCam"));
	$VidType = explode("value", getProperty("VidType"));

	echo "<h4>Video Cost and Price</h4>";
	echo "<ul id='videoCost'>";
	echo '<table style="    border: none;">';
	for ($x = 1; $x < sizeof($VidQuality); $x++) {
		$subs = explode("\"",$VidQuality[$x])[1];	
		for ($y = 1; $y < sizeof($VidNoOfCam); $y++) {
			$v2 = explode("\"",$VidNoOfCam[$y])[1];
			$subs2 = $subs.':'.$v2;
	 
				for ($z = 1; $z < sizeof($VidType); $z++) {
					$v3 = explode("\"",$VidType[$z])[1];
					$subs3 = $subs2.':'.$v3;
					echo '<tr>';
						echo '<td><li class="lbl-settings">'.$subs3.':Video Cost</li><input type="number"  value="'.$resMap[$subs3.':Video Cost'].'"  class="w3-input input-get-cost"/></td>';
						echo '<td><li class="lbl-settings">'.$subs3.':Video Price</li><input type="number"  value="'.$resMap[$subs3.':Video Price'].'"  class="w3-input input-get-cost"/></td>';		
					echo '</tr>';
				}
			 
		}
	}
	echo '</table>';
	echo "</ul>"
?>
</div>

<div id="Enlargements" class="w3-container cat" style="display:none">
<?php  
	$EnlargementSizes = explode("value", getProperty("EnlargementSizes"));

	echo "<h4>Enlargements Cost and Price</h4>";
	echo "<ul id='enlargementCost'>";
		for ($y = 1; $y < sizeof($EnlargementSizes); $y++) {
			$v2 = explode("\"",$EnlargementSizes[$y])[1];
			echo '<li class="lbl-settings">'.$v2.':Cost per Enlargement</li><input type="number"  value="'.$resMap[$v2.':Cost per Enlargement'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">'.$v2.':Price per Enlargement</li><input  type="number" value="'.$resMap[$v2.':Price per Enlargement'].'"  class="w3-input input-get-cost"/>';		
		}
	echo "</ul>"
?>
</div>

<div id="ThankCard" class="w3-container cat" style="display:none">
<?php 
	$qualities = explode("value",getProperty("ThankCardQualities"));
	$sizes = explode("value", getProperty("ThankCardSizes"));

	echo "<h4>Thank Card Cost and Price</h4>";
	echo "<ul id='thankCardCosts'>";
	echo '<table style="    border: none;">';
	for ($x = 1; $x < sizeof($qualities); $x++) {
		$subs = explode("\"",$qualities[$x])[1];
		
		for ($y = 1; $y < sizeof($sizes); $y++) {
			$v2 = explode("\"",$sizes[$y])[1];
			$key = $subs.':'.$v2;
			echo '<tr>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':Cost per Card</li><input type="number"  value="'.$resMap[$key.':Cost per Card'].'"  class="w3-input input-get-cost"/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':Price per Card</li><input type="number"  value="'.$resMap[$key.':Price per Card'].'"  class="w3-input input-get-cost"/></td>';		
			echo '</tr>';
		}
	}
	echo '</table>';
	echo "</ul>";
?>
</div>

<div id="AlbumCost" class="w3-container cat" style="display:none">
<?php 
	$qualities = explode("value",getProperty("AlbumQualities"));
	$albums = explode("value", getProperty("AlbumSizes"));

	echo "<h4>Album Cost and Price</h4>";
	echo "<ul id='albumCosts'>";
	echo '<table style="    border: none;">';
	for ($x = 1; $x < sizeof($qualities); $x++) {
		$subs = explode("\"",$qualities[$x])[1];
		
		for ($y = 1; $y < sizeof($albums); $y++) {
			$v2 = explode("\"",$albums[$y])[1];
			$key = $subs.':'.$v2;
			echo '<tr>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':Fixed Pages</li><input type="number"  value="'.$resMap[$key.':Fixed Pages'].'" class="input-settings w3-input"/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':Fixed Cost</li><input type="number"  value="'.$resMap[$key.':Fixed Cost'].'"  class="input-settings w3-input "/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':Fixed Price</li><input type="number"  value="'.$resMap[$key.':Fixed Price'].'"  class="input-settings w3-input "/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':Extra Page Cost</li><input type="number"  value="'.$resMap[$key.':Extra Page Cost'].'"  class="input-settings w3-input "/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':Extra Page Price</li><input type="number"  value="'.$resMap[$key.':Extra Page Price'].'"  class="input-settings w3-input "/></td>';		
			echo '</tr>';
		}
	}
	echo '</table>';
	echo "</ul>"
?>
</div>


		</div>	
		<div class="col-3 col-m-12">
			<div class="hideInMobile asideX">
			</div>
		</div>
	</div>
	<div class="footer">
		<p>Powered by MSOFT Software Solutions 2017</p>
	</div> 
</body>
</html>
