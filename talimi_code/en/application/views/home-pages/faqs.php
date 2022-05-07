<div class="faq">

    <div class="container">

        <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">

            <div id="faq_eng">
                <?php
                foreach ($faq_data as $key => $value) {

                ?>

                    <div class="panel panel-default">

                        <div class="panel-heading" role="tab" id="heading<?php echo $key; ?>">

                            <h4 class="panel-title asd">

                                <?php if ($key == 0) { ?>

                                    <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">

                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>

                                        <?php echo $value['faq_question']; ?>

                                    </a>

                                <?php } else { ?>

                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key; ?>" aria-expanded="false" aria-controls="collapse<?php echo $key; ?>">

                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>

                                        <?php echo $value['faq_question']; ?>

                                    </a>

                                <?php } ?>

                            </h4>

                        </div>

                        <?php if ($key == 0) { ?>

                            <div id="collapse<?php echo $key; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $key; ?>">

                                <div class="panel-body panel_text">

                                    <?php echo $value['faq_answer']; ?>

                                </div>

                            </div>

                        <?php } else { ?>

                            <div id="collapse<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $key; ?>">

                                <div class="panel-body panel_text">

                                    <?php echo $value['faq_answer']; ?>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                <?php

                }

                ?>
            </div>

            <div id="faq_arb">
                <!-- Arabic Faqs -->
            </div>

        </div>

    </div>

</div>

<?php
$this->load->view('home-pages/translate2arb-js');
?>