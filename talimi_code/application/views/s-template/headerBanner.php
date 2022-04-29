<div class="about-heading" style="margin-top: 100px;">

    <!-- <h2 style="color:black;"><?php echo $page_name; ?> <span></span></h2> -->

    <h2 style="color:black;" id="pageHeading"> HOME<span></span></h2>

    <script>
        var pageName;
        if (document.location.href.match(/[^\/]+$/)[0] != null)
            pageName = document.location.href.match(/[^\/]+$/)[0];
        else
            pageName = "home";

        document.getElementById('pageHeading').innerText = pageName;
    </script>

</div>

<?php
$this->load->view('home-pages/translate2arb-js');
?>