<?php
	ob_start();
	session_start(); 
	include 'loginS2.php';
	include 'config.php';
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/logo.png" />
	<title>Photography DIARY</title>
	
 
	<script src="js/costing.js?1.2" ></script>
	<script src="js/main.js?1.0"></script> 
	
	<link rel="stylesheet" type="text/css" href="css/w3css.css">
	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css"> 

	<link rel="stylesheet" type="text/css" href="css/main.css?1.1">
</head>

<body>
	<div class="header">
	<?php

		$result = explode(";;;;", login());	
		if("ok" != $result[0]){
			echo "ip";
			header("Location: login.php"); /* Redirect browser */
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
	<div id="overlay" onclick="off()"></div>	
	<div class="row">
		<div class="hideInMobile col-3 col-m-3">

			<div class=" asideX">
			
			</div>

		</div>
		<div class="col-6 col-m-9">

			<div >
				<select id='year'  class="w3-select" style="width:21% ;	 float:left;  margin:2px" >
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option> 
				</select>
				<select id='months'  class="w3-select" style="width:34% ;	 float:left;  margin:2px" >
					<option value="N/A">All Months</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
			</div>
			
			<div >
				<button onclick="showAll()" class="w3-btn w3-small w3-blue" style="margin: 1px; width: 70px; height: 40px;float: left;">Search</button>
				<button onclick="clearAll()" class="w3-btn w3-small w3-orange" style="margin: 1px; width: 57px; height: 40px;float: right;">Clear</button>	
				<button onclick="pdfAll()" class="w3-btn w3-small w3-green" style="margin: 1px; width: 57px; height: 40px;float: right;">PDF</button>
			</div>
			<br>
		
			<div style="overflow-x:auto; clear: both;">
				<table id=allListTable> 
				</table>
			</div>
				<p id="wait" style="text-align: center;">wait . . .</p>
			<button id="btnHide" onclick="hideAll()" class="w3-btn w3-orange w3-small" style=" float:left; margin:5px; display:none;">Clear Searched Events</button>
			<br> 
			<input id='ID' style="display:none;" class="w3-input" placeholder="ID"> </input>

			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-purple"> 
					<input id='name' class="w3-input" placeholder="Customer/Groom Name"> </input>
					<br>
					
					<input id='email' class="w3-input" placeholder="Customer/Groom Email" maxlength="30" onchange="setEmailButton()" > </input>
					<br>
					<input id='phone' type="number" class="w3-input" placeholder="Customer/Groom Phone" maxlength="10"> </input>
					<br>
					
					<input id='NameG' class="w3-input" onfocusout="showhideQ7()" onkeyup="showhideQ7()" onchange="showhideQ7()" placeholder="Bride Name" maxlength="30"  > </input>
					<br> 
					<div id="Q7" style="display:none;">
						<input id='EmailG' class="w3-input" placeholder="Bride Email" maxlength="30"> </input>
						<br>
						<input id='PhoneG' type="number" class="w3-input" placeholder="Bride Phone" maxlength="10" > </input>
						<br>
					</div>

					<input id='Address' class="w3-input" placeholder="Address" maxlength="60" > </input>
					<br>
			</div>
			
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">	  
				<label><b>Main Function/Wedding Album Details</b></label>
				<input id='dateW'  class="w3-input"  class="w3-input" type='date' onchange="showhideQ8()"> </input>
				<br>
				<div id="Q8" style="display:none;">
					<select id='timeW'  class="w3-select" >
						<option value="N/A" >-Select Time-</option>
						<option value="Day">Day Event</option>
						<option value="Night">Night Event</option>
					</select>
					<br><br>
					<input id='placeW' placeholder="Main Function/Wedding Location"  class="w3-input" value="" > </input>
					<br>
					<select id='Album1Type'  class="w3-select" style="float: left; width: 125px;" > 
						<option value="Wedding">Wedding</option> 
						<option value="MainEvent">Main Event</option>  
					</select>
					
					<label style="line-height: 47px;"><b> Album Quality</b></label>
					<br><br>
					<select id='CAQuality'  class="w3-select" onchange="showhideQ1(); setAlbumCost(1);" > 
						<option value="N/A">-Not Included-</option> 
						<option value="Magazine">Magazine</option> 
						<option value="Story Book">Story Book</option> 
					</select>
					<br><br>
					
					<div id ="Q1" style="display:none;">
						<select id='CASize'  class="w3-select" onchange="setAlbumCost(1);"> 
							<option value="0">-Select Album Size-</option> 	
							<?php echo getProperty("AlbumSizes"); ?>
						</select>
						<br> <br>
						<div style="float:left">
							<input id='CAPages'  type="number"  class="input-pageCount w3-input" placeholder="Pages Count" onchange="setAlbumCost(1);"> </input>
							<input id='Album1Price'  class="input-price w3-input" placeholder="Price"> </input>
							<input id='Album1Cost'  class="input-cost w3-input" placeholder="Cost"> </input>
						</div>
					</div>
				</div>
					
			</div>
		
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-red">
				<label><b>Homecoming/Engagement Album Details</b></label>
				<input id='dateH'  class="w3-input"  class="w3-input" type='date' onchange="showhideQ9()"> </input>
				<br>
				<div id="Q9" style="display:none;">
					<select id='timeH'  class="w3-select" >
						<option value="N/A" >-Select Time-</option>
						<option value="Day">Day Event</option>
						<option value="Night">Night Event</option>
					</select>
					<br><br>	
					<input id='placeH' placeholder="Homecoming/Engagement Location"  class="w3-input" value=""> </input>
					<br>
					<select id='Album2Type'  class="w3-select" style="float: left; width: 125px;" > 
						<option value="Homecoming">Homecoming</option> 
						<option value="Engagement">Engagement</option>  
					</select> 
					<label style="line-height: 47px;"><b> Album Quality</b></label>
					<br><br>
					<select id='FAQuality'  class="w3-select"  onchange="showhideQ2(); setAlbumCost(2);"> 
						<option value="N/A">-Not Included-</option> 
						<option value="Magazine">Magazine</option> 
						<option value="Story Book">Story Book</option> 
					</select>
					<br><br>
					<div id="Q2" style="display:none;">
						<select id='FASize'  class="w3-select" onchange="setAlbumCost(2);" > 
							<option value="0">-Select Album Size-</option> 
							<?php echo getProperty("AlbumSizes"); ?>
						</select>
						<br> <br> 
						<input id='FAPages' type="number"  class="input-pageCount w3-input" placeholder="Pages Count" onchange="setAlbumCost(2);"> </input>
						<input id='Album2Price'  class="input-price w3-input" placeholder="Price"> </input>
						<input id='Album2Cost'  class="input-cost w3-input" placeholder="Cost"> </input>
						<br>
					</div>	
				</div>
			</div> 
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-purple">
				<label><b>Preshoot Album Quality</b></label>
				<select id='PSQuality'  class="w3-select"  onchange="showhideQ3(); setAlbumCost(3);" > 
					<option value="N/A">-Not Included-</option> 
					<option value="Magazine">Magazine</option> 
					<option value="Story Book">Story Book</option> 
				</select>
				<br><br>
				<div id="Q3" style="display:none;">
					<select id='PSSize' class="w3-select" onchange="setAlbumCost(3);"> 
						<option value="0">-Album Size-</option> 
						<?php echo getProperty("AlbumSizes"); ?>
					</select>
					<br><br> 
					<input id='PSPages' type="number"  class="input-pageCount w3-input" placeholder="Pages Count" onchange="setAlbumCost(3);"> </input>
					<input id='Album3Price'  class="input-price w3-input" placeholder="Price"> </input>
					<input id='Album3Cost'  class="input-cost w3-input" placeholder="Cost"> </input>
				</div>
			</div>
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-Indigo">
			<input type="checkbox" class="w3-check" id="IncludeFA" checked> <b>Include Family Album</b></input><br>
		</div>
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-purple">
					<label><b>Enlargements Details</b></label>
					<div>
						<input id='EnCount1' class="en-count w3-input" maxlength="20" value="1"></input> 
						<select id='EnSize1' class="w3-select" onchange="setEnlargementCost();"> 
							<option value="0">Enlargement Size</option> 
							<?php echo getProperty("EnlargementSizes"); ?>
						</select>
					</div>
					<div>
						<input id='EnCount2' class="en-count w3-input" maxlength="20" value="1"></input> 
						<select id='EnSize2' class="w3-select" onchange="setEnlargementCost();"> 
							<option value="0">Enlargement Size</option> 
							<?php echo getProperty("EnlargementSizes"); ?>
						</select>
					</div>
					<div>
						<input id='EnCount3' class="en-count w3-input" maxlength="20" value="1"></input> 
						<select id='EnSize3' class="w3-select" onchange="setEnlargementCost();"> 
							<option value="0">Enlargement Size</option> 
							<?php echo getProperty("EnlargementSizes"); ?>
						</select>
					</div>
					<br>
			</div>
		
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">
			<label><b>Wedding Thanking Card Details</b></label>
				<select id='thankCardQuality'  class="w3-select" onchange="showhideQ4()" > 
					<option value="N/A">-Not Included-</option> 
					<option value="Single Side Matte">Single Side Matte</option> 
					<option value="Single Side Glossy">Single Side Glossy</option> 
					<option value="Double Side Matte">Double Side Matte</option> 
					<option value="Double Side Glossy">Double Side Glossy</option>  
				</select>
				<br><br>
				<div id ="Q4" style="display:none;">
				<select id='thankCardSize'  class="w3-select" > 
					<option value="N/A">-Select Size-</option> 
					<?php echo getProperty("ThankCardSizes"); ?>
				</select>
				<br><br>
			
				<input id='wedThankCardCount'  class="w3-input" value="100"  placeholder="Card Count"> </input>
				</div>
			</div>
					
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-Red">
				<label><b>Homecoming Thanking Card Details</b></label>
				<select id='ThankCardQualityH'  class="w3-select"  onchange="showhideQ5()"> 
					<option value="N/A">-Not Included-</option> 
					<option value="Single Side Matte">Single Side Matte</option> 
					<option value="Single Side Glossy">Single Side Glossy</option> 
					<option value="Double Side Matte">Double Side Matte</option> 
					<option value="Double Side Glossy">Double Side Glossy</option>  
				</select>
				<br><br>
				<div id ="Q5" style="display:none;"> 
					<select id='ThankCardSizeH'  class="w3-select" > 
						<option value="N/A">-Select Size-</option> 
						<?php echo getProperty("ThankCardSizes"); ?>
					</select>
					<br><br>
					<input id='homeThankCardCount'  class="w3-input" value="100" placeholder="Card Count"> </input>
				</div>
			</div>
	
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-purple">
			<label><b>Video Quality</b></label>	
				<select id='VidQuality'  class="w3-select"  onchange="showhideQ6()" > 
					<option value="N/A">-Not Included-</option> 
					<option value="blueray">Blueray</option> 
					<option value="hd">HD</option> 
				</select>
				<br><br>
				<div id ="Q6" style="display:none;">
					<select id='VidNoOfCam'  class="w3-select" > 
						<option value="N/A">-Select No Of Cam.-</option> 
						<option value="1cam">Use 1 Camera</option> 
						<option value="2cam">Use 2 Cameras</option> 
						<option value="3cam">Use 3 Cameras</option> 
						<option value="4cam">Use 4 Cameras</option>  
					</select>
					<br><br>
					<input type="checkbox" class="w3-check" id="VidPre" checked>Preshoot</input><br>
					<input type="checkbox" class="w3-check" id="VidWed" checked>Wedding</input><br>
					<input type="checkbox" class="w3-check" id="VidHome" checked>Homecoming</input><br>
					<input type="checkbox" class="w3-check" id="VidOther" checked>Other</input><br>
					
					<select id='VidType'  class="w3-select" > 
						<option value="N/A">-Select Coverage Type-</option> 
						<option value="wed">Wedding Only</option> 
						<option value="wedHome">Wedding and Homecoming</option> 
						<option value="pre">Preshoot Only</option> 
						<option value="preWed">Preshoot and Wedding</option> 
						<option value="preWedHome">Preshoot, Wedding and Homecoming</option> 
					</select>
					<br><br>
					<input type="checkbox" class="w3-check" id="IncludeDrone" checked> <b>Include Drone Camera</b></input><br>
				</div>	
			</div>

			<div>
				<textarea id="Comments" placeholder="Additional Comments" style="width:100%;height:150px;"></textarea>
				<input id='Advance1'  type="number" placeholder="Advance1" class="w3-input" onChange="showRemainingBal()" style="margin:5px;width: 25%; float: left;"> </input>
				<input id='Advance2'  type="number" placeholder="Advance2" class="w3-input" onChange="showRemainingBal()" style="margin:5px;width: 25%; float: left;"> </input>
				<input id='Advance3'  type="number" placeholder="Advance3" class="w3-input" onChange="showRemainingBal()" style="margin:5px;width: 25%; float: left;"> </input>
				<br>
				<br><br><br>
				<label id="totalPrice">Total Price       </label>
				<input id='Total'  type="number"  class="w3-input" onChange="showRemainingBal()"> </input>
				<br>
				<label id="transportCost">Transport Cost       </label>
				<input id='Transport'  type="number"  class="w3-input" onChange="showRemainingBal()"> </input>
			</div>

			<div>
				<br>
				<button class="w3-btn w3-green w3-padding-small" onclick="saveNew()" >Save As New</button>
				<button class="w3-btn w3-red w3-padding-small" onclick="update()" style="float:right">Save Existing</button>
				<br><br>
				<button class="w3-btn w3-green w3-padding-small" onclick="savePDF()" >Download Invoice</button>
				<button class="w3-btn w3-blue w3-padding-small" style="float:right"><a id="EmailTo"	href="mailto:someone@example.com?Subject=Hello%20again" target="_top">Send Mail</a></button>		
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
	<a id="help" href='help' target="_blank" style="padding: 50px;">Help Guide</a>
	<a href='#' onclick='createFullReport();'>Download CSV</a>
</body>
</html>
