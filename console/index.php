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
		margin-left: -80px;"><a>Photography DIARY Settings</a></span>
	<span style="    float: right;">
		<a href=../index.php style="margin-right: 5px;">MyDiary</a>
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

function send(){
	var str="(key,val)";
	var attr={};
	$.each($('li'), function(index, value){  
		attr[value.innerHTML]=value.innerHTML+"?"+$('input')[index].value;
	}); 
	$.post('setCost.php', attr,
               function(returnedData) {
                   
                  console.log(returnedData);
              }).fail(function() {
               alert("error");
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
			echo '<li class="lbl-settings">DroneCameraCost</li><input value="'.$resMap['DroneCameraCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">DroneCameraPrice</li><input value="'.$resMap['DroneCameraPrice'].'"  class="w3-input input-get-cost"/>';		
		echo "</ul>"
	?>
	
	<?php 
		echo "<h4>Mini Album Cost and Price</h4>";
		echo "<ul id='miniALbumCOst'>";
			echo '<li class="lbl-settings">MiniAlbumCost</li><input value="'.$resMap['MiniAlbumCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">MiniAlbumPrice</li><input value="'.$resMap['MiniAlbumPrice'].'"  class="w3-input input-get-cost"/>';		
		echo "</ul>"
?>

	<?php 
		echo "<h4>Helper Cost and Price</h4>";
		echo "<ul id='helperCost'>";
			echo '<li class="lbl-settings">Cost For 1 Helper</li><input value="'.$resMap['Cost For 1 Helper'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">Price For 1 Helper</li><input value="'.$resMap['Price For 1 Helper'].'"  class="w3-input input-get-cost"/>';		
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
			echo '<li class="lbl-settings">'.$v2.':SignatureBoardCost</li><input value="'.$resMap[$v2.':SignatureBoardCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">'.$v2.':SignatureBoardPrice</li><input value="'.$resMap[$v2.':SignatureBoardPrice'].'"  class="w3-input input-get-cost"/>';		
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
				for ($y = 1; $y < sizeof($VidType); $y++) {
					$v3 = explode("\"",$VidType[$y])[1];
					$subs3 = $subs2.':'.$v3;
					echo '<tr>';
						echo '<td><li class="lbl-settings">'.$subs3.':VideoCost</li><input value="'.$resMap[$subs3.':VideoCost'].'"  class="w3-input input-get-cost"/></td>';
						echo '<td><li class="lbl-settings">'.$subs3.':VideoPrice</li><input value="'.$resMap[$subs3.':VideoPrice'].'"  class="w3-input input-get-cost"/></td>';		
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
			echo '<li class="lbl-settings">'.$v2.':ExtraEnlargementCost</li><input value="'.$resMap[$v2.':ExtraEnlargementCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li class="lbl-settings">'.$v2.':ExtraEnlargementPrice</li><input value="'.$resMap[$v2.':ExtraEnlargementPrice'].'"  class="w3-input input-get-cost"/>';		
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
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':ExtraCardCost</li><input value="'.$resMap[$key.':ExtraCardCost'].'"  class="w3-input input-get-cost"/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':ExtraCardPrice</li><input value="'.$resMap[$key.':ExtraCardPrice'].'"  class="w3-input input-get-cost"/></td>';		
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
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':FixedPages</li><input value="'.$resMap[$key.':FixedPages'].'" class="input-settings w3-input"/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':FixedCost</li><input value="'.$resMap[$key.':FixedCost'].'"  class="input-settings w3-input "/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':FixedPrice</li><input value="'.$resMap[$key.':FixedPrice'].'"  class="input-settings w3-input "/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':ExtraPageCost</li><input value="'.$resMap[$key.':ExtraPageCost'].'"  class="input-settings w3-input "/></td>';
			echo '<td><li class="lbl-settings">'.$subs.':'.$v2.':ExtraPagePrice</li><input value="'.$resMap[$key.':ExtraPagePrice'].'"  class="input-settings w3-input "/></td>';		
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
