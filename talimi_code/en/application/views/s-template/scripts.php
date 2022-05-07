<!-- //footer -->

<script src="<?php echo base_url('en/assets/') ?>js/jarallax.js"></script>

<script type="text/javascript">
    if (document.location.href.match(/[^\/]+$/) !== null) {

        var pageName = document.location.href.match(/[^\/]+$/)[0];

    } else {

        var pageName = 'home';

    }

    console.log(pageName);

    switch (pageName) {

        case "home":

            $('li').removeClass('active');

            $('.home').addClass('active');

            break;

        case "faq":

            $('li').removeClass('active');

            $('.faqs').addClass('active');

            break;

        case "plans":

            $('li').removeClass('active');

            $('.plans').addClass('active');

            break;



        case "registration":

            $('li').removeClass('active');

            $('.signup').addClass('active');

            break;





        case "contact_us":

            $('li').removeClass('active');

            $('.contact_us').addClass('active');

            break;





        case "privacypolicy":

            $('li').removeClass('active');

            $('.privacypolicy').addClass('active');

            break;





        case "login":

            $('li').removeClass('active');

            $('.login').addClass('active');

            break;

            // case "registration":

            //     $('li').removeClass('active');

            //     $('.registrations').addClass('active');

            //     break;



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

<script src="<?php echo base_url('en/assets/') ?>js/responsiveslides.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('en/assets/') ?>js/move-top.js"></script>

<script type="text/javascript" src="<?php echo base_url('en/assets/') ?>js/easing.js"></script>

<!-- here stars scrolling icon -->

<script type="text/javascript">
    $(document).ready(function() {

        /*

        	var defaults = {

        	containerID: 'toTop', // fading element id

        	containerHoverID: 'toTopHover', // fading element hover id

        	scrollSpeed: 1200,

        	easingType: 'linear' 

        	};

        */



        $().UItoTop({

            easingType: 'easeOutQuart'

        });



    });
</script>

<!-- //here ends scrolling icon -->

<!-- pricing -->

<script src="<?php echo base_url('en/assets/') ?>js/jquery.flipster.js"></script>

<script>
    $(function() {

        $(".flipster").flipster({

            style: 'flat',

            spacing: -0.25



        });

    });



    $(window).scroll(function() {

        if ($(window).scrollTop() >= 1) {

            $('.header').addClass('fixed-header');

            // $('nav div').addClass('visible-title');

        } else {

            $('.header').removeClass('fixed-header');

            // $('nav div').removeClass('visible-title');

        }

    });
</script>

<!-- //pricing -->

<!-- slider -->

<script type="text/javascript" src="<?php echo base_url('en/assets/') ?>js/jquery.immersive-slider.js"></script>

<!-- //slider -->