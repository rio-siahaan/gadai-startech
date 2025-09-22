Dropzone.autoDiscover = false;
function createCookie(name, value, minute) {
    var expires;
    if (minute) {
        var date = new Date();
        date.setTime(date.getTime() + (minute *60* 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}
function updateCookie(name, value, minute) {
    // Update the cookie by creating a new one with the same name
    createCookie(name, value, minute);
}

// Function to get the value of a cookie by name
function getCookie(name) {
    var nameEQ = escape(name) + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) === 0) {
            return unescape(cookie.substring(nameEQ.length, cookie.length));
        }
    }
    return null;
}
// Dropzone.options.demoform = false;	
let token = $('meta[name="csrf-token"]').attr('content');
$(function() {
var myDropzone = new Dropzone("div#dropzoneDragArea", {
	paramName: "file",
	url: "/storeimage",
	previewsContainer: 'div.dropzone-previews',
	addRemoveLinks: true,
	autoProcessQueue: false,
	uploadMultiple: true,
	parallelUploads: 4,
	maxFiles: 4,
    acceptedFiles: ".jpeg,.jpg,.png",
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }, 
	 // The setting up of the dropzone
	init: function() {
	    var myDropzone = this;
	    //form submission code goes here
	    $("form[name='form']").submit(function(event) {
	    	//Make sure that the form isn't actully being sent.
	    	event.preventDefault();
			$("#jmlfoto").val(myDropzone.getQueuedFiles().length);
	    	URL = $("#form").attr('action');
	    	formData = $('#form').serialize();
	    	$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  },
	    		type: 'POST',
	    		url: URL,
	    		data: formData,
	    		success: function(result){
	    			if(result.status == "success"){
	    				// fetch the useid 
	    				var gadaiid = result.gadaiid;
						$("#gadaiid").val(gadaiid); // inseting userid into hidden input field
	    				//process the queue
	    				myDropzone.processQueue();
	    			}else{
	    				console.log(result.status);
	    			}
	    		},
				error: function(xhr, status, error) {
					const response = JSON.parse(xhr.responseText);
					const errors = JSON.stringify(response.errors);
					if (getCookie("err")) {
						// If it exists, update the cookie information
						updateCookie("err", errors, "5");
					} else {
						// If it doesn't exist, create the cookie
						createCookie("err", errors, "5");
					}
					location.reload();
					// Handle other AJAX errors
				}
	    	});
	    });

	    // //Gets triggered when we submit the image.
	    // this.on('sending', function(file, xhr, formData){
	    // //fetch the user id from hidden input field and send that userid with our image
	    // //   let gadaiid = document.getElementById('gadaiid').value;
		// //    formData.append('gadaiid', gadaiid);
		// });
		
	    // this.on("success", function (file, response) {
        //     // //reset the form
        //     // $('#form')[0].reset();
        //     // //reset dropzone
        //     // $('.dropzone-previews').empty();
        // });

        // this.on("queuecomplete", function () {
		
        // });
		
        // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
	    // of the sending event because uploadMultiple is set to true.
	    this.on("sendingmultiple", function(file, xhr, formData) {
	      // Gets triggered when the form is actually being sent.
	      // Hide the success button or the complete form.
		  
	      let gadaiid = document.getElementById('gadaiid').value;
		   formData.append('gadaiid', gadaiid);
	    });
		
	    this.on("successmultiple", function(files, response) {
	      // Gets triggered when the files have successfully been sent.
	      // Redirect user or notify of success.
		  
            //reset the form
            $('#form')[0].reset();
            //reset dropzone
            $('.dropzone-previews').empty();
	    });
		
	    this.on("errormultiple", function(files, response) {
	      // Gets triggered when there was an error sending the files.
	      // Maybe show form again, and notify user of error
	    });
	}
	});
	
	console.log(myDropzone.files.length);
});
