<div class="row">

    <div class="col-lg-12 mainDiv">

        <div class="card card-primary card-outline">

            <div class="card-header">

                <h5 class="card-title">FAQs</h5>

                <div class="pull-right">

                    <button type="button" class="btn btn-sm btn-primary" id="createFAQs"> <i class="fa fa-plus"></i>

                        Create FAQs</button>

                </div>

            </div>

            <div class="card-body">

                <table id="faqTable" class="table table-bordered table-hover">

                    <thead>

                        <tr>

                            <th>Sl.No.</th>

                            <th>FAQ Question</th>

                            <th>FAQ Answer</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                </table>

            </div>

        </div><!-- /.card -->

    </div>

    <div class="col-lg-4 editDiv hide">

        <div class="card card-primary card-outline">

            <div class="card-header">

                <h5 class="card-title cardHeading"></h5>

            </div>

            <form id="faqForm">

                <div class="card-body">

                    <div class="form-group">

                        <label for="exampleInputEmail1">FAQ Question</label>

                        <input type="text" class="form-control" id="faqQuestion" name="faqQuestion" placeholder="Enter FAQ Question">

                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">FAQ Answer</label>

                        <textarea class="form-control" rows="3" placeholder="Enter FAQ answer" id="faqAnswer" name="faqAnswer"></textarea>

                    </div>

                </div>

                <div class="card-footer">

                    <input type="hidden" class="form-control" id="faqId" name="faqId" value="0">

                    <button type="submit" class="btn btn-sm btn-primary" id="saveBtn"></button>

                    <button type="button" class="btn btn-sm btn-danger" id="cancelBtn">Cancel</button>

                </div>

            </form>

        </div><!-- /.card -->

    </div>

</div>

<?php

$this->load->view('admin-pages/faqs_js');

?>