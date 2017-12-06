$(document).ready(function () {
	$('#delete-image').click(function () {

		swal({
		  title: "Are you sure?",
		  text: "You will not be able to recover this image!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Yes, delete it!",
		  closeOnConfirm: false
		},
		function(){
		  console.log($('#delete-image'));
		  // swal("Deleted!", "Your imaginary file has been deleted.", "success");
		});

	});
});