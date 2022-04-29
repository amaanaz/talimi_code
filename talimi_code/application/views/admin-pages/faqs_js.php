<script>
    $(document).ready(function() {
        var faqTable = $('#faqTable').DataTable();
        getFaqData();
        $(document).on("click", "#createFAQs", function(e) {
            $('.editDiv').removeClass('hide');
            $('.cardHeading').text("Create New FAQ");
            $('#saveBtn').text("Create");
            $('.mainDiv').removeClass('col-lg-12').addClass('col-lg-8');
            $('#faqQuestion').val('');
            $('#faqAnswer').val('');
        });

        $(document).on("click", "#cancelBtn", function(e) {
            $('.editDiv').addClass('hide');
            $('.form-control').val('');
            $('.mainDiv').removeClass('col-lg-8').addClass('col-lg-12');
        });

        function getFaqData() {
            preLoader("start");
            $.ajax({
                method: "get",
                dataType: "json",
                url: "<?php echo base_url(); ?>get-faqs",
                success: function(response) {
                    if (response.status == "success") {
                        faqTable.clear().draw();
                        if (response.data.length > 0) {
                            response.data.forEach((element, index) => {
                                index++;
                                faqTable.row.add([
                                    index,
                                    element.faq_question,
                                    element.faq_answer,
                                    '<span><i class="fa fa-edit hover-btn" data-id="' +
                                    element.faq_id + '" ></i></span>'
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



        $(document).on("click", ".fa-edit", function(e) {
            preLoader("start");
            $('.editDiv').removeClass('hide');
            $('.cardHeading').text("Update FAQ");
            $('#saveBtn').text("Update");
            $('.mainDiv').removeClass('col-lg-12').addClass('col-lg-8');
            $.ajax({
                method: "post",
                dataType: "json",
                data: {
                    faq_id: $(this).attr('data-id')
                },
                url: "<?php echo base_url(); ?>get-this-faq",
                success: function(response) {
                    if (response.status == "success") {
                        $('#faqId').val(response.data.faq_id);
                        $('#faqQuestion').val(response.data.faq_question);
                        $('#faqAnswer').val(response.data.faq_answer);
                        preLoader("stop");
                    }
                },
                error: function(response) {
                    if (response.status == "401") {
                        window.location = "<?php echo base_url('u-login'); ?>";
                    } else if (response.status == "400") {
                        // swalCustom('warning', response.responseJSON.message);
                    } else {
                        // swalCustom('error', response.responseJSON.message);
                    }
                    preLoader("stop");
                }
            });
        });

        $.validator.setDefaults({
            submitHandler: function() {
                preLoader("start");
                $.ajax({
                    method: "post",
                    dataType: "json",
                    data: {
                        faq_id: $('#faqId').val(),
                        faq_question: $('#faqQuestion').val(),
                        faq_answer: $('#faqAnswer').val(),
                    },
                    url: "<?php echo base_url(); ?>create-update-faq",
                    success: function(response) {
                        if (response.status == "success") {
                            getFaqData();
                            $('.editDiv').addClass('hide');
                            $('#saveBtn').removeClass('hide');
                            $('.form-control').val('');
                            $('#faqId').val(0);
                            preLoader("stop");
                            toster(response.message, 'success')
                            $('.mainDiv').removeClass('col-lg-8').addClass('col-lg-12');
                        }
                    },
                    error: function(response) {
                        if (response.status == "401") {
                            window.location = "<?php echo base_url('u-login'); ?>";
                        } else if (response.status == "400") {
                            // swalCustom('warning', response.responseJSON.message);
                        } else {
                            // swalCustom('error', response.responseJSON.message);
                        }
                        preLoader("stop");
                    }
                });
            }
        });

        $('#faqForm').validate({
            rules: {
                faqQuestion: {
                    required: true
                },
                faqAnswer: {
                    required: true
                }
            },
            messages: {
                faqQuestion: {
                    required: "Please enter FAQ question"
                },
                faqAnswer: {
                    required: "Please enter FAQ Answer"
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.input-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });


    });
</script>