

var counter=0;


function nextPic () {

	var picNumber;
	
	counter++;
	picNumber=counter % picArray.length;
	document.thingImg.src="images/"+picArray[picNumber];
}

