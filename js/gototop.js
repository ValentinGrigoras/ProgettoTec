
	// When the user scrolls down 100px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};
	
	function scrollFunction() {
			if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
					document.getElementById("up").style.display = "block";
			} else {
					document.getElementById("up").style.display = "none";
			}
	}
	
	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
	}
	