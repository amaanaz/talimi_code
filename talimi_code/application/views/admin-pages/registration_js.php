<script>
    $(document).ready(function() {
        var registrationTable = $('#registrationTable').DataTable();
        getRegistrationData();
        function getRegistrationData() {
            preLoader("start");
            $.ajax({
                method: "get",
                dataType: "json",
                url: "<?php echo base_url(); ?>get-registration-data",
                success: function(response) {
                    if (response.status == "success") {
                        registrationTable.clear().draw();
                        if (response.data.length > 0) {
                            response.data.forEach((element, index) => {
                                index++;
                                registrationTable.row.add([
                                    index,
                                    element.company_name,
                                    element.school_name,
                                    element.school_address_building,
                                      element.school_address_road,
                                        element.school_address_block,
                                    element.contact_number,
                                    element.email_id,
                                    element.no_of_students_school,
                                    element.no_of_teachers_school,
                                    element.education_type,
                                ]).draw();
                                preLoader("stop");
                            });
                        } else {
                            preLoader("stop");
                        }
                    }
                },
                error: function(response) {
                    if (response.status == "401") {
                        window.location = "<?php echo base_url('u-login'); ?>";
                    }
                    preLoader("stop");
                }
            });
        }



    });
</script>