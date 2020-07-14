var picArray=["Feijoada1.jpg","French potato2.jpg","French potato3.jpg","Strawberry cucumber1.jpg","Feijoada-Light.jpg","Spiced-roast-side-of-salmon.jpg","Super-Fast-Sassy-Salmon-Stir-Fry-Supper-w.jpg","festive-foie-gras-and-toast--takedahrs.jpg"];

var counter=0;


function nextPic () {

	var picNumber;
	
	counter++;
	picNumber=counter % picArray.length;
	document.thingImg.src="images/"+picArray[picNumber];
}


