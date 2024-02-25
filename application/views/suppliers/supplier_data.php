<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Data Supplier</h1>
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
                            <h3 class="card-title">Data Supplier</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-footer clearfix">
			                <a href="<?php echo site_url('supplier/add');?>" class="btn btn-sm btn-info float-left">
                            <i class="fa fa-user-plus"></i> Add Supplier</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">  
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <!-- <th>Image</th> -->
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php 
                                    $no = 1;
                                    foreach($supplier as $row) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row->name ?></td>
                                        <!-- <td><img src="<?php echo base_url('./assets/images/' . $row->images); ?>" width="150" height="110"></td> -->
                                        <td><?= $row->phone ?></td>
                                        <td><?= $row->address ?></td>
                                        <td><?= $row->description ?></td>
                                        <td class="text-center" width="160px">
                                            <a href="<?= site_url('supplier/edit/'.$row->supplier_id)?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="<?= site_url('supplier/delete/'.$row->supplier_id)?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger  btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
