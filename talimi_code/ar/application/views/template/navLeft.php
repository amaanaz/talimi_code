<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->

  <a href="" class="brand-link">

    <img style="background-color: #fff;" src="<?php echo base_url('ar/assets/') ?>images/logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

    <span class="brand-text font-weight-light">Taleemi</span>

  </a>



  <!-- Sidebar -->

  <div class="sidebar">

    <!-- Sidebar user panel (optional) -->

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="image">

        <!-- <img src="<?php echo base_url('ar/assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->

        <div data-avatar="<?php echo $this->session->userdata('name'); ?>" class="avatarBlock round"></div>

      </div>

      <div class="info">

        <a href="#" class="d-block" style="text-transform:capitalize;"><?php echo $this->session->userdata('name'); ?></a>

      </div>

    </div>





    <!-- Sidebar Menu -->

    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

        <li class="nav-item">

          <a href="<?php echo base_url('ar/admin-faqs'); ?>" class="nav-link admin-faqs">

            <i class="nav-icon fas fa-question-circle"></i>

            <p>

              Manage FAQ

            </p>

          </a>

        </li>

        <li class="nav-item">

          <a href="<?php echo base_url('ar/admin-registration'); ?>" class="nav-link admin-registration">

            <i class="nav-icon fas fa-list"></i>

            <p>

              Registration Details

            </p>

          </a>

        </li>



        <li class="nav-item">

          <a href="<?php echo base_url('ar/itemCRUD'); ?>" class="nav-link admin-registration">

            <i class="nav-icon fas fa-list"></i>

            <p>

              Price Range Details

            </p>

          </a>

        </li>





        <!-- <li class="nav-item">

            <a href="pages/widgets.html" class="nav-link">

              <i class="nav-icon fas fa-th"></i>

              <p>

                Widgets

                <span class="right badge badge-danger">New</span>

              </p>

            </a>

          </li>           -->

      </ul>

    </nav>

    <!-- /.sidebar-menu -->

  </div>

  <!-- /.sidebar -->

</aside>

<script>
  $('.avatarBlock').avatar();
</script>