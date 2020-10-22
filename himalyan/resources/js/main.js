//	Header scroll Height (Background change)
$(window).scroll(function() {

	if ($(document).scrollTop() > 200	) {

		$(".navbar").addClass("customNav");
	} else {

		$(".navbar").removeClass("customNav");
	}
});