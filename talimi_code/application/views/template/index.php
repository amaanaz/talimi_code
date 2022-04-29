<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('template/head') ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php $this->load->view('template/navTop') ?>
        <?php $this->load->view('template/navLeft') ?>
        <div class="content-wrapper">
            <?php $this->load->view('template/breadcrumb') ?>
            <div class="content">
                <?php $this->load->view($content); ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('template/footer') ?>
    </div>
    <?php $this->load->view('template/scripts') ?>
</body>

</html>