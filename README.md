# Front-end-development
HTML, CSS, JavaScript.
## Top view
- [1.table content](#1.table content)
- [2.create moving slides show](#2.create moving slides show)
- [3.embed video](#3.embed video)
 [4.CSS formating](#4.CSS formating)
 [5.User Validation](#5.User Validation)
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
