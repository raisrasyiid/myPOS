<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Data Customer</h1>
                </div>
            </div>
        </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-footer clearfix">
			                <a href="<?php echo site_url('customer/add');?>" class="btn btn-sm btn-info float-left">
                            <i class="fa fa-user-plus"></i> Add Customer</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">  
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php 
                                    $no = 1;
                                    foreach($customer as $row) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row->name ?></td>
                                        <td><?= $row->gender ?></td>
                                        <td><?= $row->phone ?></td>
                                        <td><?= $row->address ?></td>
                                        <td class="text-center" width="160px">
                                            <a href="<?= site_url('customer/edit/'.$row->customer_id)?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="<?= site_url('customer/delete/'.$row->customer_id)?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger  btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <?php $no++;} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
