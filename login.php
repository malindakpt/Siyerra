<?php
    ob_start();
    session_start();
	$_SESSION["UserName"] = "";
	$_SESSION['Password'] = "";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="img/logo.png" />
 <title>Photography Diary</title>
<script src="js/jquery.js"></script>  
</head>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 2px;
    border: none;
    cursor: pointer;
    width: 45%;
    
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
     padding: 16px; 
     /* padding-bottom: 16px; */
        /* height: 46px; */
}

span.psw {
    float: right;
    padding-top: 16px;
}

.sansserif {
    font-family: Arial, Helvetica, sans-serif;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
 
<div  style="max-width:350px; margin: 0 auto; border:1px;">
    <div style=" background-color: #9933cc; color:white;    padding: 1px;">
        <h2 style="margin:50px" class="sansserif"><b>Photography DIARY</b></h2>
    </div>

    <div class="imgcontainer">
        <img src="img/logo.png" alt="Avatar" class="avatar">
    </div>

  <div class="container">
    <label><b>Username</b></label>
    <input id="UserName" type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input id="Password" type="password" placeholder="Enter Password" name="psw" required>
        <label id="error" style="color:red;display:none;">Invalid UserName or Password</label>
        <label id="exp" style="color:red;display:none;"> <a href="tel:+94771141194" style="float:left;text-decoration:none;color:red">Account is expired. If you have done the payment already,  please call us : +94771141194</a></label>
    <button onclick="login()" style="float:left;">Login</button> 
    <button onclick="demoLogin()"  style="float:right;">Test</button> 
  </div>

  <div id="contactus" class="container" style="background-color:#f1f1f1; display:none;">
       <a href="tel:+94771141194" style="float:left;text-decoration:none;">Call Us : +94771141194</a><br><br>
       <a href="mailto:malindakpt@gmail.com" style="float:left;text-decoration:none;">Email Us : malindakpt@gmail.com</a>
       <br>
  </div>
   <button type="button" class="cancelbtn" onclick="showContactData()" style="    margin-left: 17px;padding: 7px;">Contact Us</button> 
</div>

<script>
function showContactData(){
$('#contactus').show();
}

function login(){

    	$.post('loginS1.php', { 
			UserName :$('#UserName').val(),
            Password :$('#Password').val(),
		}, 
		function(returnedData){
            if(returnedData=="ok"){
                document.location = "index.php";
            }
            else if(returnedData=="exp"){
                $('#exp').show();
            }else{
                $('#error').show();
            }
			console.log(returnedData); 
		}).fail(function(){
			  console.log("error");
             
	    });
}

function demoLogin(){

    	$.post('loginS1.php', { 
			UserName :"demo",
            Password :"1234",
		}, 
		function(returnedData){
            if(returnedData=="ok"){
                document.location = "index.php";
            }
            else if(returnedData=="exp"){
                $('#exp').show();
            }else{
                $('#error').show();
            }
			console.log(returnedData); 
		}).fail(function(){
			  console.log("error");
             
	    });
}

</script>

</body>
</html>
