$(document).ready(function() {

// Swap out pngs if svg is not supported
	if (Modernizr.inlinesvg) {
		$('img').each(function() {
			var $this = $(this);
			var src = $this.attr("src").replace(".png", ".svg");
			if (!$this.hasClass("no-svg")) {
				$this.attr("src", src);
		}
		});
	}
//-->

// Helium checks for Messed up css (https://github.com/geuis/helium-css)
// TODO - remove at production stage
	window.addEventListener('load', function(){
        helium.init();
    }, false);
//-->

}); //docReady