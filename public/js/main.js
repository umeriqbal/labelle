$(document).ready(function(){
	$('.carousel').carousel({
		interval: 3500, // in milliseconds
	  	pause: 'none' // set to 'true' to pause slider on mouse hover
	});
	
	$("a.submenu").click(function() {
		$(".menuBar").slideToggle( "normal", function() {
			// Animation complete.
		});
	});
	
	$( "ul li.dropdown a" ).click(function() {
		$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
		//Animation complete.
		});
		$('ul li.dropdown').toggleClass('current');
	});
	
	$('.button-subscribe').on('click', function(){
		$.post("contact-us/subscribe?response", { 'email-address' : $("#email-address").val()}, function(data) {
			alert(data);
			//$('#response').html(data);
			return false;
		});
	});
	
	$('#contact-form').submit(function() {
        send_special_order();
        return false;
    });
    
    $('#select-service').on('change', function(){
    	if ($(this).val() == 'false'){
    		$('#select-treatment').html('<option value="false">Please select treatment</option>');
    		return false;	
    	}
		$.ajax({
			type: "POST",
			url: "/book-an-appointment/treatments?response",
			data: 'service-id='+$(this).val(),
			success: function(response) {
				$('#select-treatment').html(response);                   
			},
			complete: function(response){
				
           }
       });
	});
	
function send_special_order() {
		var data1 = $('#name').val();
		var data2 = $('#subject').val();
		var data3 = $('#email').val();
		var data4 = $('#message').val();
		var data5 = $('#select-service').val();
		var data6 = $('#select-treatment').val();
		
		$.ajax({
			type: "POST",
		url: "/contact-us/send?response",
		dataType : "json",
		data: ( {"name" : data1, "subject" : data2, "email" : data3,"message" : data4, "service":data5, "treatment":data6} ) ,
				   success: function() {
			                       
		   },
		   complete: function(){
		   		var textToDisplay = '<p>Thank you for sending us a message. Our specialists will contact you as soon as possible.</p>';
		        $('#feedback').append(textToDisplay);
				$('#contact-form').slideUp();
				$('#send-more').click(function(e){
				    e.preventDefault();
				    $('#contact-form').slideDown();
				    $('#feedback').html('');
		         });
           }
    });
}

	var showChar = 250; // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more ";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
            
});