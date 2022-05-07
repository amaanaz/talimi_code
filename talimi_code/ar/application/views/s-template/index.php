<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('s-template/head') ?>

<body>
    <!-- header-top -->
    <?php $this->load->view('s-template/navHeader') ?>
    <!-- //header-top -->
    <!-- header -->
    <?php $this->load->view('s-template/navTop') ?>

    <?php $this->load->view('s-template/headerBanner') ?>
    <?php $this->load->view($content); ?>
    <!-- //choose -->
    <?php $this->load->view('s-template/footer') ?>
    <?php $this->load->view('s-template/scripts') ?>
</body>

</html>