$(function() {  
	  $('.error').hide(); 
	  $(".button").click(function() {  
			$('.error').hide(); 
			$( "#results ul" ).empty();
			
			var urls = $("textarea#url").val();
			if (urls==null) {
				$("textarea#url_error").show();
				$("textarea#url").focus();  
				return false; 
			}
			
			var stuff ={"urls":urls};
						
			$.ajax({  
			  type: "POST",  
			  url: "generate.php",
			  data: {result:stuff},
			  dataType: "json",
			  success: function(result) {
			  	jQuery.each( result, function( i, val ) {
				  $( "#results ul").append( "<li>" + val + "</li>" );
				});
				
			  },
			  error: function(XMLHttpRequest) { 
			  	var response = XMLHttpRequest.responseText.split('-');
			    if (response[0] == "Invalid"){
				  		$('#results').html("<h2>Sorry, but "+response[1]+" is not a valid url. Check it please!</h2>").fadeOut(10000, function() { 
				    });
			  	} else {
			  		$('#results').html("<h2>Form NOT Submitted!</h2>").fadeOut(10000, function() { 
			    	});
			  	}
			  }   
			});  
			return false;
	  });  
	});  
