<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
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
}

span.psw {
    float: right;
    padding-top: 16px;
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

<h2>Login Form</h2>

<div  style="max-width:500px; margin: 0 auto; ">
  <div class="imgcontainer">
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input id="UserName" type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input id="Password" type="password" placeholder="Enter Password" name="psw" required>
        
    <button onclick="login()">Login</button>
    <input type="checkbox" checked="checked"> Remember me 
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</div>

<script>

function login(){

    	$.post('loginS1.php', { 
			UserName :$('#UserName').val(),
            Password :$('#Password').val(),
		}, 
		function(returnedData){
            if(returnedData=="ok"){
                document.location = "siyera.php";
            }
			console.log(returnedData); 
		}).fail(function(){
			  console.log("error");
	    });
}

</script>

</body>
</html>
