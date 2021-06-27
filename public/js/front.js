
$(function () {
	
    'use strict';
	//switch between login &signup
    $('.login-page h1 span').click(function () {
		$(this).addClass('selected').siblings().removeClass('selected');
		$('.login-page form').hide();
		$('.' + $(this).data('class')).fadeIn(100);
		
	});	
	
    //hide placeholder on from focus
	
	
    $('[placeholder]').focus(function () {
                             
      $(this).attr('data-text', $(this).attr('placeholder'));
    
      $(this).attr('placeholder', '');
	  
      }).blur(function () {
                                     
      $(this).attr('placeholder', $(this).attr('data-text'));
  });
  
  //add asterisk on required field
  
  $('input').each(function (){
	  
	  if ($(this).attr('required') === 'required'){
		  $(this).after('<span class="asterisk">*</span>');
	  }
  });
    //convert password field to text field on hover 
	
	var passFileld = $('.password');

  $('.show-pass').hover(function (){
	  
	  passFileld.attr('type', 'text');
	  
  }, function (){
	  
	  passFileld.attr('type', 'password');
	  
  });
	  
	  
	 //conformation  messag on button
	 
	 $('.confirm').click(function () {
		 
		 return confirm('are you  sure?');
	 });
	
$('.live').keyup(function () {
	$($(this).data('class')).text($(this).val());

});	

	
});