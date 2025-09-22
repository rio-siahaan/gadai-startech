Dropzone.autoDiscover = false;
// Dropzone.options.demoform = false;	
let token = $('meta[name="csrf-token"]').attr('content');
$(function() {
var myDropzone = new Dropzone("div#dropzoneDragArea", { 
	paramName: "file",
	url: "{{ url('/storeimgae') }}",
	previewsContainer: 'div.dropzone-previews',
	addRemoveLinks: true,
	autoProcessQueue: false,
	uploadMultiple: false,
	parallelUploads: 1,
	maxFiles: 1,
	params: {
        _token: token
    },
	 // The setting up of the dropzone
	init: function() {
	    var myDropzone = this;
	    //form submission code goes here
	    $("form[name='demoform']").submit(function(event) {
	    	//Make sure that the form isn't actully being sent.
	    	event.preventDefault();

	    	URL = $("#demoform").attr('action');
	    	formData = $('#demoform').serialize();
	    	$.ajax({
	    		type: 'POST',
	    		url: URL,
	    		data: formData,
	    		success: function(result){
	    			if(result.status == "success"){
	    				// fetch the useid 
	    				var userid = result.user_id;
						$("#userid").val(userid); // inseting userid into hidden input field
	    				//process the queue
	    				myDropzone.processQueue();
	    			}else{
	    				console.log("error");
	    			}
	    		}
	    	});
	    });

	    //Gets triggered when we submit the image.
	    this.on('sending', function(file, xhr, formData){
	    //fetch the user id from hidden input field and send that userid with our image
	      let userid = document.getElementById('userid').value;
		   formData.append('userid', userid);
		});
		
	    this.on("success", function (file, response) {
            //reset the form
            $('#demoform')[0].reset();
            //reset dropzone
            $('.dropzone-previews').empty();
        });

        this.on("queuecomplete", function () {
		
        });
		
        // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
	    // of the sending event because uploadMultiple is set to true.
	    this.on("sendingmultiple", function() {
	      // Gets triggered when the form is actually being sent.
	      // Hide the success button or the complete form.
	    });
		
	    this.on("successmultiple", function(files, response) {
	      // Gets triggered when the files have successfully been sent.
	      // Redirect user or notify of success.
	    });
		
	    this.on("errormultiple", function(files, response) {
	      // Gets triggered when there was an error sending the files.
	      // Maybe show form again, and notify user of error
	    });
	}
	});
});
