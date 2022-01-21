$(document).ready(function(){


// Bulma Form Validator
$(function() {
   $(".contactForm").BulmaValidator({
   	name: "BulmaValidator"
   });
});
//Hide If name field is empty in subscribe form
if ($('.ok-is-name-field').html().trim() == '') {
	$('.ok-is-name-field').hide();
} else {
	$('.ok-is-name-field').show();
};


});