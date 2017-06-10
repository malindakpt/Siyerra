<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jspdf.debug.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="css/w3css.css">
<link rel="stylesheet" type="text/css" href="css/template.css">
</head>
<body>
<div class="header">
    <span class="inlineMenu"><img class="logo" src="img/logo1.png"/></span>
    <span class="topic">docvisit   </span>
    <span class="topic2">.lk</span>

</div>
<h2>Test PDF</h2>
<div>
<input id='year' class="w3-input" value='2017' placeholder="Year"> </input><button onclick="showAll()">Show All Events</button>
</div>

<table id=allListTable class="w3-table-all w3-centered">

</table>
<br><br>
<input id='name' class="w3-input" placeholder="Name"> </input>
<br>
<br>
<input id='email' class="w3-input" placeholder="Email"> </input>
<br>
<input id='phone'  class="w3-input" placeholder="Phone"> </input>

<input id='date'  class="w3-input"  class="w3-input" type='date'> </input>
<br>
<select id='time'  class="w3-select" >
	<option value="N/A" >Time</option>
	<option value="Day">Day</option>
	<option value="Night">Night</option>
</select>
<br>
<input id='place' placeholder="Location"  class="w3-input" > </input>

<br>

<select id='CASize'  class="w3-select" >
	<option value="N/A">Couple Album Size</option> 
	<option value="12*23">12*23</option> 
	<option value="40*30">40*30</option> 
</select>
<input id='CAPages' placeholder="Couple Album Pages"  class="w3-input" > </input>
<br>
<br>
<select id='CAQuality'  class="w3-select" >
	<option value="N/A">Couple Album Quality</option> 
	<option value="12*23">12*23</option> 
	<option value="40*30">40*30</option> 
</select>
<br>
<br>
<select id='FASize'  class="w3-select" >
	<option value="day">Family Album Size</option> 
	<option value="12*23">12*23</option> 
	<option value="40*30">40*30</option> 
</select>
<br>
<br>
<input id='FAPages' placeholder="Family Album Pages"  class="w3-input" > </input>
<br>
<br>
<select id='FAQuality'  class="w3-select" >
	<option value="N/A">Family Album Quality</option> 
	<option value="Story Book">Story Book</option> 
	<option value="Magazine Book">Magazine Book</option>
</select>
<br>
<br>
<select id='thankCardSize'  class="w3-select" >
	<option value="N/A">Thanking Card Size</option> 
	<option value="12R">12R</option> 
	<option value="4R">4R</option> 
</select>
<br>
<br>
<select id='thankCardQuality'  class="w3-select" >
	<option value="N/A">Thanking Card Quality</option> 
	<option value="Dark">Dark</option> 
	<option value="Light">Light</option> 
</select>
<br>
<input id='wedThankCardCount'  class="w3-input"  placeholder="Wedding Thanking Cards"> </input>
<br>
<input id='homeThankCardCount'  class="w3-input"   placeholder="Homecoming Thanking Cards"> </input>

<div>
<button onclick="myFunction()">SAVE</button>
</div>

<script>
function getWedding(event) {
   	
	$.post('http://localhost/pdf/getWedding.php', { 
			ID: event.id	
		}, 
		function(returnedData){
			
			var obj = JSON.parse(returnedData);
			$('#name').val(obj.name);
			$('#date').val(obj.date);
			$('#time').val(obj.time); 
			$('#place').val(obj.place);
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
			console.log(obj); 
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
				$( "#allListTable" ).append( "<tr><td>"+allArr[i].name+"</td><td>"+allArr[i].date+"</td><td>"+allArr[i].time+"</td><td><input value='View' type='button' id='"+allArr[i].ID+"' onclick='getWedding(this)'></input></td><td><input value='Delete' type='button' id='"+allArr[i].ID+"' onclick='deleteWedding(this)'></input></td></tr>" );
			}
			console.log(returnedData); 
		}).fail(function(){
			  console.log("error");
	});
}
function myFunction() {
   	
	$.post('http://localhost/pdf/addWedding.php', { 
		name: $('#name').val(), 
		date : $('#date').val(),
		time: $('#time').val(), 
		place: $('#place').val(),
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
		phone: $('#phone').val()
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
<div class="footer">
    <p>Powered by MSOFT Software Solutions 2016</p>
</div>
</body>

</html>