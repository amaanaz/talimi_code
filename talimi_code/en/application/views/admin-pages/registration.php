<div class="row">
    <div class="col-lg-12 mainDiv">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">Registration Details</h5>
            </div>
            <div class="card-body">
                <table id="registrationTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl.No.</th>
                            <th>Company Name</th>
                            <th>School Name</th>
                            <th>School Building </th>
                             <th>School Road </th>
                             <th>School Block </th>
                            

                            <th>Contact Number</th>
                            <th>Email ID</th>
                            <th>No. Of Students</th>
                            <th>No. of Teachers</th>
                            <th>Education Type</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div><!-- /.card -->
    </div>
</div>
<?php 
$this->load->view('admin-pages/registration_js');
?>