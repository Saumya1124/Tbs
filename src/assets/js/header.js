// const { event } = require("jquery");

var icon = document.getElementById("icon");
    icon.onclick = function()
    {
        document.body.classList.toggle("dark-theme")
        if(document.body.classList.contains("dark-theme")){
            icon.src= "assets/img/logo/sun.png";
            logo1.src="assets/img/logo/White-Logo.png";
			logo2.src="assets/img/logo/White-Logo.png";

        } else{
            icon.src= "assets/img/logo/moon.png";
            logo1.src="assets/img/logo/logo.png";
			logo2.src="assets/img/logo/logo.png";
        }
    }
  
    var canvas = document.getElementById("canvas");
    canvas.onclick = function()
    {
        document.body.classList.toggle("dark-theme")
        if(document.body.classList.contains("dark-theme")){
            canvas.src= "assets/img/logo/sun.png";
            logo1.src="assets/img/logo/White-logo.png";
			logo2.src="assets/img/logo/White-logo.png";

        } else{
            canvas.src= "assets/img/logo/moon.png";
            logo1.src="assets/img/logo/logo.png";
			logo2.src="assets/img/logo/logo.png";
        }
    }
// audio for image 10.png
    var test = document.getElementById("test");
    test.addEventListener("mouseover", function( event ) {  
        var audio = document.getElementById("audio");
        audio.play();
    }, false);

    var test = document.getElementById("test");
    test.addEventListener("mouseout", function( event ) {  
        var audio = document.getElementById("audio");
        audio.pause();
    }, false);

// audio for image 01.png
    var test = document.getElementById("test1");
    test.addEventListener("mouseover", function( event ) {  
        var audio = document.getElementById("audio1");
        audio.play();
    }, false);

    var test = document.getElementById("test1");
    test.addEventListener("mouseout", function( event ) {  
        var audio = document.getElementById("audio1");
        audio.pause();
    }, false);


	

