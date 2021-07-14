<?php

if(isset($_POST["signup"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "dogsignup";

	$conn = new mysqli($servername,$username,$password,$db);

	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connection_error);
	}

	$Name = $_POST["name"];
	$Age = $_POST["age"];
	$Email = $_POST["emaill"];
	$Message = $_POST["subject"];
	
	$sql = "INSERT into signup(Name,Age,Email, Message) values('$Name','$Age','$Email','$Message')";
	
	$result = mysqli_query($conn,$sql);
	if($result)
	{
		echo "Your details are recorded successfully!";
		
	}
	else
    echo "Error!!!";
    
	mysqli_close($conn);
}
?>
<!DOCTYPE html>
<head>
<title>DOG:SIGNUP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="cssfooter.css">

<script type ="text/javascript">
function getConfirm()
{
var retVal= confirm("Do you want to continue?");
if(retVal==true)
{
return true;
}
else
return false;
}
</script>
      <style>
	  
		input[type=text], select, textarea {
		  width: 95%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		}
		input[type=int], select, textarea {
		  width: 95%;
		  padding: 10px;
		  border: 1px solid #ccc;
		  margin-top: 5px;
		  margin-bottom: 15px;
		  resize: vertical;
		}

		button[type=signup] {
		  background-color: #1abc9c;
		  color: white;
		  padding: 10px 20px;
		  border: none;
		  cursor: pointer;
		}

		button[type=signup]:hover {
		  background-color: #1abc9c;
		}

		.c {
		  align:center;
		  margin-left: 350px;
		  width: 50%;
		  margin-top: 5px;
		  padding: 20px;
		  background: #DAFAF4  ;
		 
		  box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2);
		}
		.row{
			background-color:#99E1D5  ;
			
		}

</style>

</head>
<body>

<!--top navigation bar-->
<div class="topnav">
  <img src="logologo.jpg" width="65" height="48">
  <a href="contact.html">Contact </a>
  <a href="offers.html">Offers</a>
  <a href="shop.html">Shop</a>
  <a href="index.html" >Home</a>
</div>

 
  <div class="row">
    <div class="c">
	<div style="text-align:center">
    <h1>SIGNUP</h1>
  </div>
    
      <form action="" method="POST">
        <label for="name">Enter Name*:</label>
        <input type="text" id="name" name="name" placeholder="Joe Johnson" required><br>
		<label for="age">Enter Age*:</label>
        <input type="int" id="age" name="age" placeholder="21" required><br>
		<label for="emaill">Enter Email Address*:</label>
        <input type="text" id="emai1l" name="emaill" placeholder="joe@example.com" required><br>
        <label for="subject">Tell us something about yourself:</label>
        <textarea id="subject" name="subject" style="height:100px"></textarea><br>
        <button type="signup" name="signup" onclick="getConfirm()" >SIGNUP</button>
      </form>
	  
    </div>
  </div>



<!-- Footer -->
<footer>

				<div>
				<img src="img/footerlogo.jpg" width="38" height="48">
				<img src="img/DOG.jpg" width="65" height="48">
				</div>
			
				<div>
				<a href="https://www.facebook.com">
				<img src="img/fb.jpg"  height="50px" width="50px"> </a>
				<a href="https://www.instagram.com">
				<img src="img/insta.jpg"  height="50px" width="50px"></a>
				<a href="https://www.linkedin.com">
				<img src="img/linkedin.jpg"  height="50px" width="50px"></a>
				<a href="https://www.twitter.com">
				<img src="img/twitter.jpg"  height="50px" width="50px"></a>
				</div>
				
				<div>
				<a href="index.html" >Home</a>
				|
				<a href="shop.html">Shop</a>
				|
				<a href="offers.html">Offers</a>
				|
				<a href="contact.html">Contact </a>
				</div>
				<br>
			<span>© 2020 DOG | Designed by Tharani Amarasinghe | Undergraduate - KDU</span>
</footer>

</body>
</html>