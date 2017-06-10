<html>

<script src="jspdf.debug.js"></script>
<script src="jquery.js"></script>

<h2>Test PDF</h2>

<input id='name' placeholder="Name"> </input>
<br>
<input id='date' type='date'> </input>
<br>
<select id='time'>
<option value="day">Time</option>
  <option value="day">Day</option>
  <option value="night">Night</option>
</select>
<br>
<input id='place' placeholder="Location"> </input>

<br>

<select id='CASize'>
	<option value="day">Couple Album Size</option> 
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
</select>
<input id='FAPages' placeholder="Family Album Pages"> </input>
<select id='FAQuality'>
	<option value="N/A">Family Album Quality</option> 
	<option value="Story Book">Story Book</option> 
</select>
<br>
<select id='thankCardSize'>
	<option value="N/A">Thanking Card Size</option> 
	<option value="12R">12R</option> 
</select>
<br>
<select id='thankCardQuality'>
	<option value="N/A">Thanking Card Quality</option> 
	<option value="Dark">Dark</option> 
</select>
<br>
<input id='homeThankCardCount' placeholder="Wedding Thanking Cards"> </input>
<br>
<input id='homeThankCardCount' placeholder="Homecoming Thanking Cards"> </input>






<div>


<button onclick="myFunction()">Click me</button>
</div>

<script>

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
		homeThankCardCount: $('#homeThankCardCount').val()
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