$(window).load(function () {
	$("#loader").delay(1000).fadeOut();
	$("#pre-div").delay(1500).fadeOut("slow");
});
function onloadfunc()
{
	
	var width=($( window ).width());
	if(width>779)
	{
		$('#myNavBar_ul').addClass('pull-right');
	}
}