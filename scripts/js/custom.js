$(function() {
    function reposition() {
        var modal = $(this),
        dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }
    $('.modal').on('show.bs.modal', reposition);
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
});

$(document).ready(function(){ 
    $('[data-toggle="tooltip"]').tooltip({animation: true, placement: "bottom"}); 
    $('[data-toggle="tooltip-aff"]').tooltip({animation: true, html: true, placement: "left"}); 
});

$(function() {
  $("#toTop").scrollToTop();
});

$(function() {
  $("#form").validate({
      ignore: ".ignore",
	  rules: {
		  YourName: "required",
		  ContactSubject: "required",
		  YourComment: "required",
		  YourEmail: {
			  required: true,
			  email: true
		  },
          hiddenRecaptcha: {
                required: function () {
                    if (grecaptcha.getResponse() == '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            }		  
		  
	  },
	  messages: {
		  YourName: "Please enter your name",
		  ContactSubject: "Please enter subject",
		  YourComment: "Please enter message",
		  YourEmail: "Please enter a valid email address",
		  hiddenRecaptcha: "Please complete reCAPTCHA",
	  },
	  
	  submitHandler: function(form) {
		  form.submit();
	  }
  });
});