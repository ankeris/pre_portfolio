function backgroundColorChange(){
	var colorSelection = ['rgb(51, 102, 153)', 'rgb(66, 102, 138)', 'rgb(25, 102, 102)', 'rgb(62, 116, 89)', 'rgb(96, 86, 57)', 'rgb(66, 36, 51)'];
	var color = colorSelection[Math.floor(Math.random() * colorSelection.length)];
	var subsection = document.querySelectorAll(".childElement-column-photo, .childElement-sub-section, .sub-section");
for (var i = 0; i < subsection.length; i++) {
	subsection[i].style.backgroundColor =  color;
	console.log(subsection[i]);
}
document.body.style.backgroundColor = color;
}

