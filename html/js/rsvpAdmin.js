/* rsvpAdmin Js*/

$(function(){
	$(".btn-next-code").on("click", function(){
		$("#code-box").slideUp();
		$("#mobile-box").slideDown();
	});

	$(".btn-next-mobile").on("click",function(){
		$("#mobile-box").slideUp();
		$("#otp-box").slideDown();
	});
});