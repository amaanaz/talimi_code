<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<div class="row">
    <div class="col-lg-12 mb-2">
        <div class="pull-left">
            <h2>Quotation Price Range</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('ar/itemCRUD/create') ?>"> Create Quotation Price Range</a>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">


            <table class="table table-bordered  ">


                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Start Number</th>
                        <th>End Number</th>
                        <th>Price</th>
                        <th width="220px">Action</th>
                    </tr>
                </thead>


                <tbody>
                    <?php $i = 1;
                    foreach ($data as $item) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $item->start_number; ?></td>
                            <td><?php echo $item->end_number; ?></td>
                            <td><?php echo $item->price; ?></td>
                            <td>
                                <form method="DELETE" action="<?php echo base_url('ar/itemCRUD/delete/' . $item->id); ?>">
                                    <a class="btn btn-info" href="<?php echo base_url('ar/itemCRUD/' . $item->id) ?>"> show</a>
                                    <a class="btn btn-primary" href="<?php echo base_url('ar/itemCRUD/edit/' . $item->id) ?>"> Edit</a>
                                    <button type="submit" class="btn btn-danger"> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php $i++;
                    } ?>
                </tbody>


            </table>


        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>