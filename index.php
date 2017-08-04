<?php
	ob_start();
	session_start(); 
	include 'loginS2.php';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="img/logo.png" />
 <title>Photography DIARY</title>
<script src="js/jspdf.min.js" defer></script>
<script src="js/jquery.js"></script>  
<script src="js/sweetalert.js"></script>

 <style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    border: none;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}

 </style>

<link rel="stylesheet" type="text/css" href="css/w3css.css">
<link rel="stylesheet" type="text/css" href="css/template.css">
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
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
		echo '<script src="js/header/'.$result[1].'H.js"></script>'; 
		echo '<script src="js/footer/'.$result[1].'F.js"></script>';

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
<div>

</div>
</div> 
<div id="overlay" onclick="off()"></div>

<script>

	function myInit(){
		console.log("loaded Async");
	}
function ovOn() {
    document.getElementById("overlay").style.display = "block";
}

function ovOff() {
    document.getElementById("overlay").style.display = "none";
}
</script>
<div class="row">
	<div class="hideInMobile col-3 col-m-3">

        <div class=" asideX">
         
        </div>

    </div>
	<div class="col-6 col-m-9">

		<div >
			<!--<input  id='year' class="w3-input" value='2017' placeholder="Year" style="width:25%; float:left; margin:5px"> -->
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
		 <button id="btnHide" onclick="hideAll()" class="w3-btn w3-orange w3-small" style=" float:left; margin:5px">Clear Searched Events</button>
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
				<div id="Q7">
					<input id='EmailG' class="w3-input" placeholder="Bride Email" maxlength="30"> </input>
					<br>
					<input id='PhoneG' type="number" class="w3-input" placeholder="Bride Phone" maxlength="10" > </input>
					<br>
				</div>

				<input id='Address' class="w3-input" placeholder="Address" maxlength="60" > </input>
				<br>
		</div>
		 
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">
		 <br>
		  
			<label><b>Main Function/Wedding Album Details</b></label>
			
			<input id='dateW'  class="w3-input"  class="w3-input" type='date' onchange="showhideQ8()"> </input>
			<div id="Q8">
				<select id='timeW'  class="w3-select" >
					<option value="N/A" >-Select Time-</option>
					<option value="Day">Day Event</option>
					<option value="Night">Night Event</option>
				</select>
				<input id='placeW' placeholder="Main Function/Wedding Location"  class="w3-input" value="" > </input>
				
					<select id='Album1Type'  class="w3-select" style="float: left; width: 125px;" > 
						<option value="Wedding">Wedding</option> 
						<option value="MainEvent">Main Event</option>  
					</select>
					<label style="line-height: 47px;"><b> Album Quality</b></label>
				<select id='CAQuality'  class="w3-select" onchange="showhideQ1()" > 
					<option value="N/A">-Not Included-</option> 
					<option value="Magazine">Magazine</option> 
					<option value="Story Book">Story Book</option> 
				</select>
				<div id ="Q1">
					<script>
						function showhideQ1(){
							if($('#CAQuality').val()=="N/A"){
								$('#Q1').hide();
							}else{
								$('#Q1').show();
							}
						}
						function showhideQ2(){
							if($('#FAQuality').val()=="N/A"){
								$('#Q2').hide();
							}else{
								$('#Q2').show();
							}
						}
						function showhideQ3(){
							if($('#PSQuality').val()=="N/A"){
								$('#Q3').hide();
							}else{
								$('#Q3').show();
							}
						}
						function showhideQ4(){
							if($('#thankCardQuality').val()=="N/A"){
								$('#Q4').hide();
							}else{
								$('#Q4').show();
							}
						}
						function showhideQ5(){
							if($('#ThankCardQualityH').val()=="N/A"){
								$('#Q5').hide();
							}else{
								$('#Q5').show();
							}
						}
						function showhideQ6(){
							if($('#VidQuality').val()=="N/A"){
								$('#Q6').hide();
							}else{
								$('#Q6').show();
							}
						}
						function showhideQ7(){
							if($('#NameG').val()==""){
								$('#Q7').hide();
							}else{
								$('#Q7').show();
							}
						}

						function showhideQ8(){
							if($('#dateW').val()==""){
								$('#Q8').hide();
							}else{
								$('#Q8').show();
							}
						}
						function showhideQ9(){
							if($('#dateH').val()==""){
								$('#Q9').hide();
							}else{
								$('#Q9').show();
							}
						}
					
					</script>
					<select id='CASize'  class="w3-select" > 
						<option value="0">-Select Album Size-</option> 
						<option value="8 x 16">8 x 16</option> 
						<option value="8 x 20">8 x 20</option> 		
						<option value="10 x 15">10 x 15</option> 
						<option value="10 x 20">10 x 20</option> 
						<option value="10 x 24">10 x 24</option> 
						<option value="10 x 28">10 x 28</option> 
						<option value="12 x 24">12 x 24</option> 
						<option value="12 x 30">12 x 30</option> 
						<option value="15 x 24">15 x 24</option> 
						<option value="16 x 24">16 x 24</option> 
						<option value="17 x 24">17 x 24</option> 
					</select>
					<br> 
					<input id='CAPages'  class="w3-input" value="50"  placeholder="Pages Count"> </input>
				</div>
			</div>
				 
		</div>
		<!-- <div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue"> -->
	
	  	<div class="w3-panel  w3-leftbar w3-rightbar w3-border-red">
			<br>
			<label><b>Homecoming/Engagement Album Details</b></label>
			<input id='dateH'  class="w3-input"  class="w3-input" type='date' onchange="showhideQ9()"> </input>
			<div id="Q9">
				<select id='timeH'  class="w3-select" >
					<option value="N/A" >-Select Time-</option>
					<option value="Day">Day Event</option>
					<option value="Night">Night Event</option>
				</select>	
				<input id='placeH' placeholder="Homecoming/Engagement Location"  class="w3-input" value=""> </input>
			
				<select id='Album2Type'  class="w3-select" style="float: left; width: 125px;" > 
					<option value="Homecoming">Homecoming</option> 
					<option value="Engagement">Engagement</option>  
				</select>
				<label style="line-height: 47px;"><b> Album Quality</b></label>
				<select id='FAQuality'  class="w3-select"  onchange="showhideQ2()" > 
					<option value="N/A">-Not Included-</option> 
					<option value="Magazine">Magazine</option> 
					<option value="Story Book">Story Book</option> 
				</select>
				<div id='Q2'>
					<select id='FASize'  class="w3-select" > 
						<option value="0">-Select Album Size-</option> 
						<option value="8 x 16">8 x 16</option> 
						<option value="8 x 20">8 x 20</option> 		
						<option value="10 x 15">10 x 15</option> 
						<option value="10 x 20">10 x 20</option> 
						<option value="10 x 24">10 x 24</option> 
						<option value="10 x 28">10 x 28</option> 
						<option value="12 x 24">12 x 24</option> 
						<option value="12 x 30">12 x 30</option> 
						<option value="15 x 24">15 x 24</option> 
						<option value="16 x 24">16 x 24</option> 
						<option value="17 x 24">17 x 24</option> 
					</select>
					<br> 
					<input id='FAPages' class="w3-input" value="40" placeholder="Pages Count"> </input>
					<br>
				</div>	
			</div>
		</div> 
		 <div class="w3-panel  w3-leftbar w3-rightbar w3-border-purple">
			<br>
			<label><b>Preshoot Album Quality</b></label>
			<select id='PSQuality'  class="w3-select"  onchange="showhideQ3()" > 
				<option value="N/A">-Not Included-</option> 
				<option value="Magazine">Magazine</option> 
				<option value="Story Book">Story Book</option> 
			</select>
			<div id='Q3'>
			<select id='PSSize'  class="w3-select" > 
				<option value="0">-Album Size-</option> 
				<option value="8 x 16">8 x 16</option> 
				<option value="8 x 20">8 x 20</option> 		
				<option value="10 x 15">10 x 15</option> 
				<option value="10 x 20">10 x 20</option> 
				<option value="10 x 24">10 x 24</option> 
				<option value="10 x 28">10 x 28</option> 
				<option value="12 x 24">12 x 24</option> 
				<option value="12 x 30">12 x 30</option> 
				<option value="15 x 24">15 x 24</option> 
				<option value="16 x 24">16 x 24</option> 
				<option value="17 x 24">17 x 24</option> 
			</select>
			<br> 
			<!--<label>Preshoot Album Pages Count</label>-->
			<input id='PSPages' class="w3-input" value="60"  placeholder="Pages Count"> </input>
			</div>
		</div>
		<br> 
	<div class="w3-panel  w3-leftbar w3-rightbar w3-border-Indigo"> 
	<!-- <div> -->
		 <input type="checkbox" class="w3-check" id="IncludeFA" checked> <b>Include Family Album</b></input><br>
		</div>
		<br>
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-purple">
		<label><b>Enlargements Details</b></label>
<input id='Enlarge1' class="w3-input" maxlength="50" value=""> </input>
<input id='Enlarge2' class="w3-input" maxlength="50" value=""> </input>
<input id='Enlarge3' class="w3-input" maxlength="50" value=""> </input>
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
			<br>
			<div id ="Q4">
			<select id='thankCardSize'  class="w3-select" > 
				<option value="N/A">-Select Size-</option> 
				<option value="4 x 8">4 x 8</option> 
				<option value="4 x 12">4 x 12</option> 
				<option value="5 x 8">5 x 8</option> 
				<option value="5 x 10">5 x 10</option> 
				<option value="6 x 6">6 x 6</option> 
			</select>
			<br>
		
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
			<div id ="Q5"> 
				<select id='ThankCardSizeH'  class="w3-select" > 
					<option value="N/A">-Select Size-</option> 
					<option value="4 x 8">4 x 8</option> 
					<option value="4 x 12">4 x 12</option> 
					<option value="5 x 8">5 x 8</option> 
					<option value="5 x 10">5 x 10</option> 
					<option value="6 x 6">6 x 6</option> 
				</select>
				<br>

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
			<br>
			<div id ="Q6">
				<select id='VidNoOfCam'  class="w3-select" > 
					<option value="N/A">-Select No Of Cam.-</option> 
					<option value="1cam">Use 1 Camera</option> 
					<option value="2cam">Use 2 Cameras</option> 
					<option value="3cam">Use 3 Cameras</option> 
					<option value="4cam">Use 4 Cameras</option>  
				</select>
				
				<select id='VidType'  class="w3-select" > 
					<option value="N/A">-Select Coverage Type-</option> 
					<option value="wed">Wedding Only</option> 
					<option value="wedHome">Wedding and Homecoming</option> 
					<option value="pre">Preshoot Only</option> 
					<option value="preWed">Preshoot and Wedding</option> 
					<option value="preWedHome">Preshoot, Wedding and Homecoming</option> 
				</select>
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
<script>
function validateData(){
		if("" == $('#name').val()){
			swal("Invalid Inputs", "Name of the Customer cannot be empty", "error");
			return false;
		}else if( $('#dateW').val() == "" && $('#dateH').val() == ""){
			swal("Invalid Inputs", "You have to add atleast 1 date", "error");
			return false;
		}else if(  $('#dateW').val()!=""  &&   Number($('#year').children()[0].value) > Number($('#dateW').val().split("-")[0]) ){
			swal("Invalid Inputs", "Main/Wedding date should not be in past", "error");
						return false;
		}else if(  $('#dateH').val()!=""  &&   Number($('#year').children()[0].value) > Number($('#dateH').val().split("-")[0]) ){
			swal("Invalid Inputs", "Engage./Homecom. date should not be in past", "error");
						return false;
		}
		return true; 
}
function getWedding(event) {
   	ovOn();
	$( "#btnHide" ).hide();
	$( "#allListTable" ).empty();
	$.post('getWedding.php', { 
			ID: event.id,
			DBTableName: tableName
		}, 
		function(returnedData){
		
			var obj = JSON.parse(returnedData);
			$('#ID').val(obj.ID);
			$('#name').val(obj.name);
			$('#email').val(obj.email); 
			$('#phone').val(obj.phone);

			$('#NameG').val(obj.NameG).change();
			$('#EmailG').val(obj.EmailG); 
			$('#PhoneG').val(obj.PhoneG);

			if(obj.dateW.startsWith("2010-01") ||  "" == obj.dateW){
				$('#dateW').val('').change();
			}else{
				$('#dateW').val(obj.dateW).change();
			}

			if(obj.dateH.startsWith("2010-01") ||  "" == obj.dateH){
				$('#dateH').val('').change();
			}else{
				$('#dateH').val(obj.dateH).change();
			}

			$('#timeW').val(obj.timeW); 
			$('#placeW').val(obj.placeW);
			$('#CASize').val(obj.CASize);
			$('#CAPages').val(obj.CAPages); 
			$('#CAQuality').val(obj.CAQuality).change();
			$('#FASize').val(obj.FASize);
			$('#FAPages').val(obj.FAPages); 
			$('#FAQuality').val(obj.FAQuality).change();; 
			$('#thankCardSize').val(obj.thankCardSize);
			$('#thankCardQuality').val(obj.thankCardQuality).change();  
			$('#wedThankCardCount').val(obj.wedThankCardCount); 
			$('#homeThankCardCount').val(obj.homeThankCardCount);
	
			$('#Address').val(obj.Address);
			
			$('#timeH').val(obj.timeH); 
			$('#placeH').val(obj.placeH);
			$('#PSSize').val(obj.PSSize);
			$('#PSPages').val(obj.PSPages); 
			$('#PSQuality').val(obj.PSQuality).change();
			$('#VidQuality').val(obj.VidQuality).change(); 
			$('#VidNoOfCam').val(obj.VidNoOfCam);
			$('#VidType').val(obj.VidType);	

			$('#Enlarge1').val(obj.Enlarge1); 	
			$('#Enlarge2').val(obj.Enlarge2); 	
			$('#Enlarge3').val(obj.Enlarge3); 
			
			$('#Advance1').val(obj.Advance1);	
			$('#Advance2').val(obj.Advance2);	
			$('#Advance3').val(obj.Advance3);
			$('#Total').val(obj.Total);
			$('#Comments').val(obj.Comments);			
			
			$('#IncludeFA').prop('checked', obj.includeFA); 
			$('#IncludeDrone').prop('checked', obj.IncludeDrone); 

			$('#ThankCardSizeH').val(obj.ThankCardSizeH);	
			$('#ThankCardQualityH').val(obj.ThankCardQualityH).change(); 
			$('#Transport').val(obj.Transport);	
			$('#Album1Type').val(obj.Album1Type);
			$('#Album2Type').val(obj.Album2Type);
			
			showRemainingBal();
		
		
		setEmailButton();

			ovOff();
			console.log(returnedData);
			 
		}).fail(function(){
			  console.log("error");
	});
}
function deleteWedding(event) {
   	
	swal({
			title: "Delete Existing Event",
			text: "Are You Sure ?",
			type: "error",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		},
		function(){
					
					$.post('deleteWedding.php', { 
						DBTableName: tableName,
						ID: event.id	
					}, 
					function(returnedData){
						$( "#btnHide" ).hide();
						$( "#allListTable" ).empty();
						swal("Deleted!", "Event Deleted Successfully", "success");
						console.log(returnedData); 
					}).fail(function(){
						console.log("error");
					});
		
	});

}
function clearAll() {

			hideAll();
			// $('#Q1').hide();
			// $('#Q2').hide();

			$('#ID').val("");
			$('#name').val("");
			$('#email').val(""); 
			$('#phone').val(""); 

			$('#NameG').val("").change();
			$('#EmailG').val(""); 
			$('#PhoneG').val(""); 

			$('#dateW').val("").change(); 
			$('#timeW').val("N/A"); 
			$('#placeW').val(""); 
			$('#CASize').val("0"); 
			$('#CAPages').val(""); 
			$('#CAQuality').val("N/A").change(); 
			$('#FASize').val("0"); 

			$('#Album1Type').val("Wedding");
			$('#Album2Type').val("Homecoming");

			$('#FAPages').val(""); 
			$('#FAQuality').val("N/A").change(); 
			$('#thankCardSize').val("N/A"); 
			$('#thankCardQuality').val("N/A").change();   
			$('#wedThankCardCount').val(""); 
			$('#homeThankCardCount').val(""); 
	
			$('#Address').val(""); 
			$('#dateH').val("").change(); 
			$('#timeH').val("N/A"); 
			$('#placeH').val(""); 
			$('#PSSize').val("0"); 
			$('#PSPages').val(""); 
			$('#PSQuality').val("N/A").change(); 
			$('#VidQuality').val("N/A").change();  
			$('#VidNoOfCam').val("N/A"); 
			$('#VidType').val("N/A"); 	

			$('#Enlarge1').val(enlargements[0]); 	
			$('#Enlarge2').val(enlargements[1]); 	
			$('#Enlarge3').val(enlargements[2]); 	
			
			$('#Advance1').val(""); 	
			$('#Advance2').val(""); 
			$('#Advance3').val(""); 
			$('#Total').val(""); 
			$('#Comments').val(""); 			
			
			$('#IncludeFA').prop('checked', true); 
			$('#IncludeDrone').prop('checked', false); 

			$('#ThankCardSizeH').val("N/A");	
			$('#ThankCardQualityH').val("N/A").change(); 
			$('#Transport').val("");		
}
function showAll() {
	ovOn();
   	$( "#allListTable" ).empty()
	$.post('showAll.php', { 
			DBTableName: tableName,
			year: $('#year').val(),
			month: $('#months').val()
		}, 
		function(returnedData){
			ovOff();
			console.log(returnedData);
			if(returnedData != "ip"){
				var allArr = JSON.parse(returnedData);
				allArr.sort(function(a, b){return Date.parse(a.date)-Date.parse(b.date)});
				if( allArr.length == 0){
					$( "#allListTable" ).append("<tr><td style='text-align: center;'>0 results found for this period</td></tr>");			
				}
				for (var i = 0; i < allArr.length; i++) {
					$( "#allListTable" ).append( "<tr id='"+allArr[i].ID+"' onclick='getWedding(this)'><td>"+allArr[i].name+"</td><td>"+allArr[i].date+"</td><td>"+allArr[i].time+':'+allArr[i].type+"</td><td><button id='"+allArr[i].ID+"' class='w3-btn w3-small w3-blue' onclick='getWedding(this)'>Open</button></td><td><button id='"+allArr[i].ID+"' class='w3-btn w3-small w3-red' onclick='deleteWedding(this)'>Delete</button></td></tr>" );
				}
			}else{
				document.location = "login.php";
			}
			
		}).fail(function(){
			  console.log("error");
	});
	$( "#btnHide" ).show();
}
function hideAll() {
   	$( "#allListTable" ).empty();
	$( "#btnHide" ).hide();
}
function setEmailButton(){
		var mailToLink = "mailto:" + $('#email').val() + "?Subject=Siyeraa Studio Event Plan";
		$("#EmailTo").attr("href", mailToLink);
		console.log("Email set");
}
function saveNew() {

	if(validateData()==false){
		return;
	}
   		swal({
			title: "Save New Event",
			text: "Are You Sure ?",
			type: "info",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		},
		function(){

			setEmailButton();
	$.post('addWedding.php', { 

		DBTableName: tableName,
		
		name: $('#name').val(), 
		email: $('#email').val(), 
		phone: $('#phone').val(),

		NameG: $('#NameG').val(), 
		EmailG: $('#EmailG').val(), 
		PhoneG: $('#PhoneG').val(),

		dateW : $('#dateW').val(),
		timeW: $('#timeW').val(), 
		placeW: $('#placeW').val(),
		CASize: $('#CASize').val(),
		CAPages: $('#CAPages').val(), 
		CAQuality: $('#CAQuality').val(), 
		FASize: $('#FASize').val(), 
		FAPages: $('#FAPages').val(), 
		FAQuality: $('#FAQuality').val(), 
		thankCardSize: $('#thankCardSize').val(),
		thankCardQuality: $('#thankCardQuality').val(), 
		wedThankCardCount: $('#wedThankCardCount').val(), 
		homeThankCardCount: $('#homeThankCardCount').val(),
	
		Address: $('#Address').val(), 
	
		dateH :$('#dateH').val(),
		timeH: $('#timeH').val(), 
		placeH: $('#placeH').val(),
		PSSize: $('#PSSize').val(), 
		PSPages: $('#PSPages').val(), 
		PSQuality: $('#PSQuality').val(),
		VidQuality: $('#VidQuality').val(), 
		VidNoOfCam: $('#VidNoOfCam').val(), 
		VidType: $('#VidType').val(),

		Enlarge1: $('#Enlarge1').val(),
		Enlarge2: $('#Enlarge2').val(), 	
		Enlarge3: $('#Enlarge3').val(), 
		
		Comments: $('#Comments').val(),
		Advance1: parseInt($('#Advance1').val()) ? $('#Advance1').val() : '',
		Advance2: parseInt($('#Advance2').val()) ? $('#Advance2').val() : '', 
		Advance3: parseInt($('#Advance3').val()) ? $('#Advance3').val() : '', 
		Total: parseInt($('#Total').val()) ? $('#Total').val() : '0',
		IncludeFA: $('#IncludeFA').is(":checked"),
		IncludeDrone: $('#IncludeDrone').is(":checked"),

		ThankCardSizeH : $('#ThankCardSizeH').val(),
		ThankCardQualityH: $('#ThankCardQualityH').val(), 
		Transport: $('#Transport').val(),

		Album1Type: $('#Album1Type').val(),
		Album2Type: $('#Album2Type').val()
		
	}, 
    function(returnedData){
         console.log(returnedData);
		 ovOff();
		 if(returnedData == "ok"){
		 	swal("New Event Saved", $('#name').val() , "success");
			clearAll();
		 }else{
			swal("Oops...", "Unexpected Error. Please Contact MSOFT", "error");
		 }
	}).fail(function(returnedData){
		  console.log("error "  + returnedData);
	});
		});

}
function update() { 

	if($('#ID').val() == ""){
		swal("Do You Need To Change An Event", "You Don't Have Opened An Event" , "error");
		return;
	}

	if(validateData()==false){
		return;
	}

		swal({
			title: "Do You Need To Change An Event",
			text: "Are You Sure ?",
			type: "warning",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		},
		function(){
			ovOn();
			setEmailButton();
			$.post('editWedding.php', { 

				DBTableName: tableName,
				ID: $('#ID').val(),
				
				name: $('#name').val(), 
				email: $('#email').val(),
				phone: $('#phone').val(),

				NameG: $('#NameG').val(), 
				EmailG: $('#EmailG').val(),
				PhoneG: $('#PhoneG').val(),

				dateW : $('#dateW').val(),
				timeW: $('#timeW').val(), 
				placeW: $('#placeW').val(),
				CASize: $('#CASize').val(),
				CAPages: $('#CAPages').val(), 
				CAQuality: $('#CAQuality').val(), 
				FASize: $('#FASize').val(), 
				FAPages: $('#FAPages').val(), 
				FAQuality: $('#FAQuality').val(), 
				thankCardSize: $('#thankCardSize').val(),
				thankCardQuality: $('#thankCardQuality').val(), 
				wedThankCardCount: $('#wedThankCardCount').val(), 
				homeThankCardCount: $('#homeThankCardCount').val(),
			
				Address: $('#Address').val(), 
			
				dateH : $('#dateH').val(),
				timeH: $('#timeH').val(), 
				placeH: $('#placeH').val(),
				PSSize: $('#PSSize').val(), 
				PSPages: $('#PSPages').val(), 
				PSQuality: $('#PSQuality').val(),
				VidQuality: $('#VidQuality').val(), 
				VidNoOfCam: $('#VidNoOfCam').val(), 
				VidType: $('#VidType').val(),

				Enlarge1: $('#Enlarge1').val(),
				Enlarge2: $('#Enlarge2').val(), 	
				Enlarge3: $('#Enlarge3').val(), 
				
				Comments: $('#Comments').val(),
				
				Advance1: parseInt($('#Advance1').val()) ? $('#Advance1').val() : '',
				Advance2: parseInt($('#Advance2').val()) ? $('#Advance2').val() : '', 
				Advance3: parseInt($('#Advance3').val()) ? $('#Advance3').val() : '', 
				Total: parseInt($('#Total').val()) ? $('#Total').val() : '0',
				
				IncludeFA: $('#IncludeFA').is(":checked"),
				IncludeDrone: $('#IncludeDrone').is(":checked"),

				ThankCardSizeH : $('#ThankCardSizeH').val(),
				ThankCardQualityH: $('#ThankCardQualityH').val(), 
				Transport: $('#Transport').val(),
				Album1Type: $('#Album1Type').val(),
				Album2Type: $('#Album2Type').val()
			}, 
			function(returnedData){
				ovOff();
				console.log(returnedData);
				
				swal("Updated Existing Event", $('#name').val() , "success");
				//alert("Done" + returnedData);
			}).fail(function(returnedData){
				console.log("error "  + returnedData);
			});
		});
}
</script>
<script>

function showRemainingBal(){
	 
	var adv1 = parseInt($('#Advance1').val())?parseInt($('#Advance1').val()):0; 
	var adv2 = parseInt($('#Advance2').val())?parseInt($('#Advance2').val()):0; 
	var adv3 = parseInt($('#Advance3').val())?parseInt($('#Advance3').val()):0; 
	// var transport = parseInt($('#Transport').val())?parseInt($('#Transport').val()):0; 
	var Total = parseInt($('#Total').val())?parseInt($('#Total').val()):0; 
	var bal = Total-adv1-adv2-adv3;
  
	document.getElementById('totalPrice').innerHTML = "Total Price        (To be paid="+bal+")";
}

function savePDF(){
	var time = (new Date()).toLocaleDateString('en-US');

	var doc = new jsPDF();
	doc.addImage(head, 'PNG', 0, 0, 210, 42);
 
	doc.addImage(foot, 'PNG', 0, 255, 210, 42);


	var line = 50;

	doc.setFontSize(10);
	doc.text(150, line, new Date().toString().split("GMT")[0]);
	
	var shift = 0; 
	 
	doc.setFontSize(12);
	
	doc.setFontSize(10);
	doc.text(25, line+10, 'Customer/Groom Name : '+$('#name').val());	
	doc.text(25, line+15, 'Email : '+$('#email').val());
	doc.text(25, line+20, 'Phone : '+$('#phone').val());
	doc.text(25, line+28, 'Addres : '+$('#Address').val());
	shift = 80; 
	doc.setFontSize(10);

	if($('#NameG').val() != ""){
		doc.text(25+shift, line+10, 'Bride Name : '+$('#NameG').val()); 
		doc.text(25+shift, line+15, 'Email : '+$('#EmailG').val());
		doc.text(25+shift, line+20, 'Phone : '+$('#PhoneG').val());
	}
	line = line + 35;
	
	var datePrinted = false;
	var shiftDate = 0;
	if(!$('#dateW').val().startsWith("2010-01") &&  ""!=$('#dateW').val()){
		doc.text(25, line+5,  $('#Album1Type').val()+' Date : '+$('#dateW').val());
		doc.text(25, line+10, 'Location : '+$('#placeW').val());
		doc.text(25, line+15, 'Time : '+$('#timeW').val());
		datePrinted = true;
		shiftDate = 75;
	}
	
	if(!$('#dateH').val().startsWith("2010-01") &&  ""!=$('#dateH').val()){
		doc.text(25 + shiftDate, line+5,  $('#Album2Type').val()+' Date : '+$('#dateH').val());
		doc.text(25 + shiftDate, line+10, 'Location : '+$('#placeH').val());
		doc.text(25 + shiftDate, line+15, 'Time : '+$('#timeH').val());
		datePrinted = true;
	}
	if(datePrinted){
		line = line+30;
	}
	
	var albumsPrinted = false;
	if($('#CAQuality').val() != "N/A"){ 
		shift = 0; 
		doc.setFontSize(11);
		doc.text(25, line,  $('#Album1Type').val()+' Album');
		doc.setFontSize(10);
		doc.text(30, line+5, 'Quality : '+$('#CAQuality').val());
		doc.text(30, line+10, 'Size : '+$('#CASize').val());
		doc.text(30, line+15, 'Pages : '+$('#CAPages').val());
		albumsPrinted = true;
	
	}
	if($('#FAQuality').val() != "N/A"){ 
		shift = shift+50; 
		doc.setFontSize(11);
		doc.text(25+shift, line,  $('#Album2Type').val()+' Album');
		doc.setFontSize(10);
		doc.text(30+shift, line+5, 'Quality : '+$('#FAQuality').val());
		doc.text(30+shift, line+10, 'Size : '+$('#FASize').val());
		doc.text(30+shift, line+15, 'Pages : '+$('#FAPages').val());
		//shift = shift+60; 
		albumsPrinted = true;
	}	
	if($('#PSQuality').val() != "N/A"){ 
		shift = shift+50; 
		doc.setFontSize(11);
		doc.text(25+shift, line, 'Preshoot Album');
		doc.setFontSize(10);
		doc.text(30+shift, line+5, 'Quality : '+$('#PSQuality').val());
		doc.text(30+shift, line+10, 'Size : '+$('#PSSize').val());
		doc.text(30+shift, line+15, 'Pages : '+$('#PSPages').val());
		albumsPrinted = true;
	}
	if(albumsPrinted){
		line=line+25;
	}
	
	doc.setFontSize(10);
	if($('#IncludeFA').is(":checked") == true){
		doc.text(25, line,"1 Family Album included (8x12 story type)");
		line=line+10;
	}

	//////////////////////Thanking Card Details//////////////////////
	
	shift = 0;

	var thankCardPrinted = false;
	if($('#thankCardQuality').val() != "N/A"){ 
	
		doc.setFontSize(11);
		doc.text(25, line,"Wedding Thanking Cards ");
		doc.setFontSize(10);
		doc.text(30, line+5,"Quality : " + $('#thankCardQuality').val());
		doc.text(30, line+10,"Size : " + $('#thankCardSize').val());
		doc.text(30, line+15,"No. Thanking Cards : " + $('#wedThankCardCount').val()); 
		shift = 80;
		thankCardPrinted = true;
	}
	
	if($('#ThankCardQualityH').val() != "N/A"){ 
		 
		doc.setFontSize(11);
		doc.text(25+shift, line,"Homecoming Thanking Cards ");
		doc.setFontSize(10);
		doc.text(30+shift, line+5,"Quality : " + $('#ThankCardQualityH').val());
		doc.text(30+shift, line+10,"Size : " + $('#ThankCardSizeH').val()); 
		doc.text(30+shift, line+15,"No. Thanking Cards : " + $('#homeThankCardCount').val());
		thankCardPrinted = true;
	}
	if(thankCardPrinted){
		line=line+25;
	}
	//////////////////////////////////////////////////////////////////

	if($('#Enlarge1').val() != "" || $('#Enlarge2').val() != "" || $('#Enlarge3').val() != ""){
		doc.setFontSize(11);
		doc.text(25, line,"Enlargements");
		doc.setFontSize(10);
		doc.text(30, line+5,$('#Enlarge1').val());
		doc.text(30, line+10,$('#Enlarge2').val());
		doc.text(30, line+15,$('#Enlarge3').val()); 
		line=line+25;
	}
	////////////////////////////////////////////////////////////////////

	if($('#VidQuality').val() != "N/A"){ 
		
		doc.setFontSize(11);
		doc.text(25, line,"Video Details");
		doc.setFontSize(10);
		doc.text(30, line+5,"Quality : "+$('#VidQuality').val());
		doc.text(30, line+10,"No Of Cameras : "+ $('#VidNoOfCam').val());
		doc.text(30, line+15,"Type : "+$('#VidType').find(":selected").text()); 
		
		if($('#IncludeDrone').is(":checked") == true){	
			doc.text(30, line+20,"Drone camera will be used for preshoot video process");
		}
		line = line+20;
	}
	
	var adv1 = parseInt($('#Advance1').val())?parseInt($('#Advance1').val()):0; 
	var adv2 = parseInt($('#Advance2').val())?parseInt($('#Advance2').val()):0; 
	var adv3 = parseInt($('#Advance3').val())?parseInt($('#Advance3').val()):0; 

	var sumPayments = adv1 + adv2 + adv3;
	line=line+10;
	doc.setFontSize(12);
	doc.text(25, line,"Total Album Price : "+$('#Total').val()+"/=");
	doc.setFontSize(10);
	var trnsp =  $('#Transport').val() == "" ? "N/A" : ($('#Transport').val() +"/= ");
	doc.text(25, line+5,"Transport Cost : "+trnsp);
	doc.setFontSize(10);
	doc.text(120, line+5,"Advance Payments : "+sumPayments+"/= ");
	
	line=line+15;
	var splitTitle = doc.splitTextToSize($('#Comments').val(), 150);
	if($('#Comments').val() != ""){ 
		doc.setFontSize(10);
		doc.text(25, line, splitTitle);
	}
	var fileName =$('#name').val()+'-'+ $('#dateW').val()+'.pdf';
	doc.save(fileName);

}
 
function pdfAll(){
	swal({
		title: "Downloading Shedule",
		text: "Year: "+$('#year').val()+" Month: "+$('#months').val(),
		timer: 3000,
		showConfirmButton: false
	});
	$.post('showAll.php', { 
			DBTableName: tableName,
			year: $('#year').val(),
			month: $('#months').val()
		}, 
		function(returnedData){
			ovOff();
			console.log(returnedData);
			if(returnedData != "ip"){
				var time = (new Date()).toLocaleDateString('en-US');
				var date = String(new Date()).split("GMT")[0];
				var doc = new jsPDF();
				doc.setFontSize(15);
				var line=20;
				var shift =50;
				var pageHeight = doc.internal.pageSize.height;
				var topic =  $('#months').val() == "N/A" ? "" : "/"+$('#months').val();
				doc.text(20, line,$('#year').val()+topic+" shedule");
				doc.setFontSize(10);
				doc.text(70, line,date);
				doc.setFontSize(15);
				doc.text(125, line,studioName);
				line = line+5;
				doc.setFontSize(10);
				var allArr = JSON.parse(returnedData);
				allArr.sort(function(a, b){return Date.parse(a.date)-Date.parse(b.date)});
				for (var i = 0; i < allArr.length; i++) {
					line = line+5;
					doc.text(20, line, (i+1)+'.');
					doc.text(30, line, allArr[i].name);
					doc.text(70, line, allArr[i].date);
					doc.text(95, line, allArr[i].time);
					doc.text(105, line, allArr[i].type);
					doc.text(125, line, allArr[i].phone);
					doc.text(147, line, allArr[i].location);
					
					if (line+20>=pageHeight){
						doc.addPage();
						line=10;
					}
				}
				doc.save($('#year').val()+":"+$('#months').val()+" shedule");
			}else{
				document.location = "login.php";
			}
			
		}).fail(function(){
			  console.log("error");
	});
} 

 $( document ).ready(function() {
    clearAll();
	//hiding Help
	if(tableName == "siyeraa"){
		$('#help').hide();
	}
	// var doc = new jsPDF();
	// console.log("mkpt");

	// $(".no_comma").on("input", function(){
	// var regexp = /[^a-zA-Z]/g;
	// if($(this).val().match(regexp)){
	// 	$(this).val( $(this).val().replace(regexp,'') );
	// }
	// });
	
});


function createFullReport(){
	swal({
		title: "Creating Backup",
		text: "This May Take Few Seconds",
		timer: 3000,
		showConfirmButton: false
	});
	$.post('getAllEvents.php', { 
			DBTableName: tableName,
		}, 
		function(returnedData){
			ovOff();
			console.log(returnedData);
			downloadCSV(returnedData);
			
		}).fail(function(){
			  console.log("error");
	});
} 

function downloadCSV(csv) {  
		var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/');
        var filename, link;
        if (csv == null) return;

        filename = 'backup'+utc+'.csv';

        if (!csv.match(/^data:text\/csv/i)) {
            csv = 'data:text/csv;charset=utf-8,' + csv;
        }
        data = encodeURI(csv);

        link = document.createElement('a');
        link.setAttribute('href', data);
        link.setAttribute('download', filename);
        link.click();
}


function validatePayment(){
	
}

</script>


</html>
