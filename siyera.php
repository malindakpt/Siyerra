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
		<div>
			<input id='year' class="w3-input" value='2017' placeholder="Year"> 
			</input><button onclick="showAll()">Show All Events</button>
			</input><button onclick="hideAll()">Hide All Events</button>
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
		
			<input id='placeW' placeholder="Enter Wedding Location"  class="w3-input" > </input>
			
			<br><br>
			<label><b>Select Homecoming Date</b></label>
			<input id='dateH'  class="w3-input"  class="w3-input" type='date'> </input>
			<select id='timeH'  class="w3-select" >
				<option value="N/A" >Select Homecoming Day/Night Function</option>
				<option value="Day">Day</option>
				<option value="Night">Night</option>
			</select>	
			<input id='placeH' placeholder="Enter Homecoming Location"  class="w3-input" > </input>
			<br>
			 
		</div>
		<label>CoupleCouple Album Size</label>
		<select id='CASize'  class="w3-select" > 
			<option value="12*23">12*23</option> 
			<option value="40*30">40*30</option> 
		</select>
		<br><br>
		<label>CoupleCouple Pages Count</label>
		<input id='CAPages'  class="w3-input" > </input>
		<br>
		<label>Couple Album Quality</label>
		<select id='CAQuality'  class="w3-select" > 
			<option value="12*23">12*23</option> 
			<option value="40*30">40*30</option> 
		</select>
		<br>
		<br>
	  <div class="XXX">
			<br>
			<label>Family Album Size</label>
			<select id='FASize'  class="w3-select" > 
				<option value="12*23">12*23</option> 
				<option value="40*30">40*30</option> 
			</select>
			<br>
			<br>
			<label>Family Album Pages Count</label>
			<input id='FAPages' class="w3-input" > </input>
			<br>
			<label>Family Album Quality</label>
			<select id='FAQuality'  class="w3-select" > 
				<option value="Story Book">Story Book</option> 
				<option value="Magazine Book">Magazine Book</option>
			</select>
			<br>
		</div>
		<br><br>
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
			<input id='wedThankCardCount'  class="w3-input" > </input>
			
			<label>Homecoming Thank Count</label>
			<input id='homeThankCardCount'  class="w3-input" > </input>
		</div>
		<div>
			<textarea name="textarea" style="width:100%;height:150px;"></textarea>
			<input id='homeThankCardCount' placeholder="Total Price" class="w3-input" > </input>
		</div>
		<div>
		<br>
			    <button class="w3-btn w3-green" onclick="myFunction()" style="width:50%">Save </button>
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
		 
			console.log(returnedData); 
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
   	$( "#allListTable" ).empty();
	$.post('http://localhost/pdf/showAll.php', { 
			year: $('#year').val()	
		}, 
		function(returnedData){
			 
			var allArr = JSON.parse(returnedData);
			for (var i = 0; i < allArr.length; i++) {
				$( "#allListTable" ).append( "<tr><td>"+allArr[i].name+"</td><td>"+allArr[i].date+"</td><td>"+allArr[i].time+':'+allArr[i].type+"</td><td><input value='View' type='button' id='"+allArr[i].ID+"' onclick='getWedding(this)'></input></td><td><input value='Delete' type='button' id='"+allArr[i].ID+"' onclick='deleteWedding(this)'></input></td></tr>" );
			
			}
			console.log(returnedData); 
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
		placeH: $('#placeH').val()
	}, 
    function(returnedData){
         console.log(returnedData);
		 alert($('#CAQuality').val());
	}).fail(function(){
		  console.log("error");
	});


}

</script>
<script>
var doc = new jsPDF();
doc.setFontSize(22);
doc.text(100, 20, 'This is a title');

doc.setFontSize(16);
doc.text(20, 30, 'This is some normal sized text underneath.');

//doc.save('Test.pdf');

</script>
</html>