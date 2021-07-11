// image index start from 1 
	var imgindex = 1;
	// creating a function to declare images 
	showimage(imgindex);
	function plusimage(n){
		showimage(imgindex += n);
	}
// for current images
	function currentimage(n){
		showimage(imgindex = n);
	}
	function showimage(n){
		var slides , i;
		slides = document.getElementsByClassName("slider");
		if( n < 1){
			imgindex = slides.length;
		}
		if( n > slides.length){
			imgindex  = 1;
		}
		// generating a loop for hiding all images except current
		for (i = 0; i < slides.length; i++ ){
			slides[i].style.display = "none";
		}
	slides[imgindex - 1].style.display = "block";
	}
	// for copyright date

	var d = new Date();
	var currentyear = d.getFullYear();
	document.getElementById("current").innerHTML = currentyear;

// for opening menubar in mobile

const open = document.getElementById("opennav");
const menu = document.getElementById("menus");
open.onclick = function() {
	if(menu.style.display == "none"){
		menu.style.display = "block";
	}
	else{
		menu.style.display = "none";
	}
	open.style.replace = "45deg";
}