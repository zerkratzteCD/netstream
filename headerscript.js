
function openmenu() {
	  var x = document.getElementById("menu");
	  if (x.style.display === "none") {
		x.style.display = "block";
	  } else {
		x.style.display = "none";
	  }
	}

function checksize() {
		

		if(document.documentElement.clientWidth > 800){
		    document.getElementById('menu').style.display = "block";
		}

		if(document.documentElement.clientWidth < 800){
		    document.getElementById('menu').style.display = "none";
		}
	}

function opensearch() {
	  var x = document.getElementById("suche");
	  if (x.style.display === "none") {
		x.style.display = "block";
	  } else {
		x.style.display = "none";
	  }

	  var y = document.getElementById("menu");
	  if (y.style.display === "block") {
		y.style.display = "none";
	  } else {
		y.style.display = "none";
	  }
	}

