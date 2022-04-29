    <div class="header-top">

        <div class="container">

            <div class="w3layouts-address">

                <ul>

                    <!--<li><i class="fa fa-mobile" aria-hidden="true"></i> +966504144573 | +966112885151</li>-->

                    <li><i class="fa fa-mobile" aria-hidden="true"></i> +97335904159 </li>

                    <!--<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com"> suhail@valuetechsa.com</a></li>-->

                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com"> Walid.chafie@gmail.com</a></li>



                </ul>

            </div>

            <div class="agileinfo-social-grids">

                <ul>

                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                    <li>

                        <a href="#" class="dropdown-toggle tt" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                            <script>
                                var pageName;
                                if (document.location.href.match(/[^\/]+$/)[0] != null)
                                    pageName = document.location.href.match(/[^\/]+$/)[0];
                                else
                                    pageName = "home";
                            </script>

                            <em class="fa fa-language text-white" id="translate" onclick=changeLang(pageName)></em>
                            <p class="hdtext hide">Arabic</p>

                        </a>

                        <ul class="dropdown-menu">

                            <li><a class="hvr-sweep-to-bottom" href="login.html">English</a></li>

                            <li><a class="hvr-sweep-to-bottom" href="registration.html">Arabic</a></li>

                        </ul>

                    </li>

                </ul>

            </div>

            <div class="clearfix"> </div>

        </div>

    </div>

    <?php
    $this->load->view('home-pages/translate2arb-js');
    ?>