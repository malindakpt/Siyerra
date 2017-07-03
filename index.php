<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jspdf.debug.js"></script>
<script src="js/jquery.js"></script>  
<script src="js/sweetalert.js"></script>  
<script src="js/headerImg.js"></script>  
<link rel="stylesheet" type="text/css" href="css/w3css.css">
<link rel="stylesheet" type="text/css" href="css/template.css">
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="header">
    <!--<span class="inlineMenu"  style="float:right"><img class="logo" src="img/logo1.png"/></span>-->
    <!--<span class="topic">Siyerra Studio  </span>-->
	<h3 style="float:left">Siyeraa Studio</h3>
	 <br>
	<?php
		// include 'loginS2.php';
		// session_start();
	
		session_start(); 
		include 'loginS2.php';
		
		if("ok" != login()){
			echo "ip";
			header("Location: login.php"); /* Redirect browser */
			exit();
			// return;
		}
	
		if("ok" != login()){echo "<a href=login.php style=float:right>login</a>";}else{	echo "<a href=login.php style=float:right>logout</a>";}	
	
		
	
	?>
 <br>
<div>

</div>
</div> 
<div id="overlay" onclick="off()"></div>

<script>
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
			<select id='year'  class="w3-select" style="width:25% ;	 float:left;  margin:5px" >
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option> 
			</select>
			<select id='months'  class="w3-select" style="width:40% ;	 float:left;  margin:5px" >
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
		
			 <button onclick="showAll()" class="w3-btn w3-blue w3-padding-small" style=" float:left; margin:5px">Load</button>
			  <button onclick="clearAll()" class="w3-btn w3-yellow w3-padding-small" style=" float:left; margin:5px">Clear</button>
			<!--<img class="logo" src="img/search.png" onclick="showAll()" />-->
		</div>
		

		<table id=allListTable class="w3-table-all w3-centered">

		</table>
		 <button id="btnHide" onclick="hideAll()" class="w3-btn w3-blue w3-padding-small" style=" float:left; margin:5px">Hide All Events</button>
		<br> 
		<input id='ID' style="display:none;" class="w3-input" placeholder="ID"> </input>
		<input id='name' class="w3-input" placeholder="Groom Name" maxlength="28"> </input>
		<br>
		
		<input id='email' class="w3-input" placeholder="Groom Email" maxlength="30"> </input>
		<br>
		<input id='phone' type="number" class="w3-input" placeholder="Groom Phone" maxlength="10"> </input>
		<br>
		<!--Girls Details-->
		<input id='NameG' class="w3-input" placeholder="Bride Name" maxlength="30"> </input>
		<br> 
		<input id='EmailG' class="w3-input" placeholder="Bride Email" maxlength="30"> </input>
		<br>
		<input id='PhoneG' type="number" class="w3-input" placeholder="Bride Phone" maxlength="10"> </input>
		<br>

		<input id='Address' class="w3-input" placeholder="Address" maxlength="60"> </input>
		<br>
		 
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">
		 <br>
			<label><b>Select Wedding Date</b></label>
			<input id='dateW'  class="w3-input"  class="w3-input" type='date'> </input>
			<select id='timeW'  class="w3-select" >
				<option value="N/A" >Select Wedding Day/Night Function</option>
				<option value="Day">Day Event</option>
				<option value="Night">Night Event</option>
			</select>
		
			<input id='placeW' placeholder="Enter Wedding Location"  class="w3-input" value="" > </input>
			
			<br><br>
			<label><b>Select Homecoming Date</b></label>
			<input id='dateH'  class="w3-input"  class="w3-input" type='date'> </input>
			<select id='timeH'  class="w3-select" >
				<option value="N/A" >Select Homecoming Day/Night Function</option>
				<option value="Day">Day Event</option>
				<option value="Night">Night Event</option>
			</select>	
			<input id='placeH' placeholder="Enter Homecoming Location"  class="w3-input" value=""> </input>
			<br>			 
		</div>
		<label><b>Main/Wedding Album Quality</b></label>
		<select id='CAQuality'  class="w3-select" > 
			<option value="N/A">N/A</option> 
			<option value="Magazine">Magazine</option> 
			<option value="Sory Book">Sory Book</option> 
		</select>
		<label>Main/Wedding Album Size</label>
		<select id='CASize'  class="w3-select" > 
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
		<label>Main/Wedding Pages Count</label>
		<input id='CAPages'  class="w3-input" value="50"> </input>
		  
	  <div class="XXX">
			<br>
			<select id='Album2Type'  class="w3-select" style="float: left; width: 120px;" > 
				<option value="Homecoming">Homecoming</option> 
				<option value="Engagement">Engagement</option>  
			</select>
			<label style="line-height: 47px;"><b> Album Quality</b></label>
			<select id='FAQuality'  class="w3-select" > 
				<option value="N/A">N/A</option> 
				<option value="Magazine">Magazine</option> 
				<option value="Sory Book">Sory Book</option> 
			</select>
			<label>Homecoming Album Size</label>
			<select id='FASize'  class="w3-select" > 
				<option value="10 x 24">10 x 24</option> 
				<option value="10 x 28">10 x 28</option> 
				<option value="12 x 24">12 x 24</option> 
				<option value="12 x 30">12 x 30</option> 
				<option value="15 x 24">15 x 24</option> 
				<option value="16 x 24">16 x 24</option> 
				<option value="17 x 24">17 x 24</option>
			</select>
			<br> 
			<label>Homecoming Album Pages Count</label>
			<input id='FAPages' class="w3-input" value="40"> </input>
			 
		</div> 
		 <div class="XXX">
			<br>
			<label><b>Preshoot Album Quality</b></label>
			<select id='PSQuality'  class="w3-select" > 
				<option value="N/A">N/A</option> 
				<option value="Magazine">Magazine</option> 
				<option value="Sory Book">Sory Book</option> 
			</select>
			<label>Preshoot Album Size</label>
			<select id='PSSize'  class="w3-select" > 
				<option value="8 x 16">8 x 16</option> 
				<option value="10 x 20">10 x 20</option> 
				<option value="10 x 24">10 x 24</option> 
				<option value="12 x 24">12 x 24</option> 
			</select>
			<br> 
			<label>Preshoot Album Pages Count</label>
			<input id='PSPages' class="w3-input" value="60"> </input>
			
		</div>
		<br> 
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-yellow">
		 <input type="checkbox" class="w3-check" id="IncludeFA" checked> <b>Include Family Album</b></input><br>
		</div>
		<br>
		<label><b>Wedding Thanking Card Details</b></label>
		
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">

			<label>Thanking Card Quality</label>
			<select id='thankCardQuality'  class="w3-select" > 
				<option value="N/A">N/A</option> 
				<option value="Single Side Matte">Single Side Matte</option> 
				<option value="Single Side Glossy">Single Side Glossy</option> 
				<option value="Double Side Matte">Double Side Matte</option> 
				<option value="Double Side Glossy">Double Side Glossy</option>  
			</select>
			<br>

			<label>Thanking Card Size</label>
			<select id='thankCardSize'  class="w3-select" > 
				<option value="4 x 8">4 x 8</option> 
				<option value="4 x 12">4 x 12</option> 
				<option value="5 x 8">5 x 8</option> 
				<option value="5 x 10">5 x 10</option> 
				<option value="6 x 6">6 x 6</option> 
			</select>
			<br>
		
			<label>Thanking Cards Count</label>
			<input id='wedThankCardCount'  class="w3-input" value="100"> </input>
			
		</div>
		
		
		<label><b>Homeco./Enga. Thanking Card Details</b></label>
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">
		
			<label>Thanking Card Quality</label>
			<select id='ThankCardQualityH'  class="w3-select" > 
				<option value="N/A">N/A</option> 
				<option value="Single Side Matte">Single Side Matte</option> 
				<option value="Single Side Glossy">Single Side Glossy</option> 
				<option value="Double Side Matte">Double Side Matte</option> 
				<option value="Double Side Glossy">Double Side Glossy</option>  
			</select>
			<br> 
			<label>Thanking Card Size</label>
			<select id='ThankCardSizeH'  class="w3-select" > 
				<option value="4 x 8">4 x 8</option> 
				<option value="4 x 12">4 x 12</option> 
				<option value="5 x 8">5 x 8</option> 
				<option value="5 x 10">5 x 10</option> 
				<option value="6 x 6">6 x 6</option> 
			</select>
			<br>
			
			<label>Thanking Cards Count</label>
			<input id='homeThankCardCount'  class="w3-input" value="100"> </input>
		</div>
		<div class="">
			<label><b>Video Quality</b></label>
			<select id='VidQuality'  class="w3-select" > 
				<option value="N/A">N/A</option> 
				<option value="blueray">Blueray</option> 
				<option value="hd">HD</option> 
			</select>
			<br>
			<select id='VidNoOfCam'  class="w3-select" > 
				<option value="1cam">Use 1 Camera</option> 
				<option value="2cam">Use 2 Cameras</option> 
				<option value="3cam">Use 3 Cameras</option> 
				<option value="4cam">Use 4 Cameras</option>  
			</select>
			 
			<select id='VidType'  class="w3-select" > 
				<option value="wed">Wedding Only</option> 
				<option value="wedHome">Wedding and Homecoming</option> 
				<option value="pre">Preshoot Only</option> 
				<option value="preWed">Preshoot and Wedding</option> 
				<option value="preWedHome">Preshoot, Wedding and Homecoming</option> 
			</select>
			<div class="w3-panel  w3-leftbar w3-rightbar w3-border-green">
				<input type="checkbox" class="w3-check" id="IncludeDrone" checked> <b>Include Drone Camera</b></input><br>
			</div>
			
		</div>
		<div>

			<textarea id="Comments" placeholder="Additional Comments" style="width:100%;height:150px;"></textarea>
			<input id='Advance1'  type="number" placeholder="Advance1" class="w3-input" onChange="showRemainingBal()" > </input>
			<input id='Advance2'  type="number" placeholder="Advance2" class="w3-input" onChange="showRemainingBal()"> </input>
			<input id='Advance3'  type="number" placeholder="Advance3" class="w3-input" onChange="showRemainingBal()"> </input>
			<label id="transportCost">Transport Cost       </label>
			<input id='Transport'  type="number"  class="w3-input" onChange="showRemainingBal()"> </input>
			<label id="totalPrice">Total Price       </label>
			<input id='Total'  type="number"  class="w3-input" onChange="showRemainingBal()"> </input>
		</div>
		<div>
		<br>
			    <button class="w3-btn w3-green w3-padding-small" onclick="saveNew()" >Save As New</button>
				<button class="w3-btn w3-grey w3-padding-small" onclick="update()" style="float:right">Update Loaded</button>
				<br><br>
				<button class="w3-btn w3-green w3-padding-small" onclick="savePDF()" >Download PDF</button>
				<button class="w3-btn w3-blue w3-padding-small" style="float:right"><a id="EmailTo"	href="mailto:someone@example.com?Subject=Hello%20again" target="_top">Send Mail</a></button>
				
		</div>
	</div> 
	<div class="col-3 col-m-12">
        <div class="hideInMobile asideX">
        </div>
    </div>
	
</div>

<div class="footer">
    <p>Powered by Software Solutions 2017</p>
</div>
</body>
<script>
function validateData(){
		if("" == $('#name').val() || "" == $('#NameG').val()){
			swal("Invalid Inputs", "Name of Groom and Bride cannot be empty", "error");
			return false;
		}else if( $('#dateW').val() == ""){
			swal("Invalid Inputs", "Wedd/Engage date cannot be empty", "error");
			return false;
		}
		return true; 
}
function getWedding(event) {
   	ovOn();
	$( "#btnHide" ).hide();
	$( "#allListTable" ).empty();
	$.post('getWedding.php', { 
			ID: event.id	
		}, 
		function(returnedData){
		
			var obj = JSON.parse(returnedData);
			$('#ID').val(obj.ID);
			$('#name').val(obj.name);
			$('#email').val(obj.email); 
			$('#phone').val(obj.phone);

			$('#NameG').val(obj.NameG);
			$('#EmailG').val(obj.EmailG); 
			$('#PhoneG').val(obj.PhoneG);

			$('#dateW').val(obj.dateW);
			$('#timeW').val(obj.timeW); 
			$('#placeW').val(obj.placeW);
			$('#CASize').val(obj.CASize);
			$('#CAPages').val(obj.CAPages); 
			$('#CAQuality').val(obj.CAQuality); 
			$('#FASize').val(obj.FASize);
			$('#FAPages').val(obj.FAPages); 
			$('#FAQuality').val(obj.FAQuality); 
			$('#thankCardSize').val(obj.thankCardSize);
			$('#thankCardQuality').val(obj.thankCardQuality); 
			$('#wedThankCardCount').val(obj.wedThankCardCount); 
			$('#homeThankCardCount').val(obj.homeThankCardCount);
	
			$('#Address').val(obj.Address);
			$('#dateH').val(obj.dateH);
			$('#timeH').val(obj.timeH); 
			$('#placeH').val(obj.placeH);
			$('#PSSize').val(obj.PSSize);
			$('#PSPages').val(obj.PSPages); 
			$('#PSQuality').val(obj.PSQuality);
			$('#VidQuality').val(obj.VidQuality);
			$('#VidNoOfCam').val(obj.VidNoOfCam);
			$('#VidType').val(obj.VidType);	
			
			$('#Advance1').val(obj.Advance1);	
			$('#Advance2').val(obj.Advance2);	
			$('#Advance3').val(obj.Advance3);
			$('#Total').val(obj.Total);
			$('#Comments').val(obj.Comments);			
			
			$('#IncludeFA').prop('checked', obj.includeFA); 
			$('#IncludeDrone').prop('checked', obj.IncludeDrone); 

			$('#ThankCardSizeH').val(obj.ThankCardSizeH);	
			$('#ThankCardQualityH').val(obj.ThankCardQualityH);	
			$('#Transport').val(obj.Transport);	
			$('#Album2Type').val(obj.Album2Type);
			
			showRemainingBal();

			var mailToLink = "mailto:" + $('#email').val() + "?Subject=Siyeraa Studio Event Plan";
			$("#EmailTo").attr("href", mailToLink);

			var mailToLink = "mailto:" + $('#EmailG').val() + "?Subject=Siyeraa Studio Event Plan";
			$("#EmailToG").attr("href", mailToLink);

			ovOff();
			console.log(returnedData);
			 
		}).fail(function(){
			  console.log("error");
	});
}
function deleteWedding(event) {
   	
	swal({
			title: "Delete existing event",
			text: "Are you sure ?",
			type: "error",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		},
		function(){
					
					$.post('deleteWedding.php', { 
					ID: event.id	
					}, 
					function(returnedData){
						$( "#btnHide" ).hide();
						$( "#allListTable" ).empty();
						swal("Deleted!", "Your event has been deleted.", "success");
						console.log(returnedData); 
					}).fail(function(){
						console.log("error");
					});
		
	});

}
function clearAll() {
			$('#ID').val("");
			$('#name').val("");
			$('#email').val(""); 
			$('#phone').val(""); 

			$('#NameG').val(""); 
			$('#EmailG').val(""); 
			$('#PhoneG').val(""); 

			$('#dateW').val(""); 
			$('#timeW').val(""); 
			$('#placeW').val(""); 
			$('#CASize').val(""); 
			$('#CAPages').val(""); 
			$('#CAQuality').val(""); 
			$('#FASize').val(""); 
			$('#FAPages').val(""); 
			$('#FAQuality').val(""); 
			$('#thankCardSize').val(""); 
			$('#thankCardQuality').val("");  
			$('#wedThankCardCount').val(""); 
			$('#homeThankCardCount').val(""); 
	
			$('#Address').val(""); 
			$('#dateH').val(""); 
			$('#timeH').val(""); 
			$('#placeH').val(""); 
			$('#PSSize').val(""); 
			$('#PSPages').val(""); 
			$('#PSQuality').val(""); 
			$('#VidQuality').val(""); 
			$('#VidNoOfCam').val(""); 
			$('#VidType').val(""); 	
			
			$('#Advance1').val(""); 	
			$('#Advance2').val(""); 
			$('#Advance3').val(""); 
			$('#Total').val(""); 
			$('#Comments').val(""); 			
			
			$('#IncludeFA').prop('checked', true); 
			$('#IncludeDrone').prop('checked', false); 

			$('#ThankCardSizeH').val("");	
			$('#ThankCardQualityH').val("");	
			$('#Transport').val("");		
}
function showAll() {
	ovOn();
   	$( "#allListTable" ).empty()
	$.post('showAll.php', { 
			year: $('#year').val(),
			month: $('#months').val()
		}, 
		function(returnedData){
			ovOff();
			console.log(returnedData);
			if(returnedData != "ip"){
				var allArr = JSON.parse(returnedData);
				for (var i = 0; i < allArr.length; i++) {
					$( "#allListTable" ).append( "<tr><td>"+allArr[i].name+"</td><td>"+allArr[i].date+"</td><td>"+allArr[i].time+':'+allArr[i].type+"</td><td><input value='Load' type='button' id='"+allArr[i].ID+"' onclick='getWedding(this)'></input></td><td><input value='Delete' type='button' id='"+allArr[i].ID+"' onclick='deleteWedding(this)'></input></td></tr>" );
				}
			}else{
				document.location = "login.php";
			}
			
		}).fail(function(){
			  console.log("error");
	});
	$( "#btnHide" ).show();
}
$( "#btnHide" ).hide();
function hideAll() {
   	$( "#allListTable" ).empty();
	$( "#btnHide" ).hide();
}
function saveNew() {

	if(validateData()==false){
		return;
	}
   		swal({
			title: "Save new event",
			text: "Are you sure ?",
			type: "info",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		},
		function(){
	$.post('addWedding.php', { 
		
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
		
		Comments: $('#Comments').val(),
		Advance1: parseInt($('#Advance1').val()) ? $('#Advance1').val() : '0',
		Advance2: parseInt($('#Advance2').val()) ? $('#Advance2').val() : '0', 
		Advance3: parseInt($('#Advance3').val()) ? $('#Advance3').val() : '0', 
		Total: parseInt($('#Total').val()) ? $('#Total').val() : '0',
		IncludeFA: $('#IncludeFA').is(":checked"),
		IncludeDrone: $('#IncludeDrone').is(":checked"),

		ThankCardSizeH : $('#ThankCardSizeH').val(),
		ThankCardQualityH: $('#ThankCardQualityH').val(), 
		Transport: $('#Transport').val(),

		Album2Type: $('#Album2Type').val()
		
	}, 
    function(returnedData){
         console.log(returnedData);
		 ovOff();
		 if(returnedData == "ok"){
		 	swal("Saved", $('#name').val() , "success");
		 }else{
			swal("Oops...", "Check inputs and try again", "error");
		 }
	}).fail(function(returnedData){
		  console.log("error "  + returnedData);
	});
		});

}
function update() { 
		swal({
			title: "Update exixting event",
			text: "Are you sure ?",
			type: "warning",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		},
		function(){
			ovOn();
			$.post('editWedding.php', { 
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
				
				Comments: $('#Comments').val(),
				
				Advance1: parseInt($('#Advance1').val()) ? $('#Advance1').val() : '0',
				Advance2: parseInt($('#Advance2').val()) ? $('#Advance2').val() : '0', 
				Advance3: parseInt($('#Advance3').val()) ? $('#Advance3').val() : '0', 
				Total: parseInt($('#Total').val()) ? $('#Total').val() : '0',
				
				IncludeFA: $('#IncludeFA').is(":checked"),
				IncludeDrone: $('#IncludeDrone').is(":checked"),

				ThankCardSizeH : $('#ThankCardSizeH').val(),
				ThankCardQualityH: $('#ThankCardQualityH').val(), 
				Transport: $('#Transport').val(),
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


	var line = 40;

	doc.setFontSize(10);
	doc.text(150, line, new Date().toString().split("GMT")[0]);
	
	var shift = 0; 
	 
	doc.setFontSize(12);
	
	doc.setFontSize(10);
	doc.text(25, line+10, 'Groom Name : '+$('#name').val());	
	doc.text(25, line+15, 'Email : '+$('#email').val());
	doc.text(25, line+20, 'Phone : '+$('#phone').val());
	doc.text(25, line+28, 'Addres : '+$('#Address').val());
	shift = 80; 
	doc.setFontSize(10);
	doc.text(25+shift, line+10, 'Bride Name : '+$('#NameG').val()); 
	doc.text(25+shift, line+15, 'Email : '+$('#EmailG').val());
	doc.text(25+shift, line+20, 'Phone : '+$('#PhoneG').val());
	
	doc.text(25, line+35, 'Wedding Date : '+$('#dateW').val());
	doc.text(25, line+40, 'Location : '+$('#placeW').val());
	doc.text(25, line+45, 'Time : '+$('#timeW').val());
	
	doc.text(25, line+55, 'Homecoming Date : '+$('#dateH').val());
	doc.text(25, line+60, 'Location : '+$('#placeH').val());
	doc.text(25, line+65, 'Time : '+$('#timeH').val());
	
	line = line+75;

	
	
	if($('#CAQuality').val() != "N/A"){ 
		shift = 0; 
		doc.setFontSize(11);
		doc.text(25, line, 'Main/Wedding Album');
		doc.setFontSize(10);
		doc.text(30, line+5, 'Quality : '+$('#CAQuality').val());
		doc.text(30, line+10, 'Size : '+$('#CASize').val());
		doc.text(30, line+15, 'Pages : '+$('#CAPages').val());
	
	}
	if($('#FAQuality').val() != "N/A"){ 
		shift = shift+50; 
		doc.setFontSize(11);
		doc.text(25+shift, line, 'Homeco./Engag. Album');
		doc.setFontSize(10);
		doc.text(30+shift, line+5, 'Quality : '+$('#FAQuality').val());
		doc.text(30+shift, line+10, 'Size : '+$('#FASize').val());
		doc.text(30+shift, line+15, 'Pages : '+$('#FAPages').val());
		//shift = shift+60; 
	}
	
	if($('#PSQuality').val() != "N/A"){ 
		shift = shift+50; 
		doc.setFontSize(11);
		doc.text(25+shift, line, 'Preshoot Album');
		doc.setFontSize(10);
		doc.text(30+shift, line+5, 'Quality : '+$('#PSQuality').val());
		doc.text(30+shift, line+10, 'Size : '+$('#PSSize').val());
		doc.text(30+shift, line+15, 'Pages : '+$('#PSPages').val());
	}
	line=line+25;
	doc.setFontSize(10);
	if($('#IncludeFA').is(":checked") == true){
		doc.text(25, line,"1 Family Album included (8x12 story type)");
	}

	//////////////////////Thanking Card Details//////////////////////
	line=line+10;
	shift = 0;
	if($('#thankCardQuality').val() != "N/A"){ 
	
		doc.setFontSize(11);
		doc.text(25, line,"Main/Wedding Thanking Cards ");
		doc.setFontSize(10);
		doc.text(30, line+5,"Quality : " + $('#thankCardQuality').val());
		doc.text(30, line+10,"Size : " + $('#thankCardSize').val());
		doc.text(30, line+15,"No. Thanking Cards : " + $('#wedThankCardCount').val()); 
		shift = 80;
	}
	
	if($('#ThankCardQualityH').val() != "N/A"){ 
		 
		doc.setFontSize(11);
		doc.text(25+shift, line,"Homecoming/Engage. Thanking Cards ");
		doc.setFontSize(10);
		doc.text(30+shift, line+5,"Quality : " + $('#ThankCardQualityH').val());
		doc.text(30+shift, line+10,"Size : " + $('#ThankCardSizeH').val()); 
		doc.text(30+shift, line+15,"No. Thanking Cards : " + $('#homeThankCardCount').val());
	}
	//////////////////////////////////////////////////////////////////

	line=line+25;
	doc.setFontSize(11);
	doc.text(25, line,"Enlargements");
	doc.setFontSize(10);
	doc.text(30, line+5,"1 Wedding couple enlargement 20x30 with frame");
	doc.text(30, line+10,"2 Wedding couple enlargement 12x18 with frame" );
	doc.text(30, line+15,"2 Group enlargement 12x18 with frame"); 
	
	line=line+25;
	doc.setFontSize(11);
	doc.text(25, line,"Video Details");
	doc.setFontSize(10);
	doc.text(30, line+5,"Quality : "+$('#VidQuality').val());
	doc.text(30, line+10,"No Of Cameras : "+ $('#VidNoOfCam').val());
	doc.text(30, line+15,"Type : "+$('#VidType').find(":selected").text()); 
	
	if($('#IncludeDrone').is(":checked") == true){
		line = line+20;
		// doc.setFontSize(10);
		doc.text(30, line,"Drone camera will be used for preshoot video process");
	}
	
	var adv1 = parseInt($('#Advance1').val())?parseInt($('#Advance1').val()):0; 
	var adv2 = parseInt($('#Advance2').val())?parseInt($('#Advance2').val()):0; 
	var adv3 = parseInt($('#Advance3').val())?parseInt($('#Advance3').val()):0; 

	var sumPayments = adv1 + adv2 + adv3;
	line=line+10;
	doc.text(25, line,"Transport Cost : Rs."+$('#Transport').val()+"/= ");
	doc.setFontSize(12);
	doc.text(25, line+5,"Total Charges : Rs."+$('#Total').val()+"/=");//               			Advance Payments : Rs."+sumPayments+"/=");
	doc.setFontSize(10);
	doc.text(120, line+5,"Advance Payments : Rs."+sumPayments+"/= ");
	
	line=line+15;
	var splitTitle = doc.splitTextToSize($('#Comments').val(), 190);
	if($('#Comments').val() != ""){ 
		doc.setFontSize(10);
		doc.text(25, line, splitTitle);
		//doc.text(25, line, 'Comments : '+$('#Comments').val());
	}
	doc.save('Videost.pdf');

}
 
</script>
</html>
