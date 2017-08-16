<?php
	ob_start();
	session_start(); 
	include '../loginS2.php';
	include '../config.php';
	include 'getCost.php';
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
	<?php
		if("ok" != $result[0]){echo "<a href=login.php style=float:right;>login</a>";}else{	echo "<a href=login.php style=float:right>logout</a>";}	
	?>
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
                   
                  alert(returnedData);
              }).fail(function() {
               console.log("error");
    });
}
</script>




<?php 

	$qualities = explode("value",getProperty("AlbumQualities"));

	$albums = explode("value", getProperty("AlbumSizes"));

	echo "<ul id='albumCosts'>";

	$result = getAllCost();

	$resArr = explode(";;;;",$result);
	$resMap = array();
	for ($i = 1; $i < sizeof($resArr)-1; $i++) {
		$arr = explode("?",$resArr[$i]);
		$resMap[$arr[0]] = $arr[1];
	}

	for ($x = 1; $x < sizeof($qualities); $x++) {
		$subs = explode("\"",$qualities[$x])[1];
	
		for ($y = 1; $y < sizeof($albums); $y++) {
			$v2 = explode("\"",$albums[$y])[1];
			$key = $subs.':'.$v2;
			echo '<li>'.$subs.':'.$v2.':Pages</li><input value="'.$resMap[$key.':Pages'].'" class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':Cost</li><input value="'.$resMap[$key.':Cost'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':Price</li><input value="'.$resMap[$key.':Price'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':ExCost</li><input value="'.$resMap[$key.':ExCost'].'"  class="w3-input input-get-cost"/>';
			echo '<li>'.$subs.':'.$v2.':ExPrice</li><input value="'.$resMap[$key.':ExPrice'].'"  class="w3-input input-get-cost"/>';
			
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
