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
		margin-left: -80px;"><a>Photography DIARY</a></span>
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
		<div class="col-6 col-m-9">



	<h3>Album Cost Settings</h3>


<button onclick="send()"> Submit </button>
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
<?php 
	$VidQuality = explode("value",getProperty("VidQuality"));
	$VidNoOfCam = explode("value", getProperty("VidNoOfCam"));
	$VidType = explode("value", getProperty("VidType"));

	echo "<h4>Video Cost and Price</h4>";
	echo "<ul id='videoCost'>";
	for ($x = 1; $x < sizeof($VidQuality); $x++) {
		$subs = explode("\"",$VidQuality[$x])[1];	
		for ($y = 1; $y < sizeof($VidNoOfCam); $y++) {
			$v2 = explode("\"",$VidNoOfCam[$y])[1];
			$subs2 = $subs.':'.$v2;
				for ($y = 1; $y < sizeof($VidType); $y++) {
					$v3 = explode("\"",$VidType[$y])[1];
					$subs3 = $subs2.':'.$v3;
					echo '<li>'.$subs3.':VideoCost</li><input value="'.$resMap[$subs3.':VideoCost'].'"  class="w3-input input-get-cost"/>';
					echo '<li>'.$subs3.':VideoPrice</li><input value="'.$resMap[$subs3.':VideoPrice'].'"  class="w3-input input-get-cost"/>';		
				}
		}
	}
	echo "</ul>"
?>

<?php 
	// $qualities = explode("value",getProperty("AlbumQualities"));
	$EnlargementSizes = explode("value", getProperty("EnlargementSizes"));

	echo "<h4>Enlargements Cost and Price</h4>";
	echo "<ul id='enlargementCost'>";
	// for ($x = 1; $x < sizeof($qualities); $x++) {
		// $subs = explode("\"",$qualities[$x])[1];
		
		for ($y = 1; $y < sizeof($EnlargementSizes); $y++) {
			$v2 = explode("\"",$EnlargementSizes[$y])[1];
			// $key = $subs.':'.$v2;
			// echo '<li style="font-size: 20;">'.$subs.':'.$v2.':FixedPages</li><input value="'.$resMap[$key.':FixedPages'].'" class="w3-input input-get-cost"/>';
			// echo '<li>'.$subs.':'.$v2.':FixedCost</li><input value="'.$resMap[$key.':FixedCost'].'"  class="w3-input input-get-cost"/>';
			// echo '<li>'.$subs.':'.$v2.':FixedPrice</li><input value="'.$resMap[$key.':FixedPrice'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$v2.':ExtraEnlargementCost</li><input value="'.$resMap[$v2.':ExtraEnlargementCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$v2.':ExtraEnlargementPrice</li><input value="'.$resMap[$v2.':ExtraEnlargementPrice'].'"  class="w3-input input-get-cost"/>';		
		}
	// }
	echo "</ul>"
?>

<?php 
	$qualities = explode("value",getProperty("ThankCardQualities"));
	$sizes = explode("value", getProperty("ThankCardSizes"));

	echo "<h4>Thank Card Cost and Price</h4>";
	echo "<ul id='thankCardCosts'>";
	for ($x = 1; $x < sizeof($qualities); $x++) {
		$subs = explode("\"",$qualities[$x])[1];
		
		for ($y = 1; $y < sizeof($sizes); $y++) {
			$v2 = explode("\"",$sizes[$y])[1];
			$key = $subs.':'.$v2;
			// echo '<li style="font-size: 20;">'.$subs.':'.$v2.':FixedPages</li><input value="'.$resMap[$key.':FixedPages'].'" class="w3-input input-get-cost"/>';
			// echo '<li>'.$subs.':'.$v2.':FixedCost</li><input value="'.$resMap[$key.':FixedCost'].'"  class="w3-input input-get-cost"/>';
			// echo '<li>'.$subs.':'.$v2.':FixedPrice</li><input value="'.$resMap[$key.':FixedPrice'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':ExtraCardCost</li><input value="'.$resMap[$key.':ExtraCardCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':ExtraCardPrice</li><input value="'.$resMap[$key.':ExtraCardPrice'].'"  class="w3-input input-get-cost"/>';		
		}
	}
	echo "</ul>"
?>



<?php 
	$qualities = explode("value",getProperty("AlbumQualities"));
	$albums = explode("value", getProperty("AlbumSizes"));
	// $result = getAllCost();
	// $resArr = explode(";;;;",$result);
	// $resMap = array();
	// for ($i = 0; $i < sizeof($resArr)-1; $i++) {
	// 	$arr = explode("?",$resArr[$i]);
	// 	$resMap[$arr[0]] = $arr[1];
	// }
	echo "<h4>Album Cost and Price</h4>";
	echo "<ul id='albumCosts'>";
	for ($x = 1; $x < sizeof($qualities); $x++) {
		$subs = explode("\"",$qualities[$x])[1];
		
		for ($y = 1; $y < sizeof($albums); $y++) {
			$v2 = explode("\"",$albums[$y])[1];
			$key = $subs.':'.$v2;
			echo '<li style="font-size: 20;">'.$subs.':'.$v2.':FixedPages</li><input value="'.$resMap[$key.':FixedPages'].'" class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':FixedCost</li><input value="'.$resMap[$key.':FixedCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':FixedPrice</li><input value="'.$resMap[$key.':FixedPrice'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':ExtraPageCost</li><input value="'.$resMap[$key.':ExtraPageCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':ExtraPagePrice</li><input value="'.$resMap[$key.':ExtraPagePrice'].'"  class="w3-input input-get-cost"/>';		
		}
	}
	echo "</ul>"
?>

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
