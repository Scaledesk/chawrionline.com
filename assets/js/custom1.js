$(document).ready(function()
{
	//Enable Upload button
	$('#file').change(function(){
		$('#submit').removeAttr('disabled');
	});
	//Show the progress bat after upload button hit
	$('#submit').change(function(){
		$('#progress').removeClass('hide');
	});
	
	//We can even provide options to ajaxForm to get callbacks like success,error, uploadProgress and beforeSend
    var options = {
	//beforeSend : this function called before form submission
    beforeSend: function()
    {
        $("#progress").show();
        //clear everything
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
	//uploadProgress : this function called when the upload is in progress
    uploadProgress: function(event, position, total, percentComplete)
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');

    },
	//success : this function is called when the form upload is successful.
    success: function()
    {
        $("#bar").width('100%');
        $("#percent").html('100%');

    },
	//complete: this function is called when the form upload is completed.
    complete: function(response)
    {
        $("#message").html("<font color='green'>"+response.responseText+"</font>");
    },
    error: function()
    {
        $("#message").html("<font color='red'> ERROR: unable to upload files</font>");

    }

};
	////where myForm is the form id
     $("#myForm").ajaxForm(options);

});
