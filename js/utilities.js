// Change Nav Position when WP Admin Nav is present
jQuery(document).ready(function () {
	jQuery("body").ready(function() {
		var tar = document.getElementById('wpadminbar');
		if (tar == undefined) {
		} else {
	  	  jQuery(".navbar").css("margin-top","28px");
		}
	})	
});