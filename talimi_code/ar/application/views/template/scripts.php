<!-- <script src="<?php echo base_url('ar/assets/'); ?>plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url('ar/assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url('ar/assets/'); ?>dist/js/adminlte.min.js"></script> -->.



<style>
    .hide {

        display: none !important;

    }

    .pull-right {

        float: right !important;

    }
</style>

<script type="text/javascript">
    if (document.location.href.match(/[^\/]+$/) !== null) {

        var pageName = document.location.href.match(/[^\/]+$/)[0];

    } else {

        var pageName = 'home';

    }

    console.log(pageName);

    $('.nav-link').removeClass('active');

    switch (pageName) {

        case "admin-faqs":

            $('.admin-faqs').addClass('active');

            break;

        case "admin-registration":

            $('.admin-registration').addClass('active');

            break;

        default:

            break;

    }

    /* init Jarallax */

    $('.jarallax').jarallax({

        speed: 0.5,

        imgWidth: 1366,

        imgHeight: 768

    })
</script>