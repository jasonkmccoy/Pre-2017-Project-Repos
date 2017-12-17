$(function(){
	$( "#menu" ).menu();
});

$(function(){
	$('.holder').hover(
		function () {
			$(this).removeClass('.notactive');
			$('.notactive').stop().animate({'width':'290px'},400);
			$(this).find('img').stop().animate({'top':'-600px'},400);
			$(this).stop().animate({'width':'380px'},400);
			$(this).find('span').css({'background-color':'transparent'});
			$(this).find('.text').fadeIn(300);
		},
		function () {
			$('.notactive').stop().animate({'width':'320px'},400);
			$(this).addClass('.notactive');
			$(this).find('.text').hide();
			$(this).find('img').stop().animate({'top':'0px'},500);
			$(this).stop().animate({'width':'320px'},400);
			$(this).find('span').css({'background-color':'transparent', 'color':'#981B1E'});
			$(this).find('.what_cost').css({'background-color':'#fff', 'color':'#981B1E'});
	});
});
//-->

$(function(){
	// binds form submission and fields to the validation engine
	$("#formID").validationEngine();
});

/**
*
* @param {jqObject} the field where the validation applies
* @param {Array[String]} validation rules for this field
* @param {int} rule index
* @param {Map} form options
* @return an error string if validation failed
*/
function checkHELLO(field, rules, i, options){
	if (field.val() != "HELLO") {
		// this allows to use i18 for the error msgs
		return options.allrules.validate2fields.alertText;
	}
}

$('#myTab a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
	$('#myTab a[href="#profile"]').tab('show'); // Select tab by name
	$('#myTab a:first').tab('show'); // Select first tab
	$('#myTab a:last').tab('show'); // Select last tab
	$('#myTab li:eq(2) a').tab('show'); // Select third tab (0-indexed)
})
