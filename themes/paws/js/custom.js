

( function( $ ) {
	
	$('footer ul').addClass('list-style');
	$('.cat-link a').addClass('title-link');

	//Pagination 
	$('.prev').addClass('page-link');
	$('.current').addClass('active');
	$('.page-numbers').addClass('page-link');
	$('.next').addClass('page-link');

	//Comments Area
	$('.comments-area .submit').addClass('btn btn-outline-primary');
	$('.comments-area textarea').addClass('form-control form-control-sm');
	$('.wp-comment-cookies-consent').addClass('form-check-input');
	$('.comments-area #email, #author, #url').addClass('form-control form-control-sm');
	$('.comments-area label').addClass('form-label');
	
}( jQuery ) );

