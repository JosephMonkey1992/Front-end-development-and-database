﻿<?php
//receive client form data via post method
$username=$_POST['username1'];
$password=$_POST['password1'];
 require_once 'login1.php';  

//1&2.connect to DBMS, select DB 
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($conn->connect_error)
{
  echo "Failed to connect to MySQL: " . $conn->connect_error;
}

//3.build query of searching the user
$query= "SELECT * FROM user_data WHERE username = '$username' AND password = '$password'";

//4.execute query
$result = $conn->query($query);

//5.use results
if($result->num_rows ==0) {
	echo "<script type='text/javascript'>alert('username and password do not match,please check again');
		window.location.href = 'Homepage.html'; </script>";
	exit();
}

$result = $conn->query("SELECT * FROM user_data");	

?>

<html>
      <head>
            <title>Welcome to Carey Secret Recipe Book!</title>
            <script type="text/JavaScript" src="userValidation.js"></script>
            <script type="text/JavaScript" src="images.js"></script>
            <link href="css/project.css"type="text/css"rel="stylesheet"/>
      </head>
      <body>
            <div style="width: 1380px; height: 150px; background-color: black; margin: 0 0 0 20px;" align="center"/>
	         <img src="images/logo1.jpg" alt="alternative text to display" title="ChefLogo" align="right"/>
	         <h1 style="font-size:350%;">Carey Secret Recipe Book</h1>
	         <h2><p id="intro" style="color:snow"><i>Johns Hopkins Carey Business Students showcase their favorite receipes from their hometown and generate income by uploading their cooking videos.</i></h2></p>
	    </div>
	    <hr/>
	    <div style="width: 290px; height: 500px; background-color: black; float: left;">
	      <div class="page">
	         <h1><center>WORLD RECIPES</center></h1>
		 <p><h2><center><a href="Asian.html" target="_blank">Asian</a></center><h2></p>
		 <p><h2><center><a href="" target="_blank">American</a></center><h2></p>
		 <p><h2><center><a href="" target="_blank">European</a></center><h2></p>
		 <p><h2><center><a href="" target="_blank">South Asian</a></center><h2></p>
		 <p><h2><center><a href="" target="_blank">South American</a></center><h2></p>
	      </div>	
	    </div>
	    <div style="width: 1400px; height: 500px; background-color: black; ">
		<div style="width: 290px; height: 400px; background-color: black; float: right;">
		<div class="page">
		   <form name="jform"method="post" action="adduser.php" onsubmit="return checkForm()">
			<p><h2 style="color:snow"><b>Register:</b></h3></p>
			<p><h3 style="color:snow"><b>Username: <input type="text" name="username" size="15" maxlength="10" /></b></h3></p>
			<p><h3 style="color:snow"><b>JHU E-mail( <u>@jhu.edu</u> ): <input type="email" name="email" size="30" />	</b></h3></p>				
			<p><h3 style="color:snow"><b>Password(>5 digits): <input type="password" name="password" size="15" maxlength="30" /></b></h3></p>
			<input type="submit" value="Submit" name="submit" onclick="checkForm()" />
			<hr /> 	
		   </form>
		   <form name="jform1"method="post" action="userlogin.php">
			<p><h2 style="color:snow"><b>Log in:</b></h3></p>
			<p><h3 style="color:snow"><b>Username: <input type="text" name="username1" size="15" maxlength="10" /></b></h3></p>
			<p><h3 style="color:snow"><b>Password(>5 digits): <input type="password" name="password1" size="15" maxlength="30" /></b></h3></p>
			<input type="submit" value="Submit" name="submit"/>
		   </form>	
			
		</div>	
		</div>
	    <div style="width: 1110px; height:500px; background-color: black; float: Center;">
	                <p><h2 id="intro" style="color:snow">Our website is an online recipe sharing platform targeted to all Carey students. You can upload videos of your cooking processes, watch other students�� cooking videos and leave comments on the outcome of the food under each video. </h2></p>
			<p><h2 id="intro" style="color:snow">Carey Secret Recipe Book offers free cooking videos to Carey students who: <br/>
			<li>Want to save money by cooking at home;</li>
			<li>Start cooking at home to understand the type of ingredients they are putting in their food to maintain a healthier diet;</li> 
		        <li>Provide more eating options;</li>
		        </h2>
			</p>
	    </div>
	    </div>
	    <div id="imgDiv">
			<img src="images/Feijoada1.jpg" alt="Gourmet image" title="Gourmet" name="thingImg" width="1400px" height="1200px"/>
			<br /> 	
			<input type="button" value="Next Picture" name="nextButton" onclick="nextPic()"/>
	    </div>		
<?php		  
//5.use results
echo '<span style="color: white;" /><b>We provide you with other users information, feel free to reach out to them and have fun!<b><hr/>';
while($row = $result->fetch_assoc()){
	echo '<span style="color: white;" /><b>User Name</b>: ' .$row['username'] . '<br />';
	echo '<span style="color: white;" /><b>JHU Email</b>: ' .$row['jhuemail'] . '<hr />';
}
//disconnect DBMS
$conn->close();

?> 		
	</body>
	<footer id="copyright" align="center" style="color:snow">&copy: CareySecretRecipeBookCompany</footer>
</html>

