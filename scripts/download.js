var clikkedEl = 0;
$('.wpcf7').addClass('downoload-form');
$('a.second-download').on('click', function(){
	clikkedEl = $(this).attr('data-attr');
	console.log(clikkedEl);
});

$(".wpcf7.downoload-form").on('wpcf7:mailsent', function(event){
  // Your code here
	var targetLink = $('a.download-link_true[data-attr='+ clikkedEl + ']').attr('href');
	console.log(targetLink);
	$('.close-modal').click();
	window.open(
	  targetLink,
	  '_blank' // <- This is what makes it open in a new window.
	);
});
