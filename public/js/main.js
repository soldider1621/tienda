/***[ Implmentacion de cierre de alertas Boostrap]**/
function closeAlert(){
	$(".closeTime").fadeTo(10000, 500).slideUp(500, function(){
	    $(".closeTime").alert('close');
	});
}
/***************************************************/

$(document).ready(function(){
	closeAlert();
});