# Front-end Development
HTML, CSS, JavaScript.
## Top view
- [1.table content](#1.table-content)
- [2.create moving slides show](#2.create-moving-slides-show)
- [3.embed video](#3.embed-video)
- [4.CSS formating](#4.CSS-formating)
- [5.User Validation](#5.User-Validation)
- [6.next thing](#6.next-thing)
### 1.table content
create table content or navigation bar by div.
```html
<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="project.css">
      <title> Asian Food</title>
</head>
<body bgcolor="#000000">
<body bgcolor="rgb(0,0,0)">
<body bgcolor="black">
<body>
      <div class="page"; style="width: 300px; height: 800px; background-color: black;float:left">
            <h1 style="color: lavenderblush">WORLD RECIPES</h1>
            <p><h2 style="color: lavenderblush"><a href="" target="_blank">Asian</a><h2></p>
            <p><h2 style="color: lavenderblush"><a href="" target="_blank">American</a><h2></p>
            <p><h2 style="color: lavenderblush"><a href="" target="_blank">European</a><h2></p>
            <p><h2 style="color: lavenderblush"><a href="" target="_blank">South Asian</a><h2></p>
            <p><h2 style="color: lavenderblush"><a href="" target="_blank">South American</a><h2></p>
            <p><h2 style="color: lavenderblush"><a href="Homepage.html" >Go Back to Home Page</a><h2></p>
            </br>
            <p><h1 style="color: red"><a href="upload.php"> I Want TO Upload My Own Video!!</a><h2></p>
      </div>
</body>
</html>
```
### 2.create moving slides show 
using javascript to create a moving slide show as following:
```html
<html>
<body>
      <div style="width: 1000px; height: 800px; background-color: black;float:right">
            <img class="mySlides" src="images/a0.jpg" style="width: 1000px; height:800px">
            <img class="mySlides" src="images/a3.jpg" style="width:1000px; height:800px">
            <img class="mySlides" src="images/a7.jpg" style="width:1000px; height:800px">
            <img class="mySlides" src="images/a8.jpg" style="width:1000px; height:800px">
            <img class="mySlides" src="images/a2.jpeg" style="width:1000px; height:800px">
            <img class="mySlides" src="images/a1.jpg" style="width:1000px; height:800px">
            <img class="mySlides" src="images/a9.jpg" style="width:1000px; height:800px">
      </div>
      <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}
                  x[myIndex-1].style.display = "block";
                  setTimeout(carousel, 2000);
            }
      </script>
</body>
</html>
```
### 3.embed video
using iframe to embed video or map.
```html
<p>
            <iframe  float="left" width="425" height="344" src="https://www.youtube.com/embed/J6xFRlG5Qxg" frameborder="0" allowfullscreen>
            </iframe>
            <iframe  float="center" width="425" height="344" src="https://www.youtube.com/embed/nlWMWko_Hfo" frameborder="0" allowfullscreen>
            </iframe>
            <iframe  float="right" width="425" height="344" src="https://www.youtube.com/embed/aafmrrx7Bh4" frameborder="0" allowfullscreen>
            </iframe>
      </p>
```
### 4.CSS formating
as following
```CSS
/* CSS */
body	{
font-family:	Arial;
background-color:	black;}
.page	{
border:	1px	solid	darkred;
padding:	10px;}
h1	{
font-family:	Arial;
color:	white;}
i	{
color:	darkblue;}
p#intro	{
font-size:	100%;}
p	{
font-size:	75%;}
a:link	{	
color:	silver;}
a:visited	{	
color:	gold;}
a:hover	{
font-style:	italic;}
a:active	{	
color:	red;}
p.ex1 {
border: 1px solid darkred;        ## this is used to line-circle the paragraph
padding: 35px 70px 50px 90px;
font-size: 100%;}
form.ex2 {
border: 1px solid darkred;
padding: 30px 30px 30px 30px;
background-image:url("giphy.gif");
}
```
### 5.User Validation
return to JavaScript file by 'name="jform"'. These coding contain PHP function which is discussed at end-front part.
```html
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
```
This is to validate user information input.
```JavaScript
function checkForm() 
{
	var name;
  	if ( checkUsername() && checkEmail() && checkPassword()){
		name=document.jform.username.value;
		alert("Hello, "+name+": Welcome to Carey Secret Recipe Book.");
		return true;
	} else {
		return false;
	}
}

function checkUsername() {
	var userName=document.jform.username.value;
	if (userName=="") {
		alert ("Please enter your username.");
		document.jform.username.focus();
		return false;
	}
	return true;
}

function checkEmail() {
	var jhuEmail=document.jform.email.value;
	if (jhuEmail=="") {
		alert ("Please enter your @jhu.edu email.");
		document.jform.email.focus();
		return false;
	} 
	else if (!(jhuEmail.includes("@jhu.edu"))) {
		alert ("Please enter your @jhu.edu email.");
		document.jform.email.value="";
		document.jform.email.focus();
		return false;
	}
	return true;
}

function checkPassword() {
	var password=document.jform.password.value;
	if (password=="") {
		alert ("Please enter a password for your account.");
		document.jform.password.value="";
		document.jform.password.focus();
		return false;
	}
	else if (password.length<5){
		alert ("Please enter a password with more than 5 digits.");
		document.jform.password.value="";
		document.jform.password.focus();
		return false;
	}
	return true;
}
```
### 6.next thing
this is to click for next image or other thing.
```JavaScript
##create a array at first

var picArray=["Feijoada1.jpg","French potato2.jpg","French potato3.jpg","Strawberry cucumber1.jpg","Feijoada-Light.jpg","Spiced-roast-side-of-salmon.jpg","Super-Fast-Sassy-Salmon-Stir-Fry-Supper-w.jpg","festive-foie-gras-and-toast--takedahrs.jpg"];

var counter=0;
##onclick function
function nextPic () {

	var picNumber;
	
	counter++;
	picNumber=counter % picArray.length;
	document.thingImg.src="images/"+picArray[picNumber];
}
```
