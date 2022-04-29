<script>
    // $(document).ready(function() {
    //     $(document).on("click", "#registrationBtn", function() {
    //         // console.log($('input[name=education_type]:checked').val())
    //         $.ajax({
    //             method: "post",
    //             dataType: "json",
    //             url: "<?php echo base_url('registration_submit'); ?>",
    //             data: {
    //                 company_name: $('#company_name').val(),
    //                 school_name: $('#school_name').val(),
    //                 school_address: $('#school_address').val(),
    //                 contact_number: $('#contact_number').val(),
    //                 email_id: $('#email_id').val(),
    //                 no_of_students_school: $('#no_of_students_school').val(),
    //                 no_of_teachers_school: $('#no_of_teachers_school').val(),
    //                 education_type : $('input[name=education_type]:checked').val(),
    //                 created_by: '1'
    //             },
    //             success: function(response) {
    //               // console.log(response)
    //                  alert(response.status)
    //                  window.location.reload(true)
    //             },
    //             error: function(response) {
    //             }

    //         });
    //     });
    // });
    
    
   

    $(document).ready(function() {
       $("#registration_form").submit(function() {            
             var datastring = $("#registration_form").serialize();
             
            $.ajax({
                method: "post",
                dataType: "json",
                url: "<?php echo base_url('registration_submit'); ?>",
                data: datastring,
                success: function(response) {
                  // console.log(response)
                     alert(response.status)
                     window.location.reload(true)
                },
                error: function(response) {
                }

            });
        });
    });
   
   
   
   
   $(function($) {
	var telInput = $('#phone');
	telInput.intlTelInput({
		utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.8/js/utils.js',
		initialCountry: 'us',
		onlyCountries: [ 'cn', 'us', 'ca', 'gr', 'es', 'pt', 'hu', 'fk' ],
	});

	var validate = function(input) {
		if ($.trim(input.val())) {
			if (input.intlTelInput("isValidNumber")) {
				$('#result').text('OK')
			} else {
				$('#result').text('Not OK')
			}
		}
	};
	$('#submit').on('click', function() {
		validate(telInput);
	});
});
    
    
</script>