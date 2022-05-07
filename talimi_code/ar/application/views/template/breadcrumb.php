<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1 class="m-0"><?php echo $page_name; ?></h1>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="#" id="home">Home</a></li>

                    <li class="breadcrumb-item active"><?php echo $page_name; ?></li>

                </ol>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container-fluid -->

</div>

<?php
$this->load->view('home-pages/translate2arb-js');
?>