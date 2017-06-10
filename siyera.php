<html>

<script src="jspdf.debug.js"></script>
<script src="jquery.js"></script>
<script src="jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">

<h2>Test PDF</h2>
<div>
<input id='year' value='2012' placeholder="Year"> </input><button onclick="showAll()">Show All Events</button>
</div>


<table id=allListTable border="1">

</table>
<br><br>
<input id='name' placeholder="Name"> </input>
<br>
<br>
<input id='email' placeholder="Email"> </input>
<br>
<input id='phone' placeholder="Phone"> </input>

<input id='date' type='date'> </input>
<br>
<select id='time'>
<option value="N/A">Time</option>
  <option value="Day">Day</option>
  <option value="Night">Night</option>
</select>
<br>
	<input id='place' placeholder="Location"> </input>

<br>

<select id='CASize'>
	<option value="N/A">Couple Album Size</option> 
	<option value="12*23">12*23</option> 
	<option value="40*30">40*30</option> 
</select>
<input id='CAPages' placeholder="Couple Album Pages"> </input>
<select id='CAQuality'>
	<option value="N/A">Couple Album Quality</option> 
	<option value="12*23">12*23</option> 
	<option value="40*30">40*30</option> 
</select>
<br>
<select id='FASize'>
	<option value="day">Family Album Size</option> 
	<option value="12*23">12*23</option> 
	<option value="40*30">40*30</option> 
</select>
<input id='FAPages' placeholder="Family Album Pages"> </input>
<select id='FAQuality'>
	<option value="N/A">Family Album Quality</option> 
	<option value="Story Book">Story Book</option> 
	<option value="Magazine Book">Magazine Book</option>
</select>
<br>
<select id='thankCardSize'>
	<option value="N/A">Thanking Card Size</option> 
	<option value="12R">12R</option> 
	<option value="4R">4R</option> 
</select>
<br>
<select id='thankCardQuality'>
	<option value="N/A">Thanking Card Quality</option> 
	<option value="Dark">Dark</option> 
	<option value="Light">Light</option> 
</select>
<br>
<input id='wedThankCardCount' placeholder="Wedding Thanking Cards"> </input>
<br>
<input id='homeThankCardCount' placeholder="Homecoming Thanking Cards"> </input>

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
				$( "#allListTable" ).append( "<tr><td><input value='View' type='button' id='"+allArr[i].ID+"' onclick='getWedding(this)'></input></td><td><input value='Delete' type='button' id='"+allArr[i].ID+"' onclick='deleteWedding(this)'></input></td><td>"+allArr[i].name+"</td><td>"+allArr[i].date+"</td><td>"+allArr[i].time+"</td></tr>" );
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


</html>