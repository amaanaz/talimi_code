<script>
    $(document).ready(function() {
        $(document).on("click", "#loginFormBtn", function() {
            // console.log($('input[name=education_type]:checked').val())
            $.ajax({
                method: "post",
                dataType: "json",
                url: "<?php echo base_url('login-check'); ?>",
                data: {
                    username: $('#username').val(),
                    password: $('#password').val()
                },
                success: function(response) {
                    
                //    alert(response.status);
                    if(response.status=='success'){
        window.location ="<?php echo base_url('admin'); ?>";
                        console.log(response.data.login_id)
                        localStorage.setItem("login_id", response.data.login_id);
                    }else{
                        alert('Invalid Credentials');
                    }
				
                },
                error: function(response) {
                  //  alert(response.status);
                     alert('Invalid Credentials');
                }

            });
        });
    });
</script>