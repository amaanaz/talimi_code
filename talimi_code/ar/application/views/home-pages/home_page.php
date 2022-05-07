<div class="container">

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <img class="home_page_image1" src="<?php echo base_url('ar/assets/images/') ?>img1.png" />

        </div>

    </div>

</div>

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 ">

            <h4 class="home_page_h4 white_bg" id="how_schooly_works">How Schooly Works</h4>

            <!-- <video width="320" height="240" controls>

            <source src="<?php echo base_url('ar/assets/videos/') ?>video2.mp4" type="video/mp4">

        </video> -->

        </div>



        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="white_bg">

                <h4 class="home_page_h4" id="how_hafilaty_works">How Hafilaty Works</h4>

                <video class="home_page_video" controls>

                    <source src="<?php echo base_url('ar/assets/videos/') ?>video2.mp4" type="video/mp4">

                </video>

            </div>

        </div>



        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="white_bg">

                <h4 class="home_page_h4" id="how_HT_works">How Hometime Works</h4>

                <video class="home_page_video" controls>

                    <source src="<?php echo base_url('ar/assets/videos/') ?>video3.mp4" type="video/mp4">

                </video>

            </div>

        </div>



    </div>

</div>

<div class="container">

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <h4 class="home_page_h4" id="plans">Plans</h4>

        </div>

    </div>

    <div class="row">

        <div class="col-md-4 col-sm-6">

            <div class="pricingTable10">

                <div class="pricingTable-header">

                    <h3 class="heading" id="scl_plan_1">School Plan I</h3>

                    <img src="<?php echo base_url('ar/assets/images/') ?>school.png" />

                </div>

                <div class="pricing-content">

                    <ul>

                        <li class="schooly">Schooly</li>

                        <!-- <li>50 Email Accounts</li>

                        <li>50GB Monthly Bandwidth</li>

                        <li>10 Subdomains</li>

                        <li>15 Domains</li> -->

                    </ul>

                    <a href="#" class="read" id="get_quote">Get Quote</a>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-6">

            <div class="pricingTable10">

                <div class="pricingTable-header">

                    <h3 class="heading" id="prnt_plan_1">Parent Plan I</h3>

                    <img src="<?php echo base_url('ar/assets/images/') ?>family.png" />

                </div>

                <div class="pricing-content">

                    <ul>

                        <li class="schooly">Schooly</li>

                        <li class="HT">Hometime</li>

                        <li class="annual_sub">Yearly Subscription</li>

                        <!-- <li>15 Subdomains</li>

                        <li>20 Domains</li> -->

                    </ul>

                    <a href="#" class="read">Subscribe Now</a>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-6">

            <div class="pricingTable10">

                <div class="pricingTable-header">

                    <h3 class="heading" id="prnt_plan_2">Parent Plan II</h3>

                    <span class="price-value">

                        <span class="currency" id="BD">BD</span> 12

                        <span class="month" class="std">/student</span>

                    </span>

                </div>

                <div class="pricing-content">

                    <ul>

                        <li class="hafilaty">Hafilaty</li>

                        <li class="annual_sub">Yearly Subscription</li>

                        <!-- <li>70GB Monthly Bandwidth</li>

                        <li>20 Subdomains</li>

                        <li>25 Domains</li> -->

                    </ul>

                    <a href="#" class="read">Subscribe Now</a>

                </div>

            </div>

        </div>

    </div>

</div>

<?php

$this->load->view('home-pages/translate2arb-js');

?>