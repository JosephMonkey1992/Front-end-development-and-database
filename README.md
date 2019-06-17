# Front-end-development
HTML, CSS, JavaScript.
## Top view
[1.table content] (#1.table content)
[2.create moving slides show] (#2.create moving slides show)
### 1. table content
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
### 2. create moving slides show 
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
