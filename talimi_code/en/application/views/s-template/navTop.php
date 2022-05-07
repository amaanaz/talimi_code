<div class="header">

    <div class="container">

        <nav class="navbar navbar-default">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <div class="w3layouts-logo" style="position: absolute; background-color: #fff; top: 0; margin-top: 0px;">

                    <h1><a href="<?php echo base_url('') ?>"><img alt src="<?php echo base_url('en/assets/images/logo1.png') ?>" height=85px;" /></a></h1>

                </div>

            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">

                <nav>

                    <ul class="nav navbar-nav">

                        <li class="home">
                            <a href="<?php echo base_url('/en') ?>" class="hvr-sweep-to-bottom " id="homeNav">Home
                            </a>
                        </li>

                        <li class="faqs">
                            <a href="<?php echo base_url('/en/faq') ?>" class="hvr-sweep-to-bottom " id="faqNav">
                                FAQs
                            </a>
                        </li>

                        <li class="plans">
                            <a href="<?php echo base_url('/en/plans') ?>" class="hvr-sweep-to-bottom" id="planNav">
                                Plans
                            </a>
                        </li>

                        <li class="privacypolicy">
                            <a href="<?php echo base_url('/en/privacypolicy') ?>" class="hvr-sweep-to-bottom" id="privacy_policyNav">
                                Privacy Policy
                            </a>
                        </li>

                        <li class="contact_us">
                            <a href="<?php echo base_url('/en/contact_us') ?>" class="hvr-sweep-to-bottom " id="contact_us_Nav">
                                Contact Us
                            </a>
                        </li>


                        <?php

                        $login_id = $this->session->userdata('/en/login_id');

                        if ($login_id != '') {

                        ?>

                            <li class="login"><a href="<?php echo base_url('/en/admin') ?>" class="hvr-sweep-to-bottom" id="dashboard">Dashboard</a></li>

                            <li class="logout"><a href="<?php echo base_url('/en/logout') ?>" class="hvr-sweep-to-bottom" id="logout">Logout</a></li>

                        <?php

                        } else {

                        ?>

                            <li class="login"><a href="<?php echo base_url('/en/login') ?>" class="hvr-sweep-to-bottom" id="loginNav">Login</a></li>

                            <li class="signup">
                                <a href="<?php echo base_url('/en/registration') ?>" class="hvr-sweep-to-bottom" id="registerationNav">
                                    Registration
                                </a>
                            </li>

                        <?php } ?>

                    </ul>

                </nav>

            </div>

            <!-- /.navbar-collapse -->

        </nav>

    </div>

</div>


<?php
$this->load->view('home-pages/translate2arb-js');
?>