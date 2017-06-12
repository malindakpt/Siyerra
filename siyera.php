<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jspdf.debug.js"></script>
<script src="js/jquery.js"></script>  
<link rel="stylesheet" type="text/css" href="css/w3css.css">
<link rel="stylesheet" type="text/css" href="css/template.css">
</head>
<body>
<div class="header">
    <span class="inlineMenu"><img class="logo" src="img/logo1.png"/></span>
    <span class="topic">Siyerra Studio  </span>
 

</div> 
<div class="row">
	<div class="hideInMobile col-3 col-m-3">

        <div class=" aside">
         
        </div>

    </div>
	<div class="col-6 col-m-9">
		<div >
			<input  id='year' class="w3-input" value='2017' placeholder="Year" style="width:30%; float:left; margin:5px"> 
			<select id='months'  class="w3-select" style="width:50% ;	 float:left;  margin:5px" >
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
		
			 <button onclick="showAll()" class="w3-btn w3-blue w3-padding-small" style=" float:left; margin:5px">Show All Events</button>
			 <button onclick="hideAll()" class="w3-btn w3-blue w3-padding-small" style=" float:left; margin:5px">Hide All Events</button>
		</div>
		

		<table id=allListTable class="w3-table-all w3-centered">

		</table>
		<br> 
		<input id='name' class="w3-input" placeholder="Name"> </input>
		<br>
		<input id='email' class="w3-input" placeholder="Email"> </input>
		<br>
		<input id='phone'  class="w3-input" placeholder="Phone"> </input>
		<br>
		 
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">
		 <br>
			<label><b>Select Wedding Date</b></label>
			<input id='dateW'  class="w3-input"  class="w3-input" type='date'> </input>
			<select id='timeW'  class="w3-select" >
				<option value="N/A" >Select Wedding Day/Night Function</option>
				<option value="Day">Day</option>
				<option value="Night">Night</option>
			</select>
		
			<input id='placeW' placeholder="Enter Wedding Location"  class="w3-input" value="Colombo" > </input>
			
			<br><br>
			<label><b>Select Homecoming Date</b></label>
			<input id='dateH'  class="w3-input"  class="w3-input" type='date'> </input>
			<select id='timeH'  class="w3-select" >
				<option value="N/A" >Select Homecoming Day/Night Function</option>
				<option value="Day">Day</option>
				<option value="Night">Night</option>
			</select>	
			<input id='placeH' placeholder="Enter Homecoming Location"  class="w3-input" value="Kirindawa"> </input>
			<br>			 
		</div>
		<label><b>Main/Wedding Album Quality</b></label>
		<select id='CAQuality'  class="w3-select" > 
			<option value="12*23">12*23</option> 
			<option value="40*30">40*30</option> 
		</select>
		<label>Main/Wedding Album Size</label>
		<select id='CASize'  class="w3-select" > 
			<option value="12*23">12*23</option> 
			<option value="40*30">40*30</option> 
		</select>
		<br>
		<label>Main/Wedding Pages Count</label>
		<input id='CAPages'  class="w3-input" value="50"> </input>
		
		<br>
		<br>
	  <div class="XXX">
			<br>
			<label><b>Homecoming Album Quality</b></label>
			<select id='FAQuality'  class="w3-select" > 
				<option value="Story Book">Story Book</option> 
				<option value="Magazine Book">Magazine Book</option>
			</select>
			<label>Homecoming Album Size</label>
			<select id='FASize'  class="w3-select" > 
				<option value="12*23">12*23</option> 
				<option value="40*30">40*30</option> 
			</select>
			<br> 
			<label>Homecoming Album Pages Count</label>
			<input id='FAPages' class="w3-input" value="40"> </input>
			<br>		
			<br>
		</div> 
		 <div class="XXX">
			<br>
			<label><b>Preshoot Album Quality</b></label>
			<select id='PSQuality'  class="w3-select" > 
				<option value="Story Book">Story Book</option> 
				<option value="Magazine Book">Magazine Book</option>
			</select>
			<label>Preshoot Album Size</label>
			<select id='PSSize'  class="w3-select" > 
				<option value="12*23">12*23</option> 
				<option value="40*30">40*30</option> 
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
		<label><b>Thanking Card Details</b></label>
		
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-blue">
			<label>Thanking Card Size</label>
			<select id='thankCardSize'  class="w3-select" > 
				<option value="12R">12R</option> 
				<option value="4R">4R</option> 
			</select>
			<br>
			<label>Thanking Card Quality</label>
			<select id='thankCardQuality'  class="w3-select" > 
				<option value="Dark">Dark</option> 
				<option value="Light">Light</option> 
			</select>
			<br>
			<label>Wedding Thank Cards Count</label>
			<input id='wedThankCardCount'  class="w3-input" value="100"> </input>
			
			<label>Homecoming Thank Cards Count</label>
			<input id='homeThankCardCount'  class="w3-input" value="100"> </input>
		</div>
		<div class="w3-panel  w3-leftbar w3-rightbar w3-border-red">
			<label><b>Video Quality</b></label>
			<select id='VidQuality'  class="w3-select" > 
				<option value="blueray">Blueray</option> 
				<option value="hd">HD</option> 
			</select>
			<br>
			<label>No of cameras</label>
			<input id='VidNoOfCam'  class="w3-input" value="3"> </input>
			<br>
			<label>Video Type</label>
			<select id='VidType'  class="w3-select" > 
				<option value="wed">Wedding</option> 
				<option value="wedHome">Wedding and Homecoming</option> 
				<option value="pre">Preshoot</option> 
				<option value="preWed">Preshoot and Wedding</option> 
			</select>
			
		</div>
		<div>
			<textarea id="Comments" placeholder="Additional Comments" style="width:100%;height:150px;"></textarea>
			<input id='Advance1'  type="number" placeholder="Advance1" class="w3-input" onChange="showRemainingBal()" > </input>
			<input id='Advance2'  type="number" placeholder="Advance2" class="w3-input" onChange="showRemainingBal()"> </input>
			<input id='Advance3'  type="number" placeholder="Advance3" class="w3-input" onChange="showRemainingBal()"> </input>
			<label id="totalPrice">Total Price       </label>
			<input id='Total'  type="number"  class="w3-input" onChange="showRemainingBal()"> </input>
		</div>
		<div>
		<br>
			    <button class="w3-btn w3-green" onclick="myFunction()" >Save Changes</button>
				<button class="w3-btn w3-green" onclick="savePDF()" >Download PDF</button>
				<br><br>
				<button class="w3-btn w3-blue w3-padding-small" onclick="myFunction()" >Send Email</button>
		</div>
	</div> 
	<div class="col-3 col-m-12">
        <div class="hideInMobile aside">
        </div>
    </div>
	
</div>

<div class="footer">
    <p>Powered by Software Solutions 2017</p>
</div>
</body>
<script>
function getWedding(event) {
   	
	$.post('http://localhost/pdf/getWedding.php', { 
			ID: event.id	
		}, 
		function(returnedData){
			console.log(returnedData);
			var obj = JSON.parse(returnedData);
			$('#name').val(obj.name);
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
			$('#email').val(obj.email); 
			$('#phone').val(obj.phone);
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
			
			$('#IncludeFA').prop('checked', Boolean.valueOf(obj.includeFA)); 	
		 
			showRemainingBal();
			 
		}).fail(function(){
			  console.log("error");
	});
}
function deleteWedding(event) {
   	
	$.post('http://localhost/pdf/deleteWedding.php', { 
			ID: event.id	
		}, 
		function(returnedData){
			console.log(returnedData); 
		}).fail(function(){
			  console.log("error");
	});
}
function showAll() {
   	$( "#allListTable" ).empty()
	$.post('http://localhost/pdf/showAll.php', { 
			year: $('#year').val(),
			month: $('#months').val()
		}, 
		function(returnedData){
			 console.log(returnedData); 
			var allArr = JSON.parse(returnedData);
			for (var i = 0; i < allArr.length; i++) {
				$( "#allListTable" ).append( "<tr><td>"+allArr[i].name+"</td><td>"+allArr[i].date+"</td><td>"+allArr[i].time+':'+allArr[i].type+"</td><td><input value='View' type='button' id='"+allArr[i].ID+"' onclick='getWedding(this)'></input></td><td><input value='Delete' type='button' id='"+allArr[i].ID+"' onclick='deleteWedding(this)'></input></td></tr>" );
			}
			
		}).fail(function(){
			  console.log("error");
	});
}
function hideAll() {
   	$( "#allListTable" ).empty();
}
function myFunction() {
   	
	$.post('http://localhost/pdf/addWedding.php', { 
		name: $('#name').val(), 
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
		wedThankCardCount: $('#homeThankCardCount').val(), 
		homeThankCardCount: $('#homeThankCardCount').val(),
		email: $('#email').val(), 
		phone: $('#phone').val(),
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
		Advance1: $('#Advance1').val(),
		Advance2: $('#Advance2').val(), 
		Advance3: $('#Advance3').val(), 
		Total: $('#Total').val(),
		IncludeFA: $('#IncludeFA').is(":checked")
	}, 
    function(returnedData){
         console.log(returnedData);
		 alert("Done" + returnedData);
	}).fail(function(returnedData){
		  console.log("error "  + returnedData);
	});


}

</script>
<script>

function showRemainingBal(){
	 
	var adv1 = parseInt($('#Advance1').val())?parseInt($('#Advance1').val()):0; 
	var adv2 = parseInt($('#Advance2').val())?parseInt($('#Advance2').val()):0; 
	var adv3 = parseInt($('#Advance3').val())?parseInt($('#Advance3').val()):0; 
	var Total = parseInt($('#Total').val())?parseInt($('#Total').val()):0; 
	var bal = Total-adv1-adv2-adv3;
  
	document.getElementById('totalPrice').innerHTML = "Total Price        (To be paid="+bal+")";
}
var doc = new jsPDF();
doc.setFontSize(22);
doc.text(100, 20, 'This is a title');

doc.setFontSize(16);
doc.text(20, 30, 'This is some normal sized text underneath.');
function savePDF(){
	 
	var canvas = document.createElement("canvas");
	context = canvas.getContext('2d');
	make_base();
	
	var pngUrl = canvas.toDataURL(); 
	console.log(pngUrl);
	
	var doc = new jsPDF();
	doc.addImage(pngUrl, 'PNG', 15, 40, 180, 180);
;
}
//doc.save('Test.pdf');
function make_base()
{
  base_image = new Image();
  base_image.src = 'img/header.png';
  base_image.onload = function(){
    context.drawImage(base_image, 100, 100);
  }
}
</script>
</html>