<html>

<script src="jspdf.debug.js"></script>
<script src="jquery.js"></script>

<h2>Test PDF</h2>

<input id='name' placeholder="Name"> </input>
<br>
<input type='date'> </input>
<br>
<select id='time'>
<option value="day">Time</option>
  <option value="day">Day</option>
  <option value="saab">Night</option>
</select>
<br>
<input id='location' placeholder="Location"> </input>

<br>

<select id='CASize'>
	<option value="day">Couple Album Size</option> 
</select>
<input id='CAPages' placeholder="Couple Album Pages"> </input>
<select id='CAQuality'>
	<option value="day">Couple Album Quality</option> 
	<option value="day">12_23</option> 
</select>
<br>
<select id='FASize'>
	<option value="day">Family Album Size</option> 
</select>
<input id='FAPages' placeholder="Family Album Pages"> </input>
<select id='FAQuality'>
	<option value="day">Family Album Quality</option> 
	<option value="day">12_23</option> 
</select>
<br>
<select id='thankCardSize'>
	<option value="day">Thanking Card Size</option> 
	<option value="day">12_23</option> 
</select>
<br>
<select id='thankCardQuality'>
	<option value="day">Thanking Card Quality</option> 
	<option value="day">12_23</option> 
</select>
<br>
<input id='' placeholder="Wedding Thanking Cards"> </input>
<br>
<input id='' placeholder="Homecoming Thanking Cards"> </input>






<div>


<button onclick="myFunction()">Click me</button>
</div>

<script>

function myFunction() {
   
   
	
	$.post('http://localhost/pdf/addWedding.php', { 
		name: "Malinda", 
		date : "2012/01/12",
		time: "0", 
		place: "rtrtrtrtrtda", 
		CASize: "Malin3123123da", 
		CAPages: "323", 
		CAQuality: "NG", 
		FASize: "3123123", 
		FAPages: "21", 
		FAQuality: "Bad rt", 
		thankCardSize: "123123", 
		thankCardQuality: "Bad", 
		wedThankCardCount: "32", 
		homeThankCardCount: "32"
		}, 
    function(returnedData){
         console.log(returnedData);
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