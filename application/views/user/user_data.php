<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Data Users</h1>
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
                            <h3 class="card-title">Data Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-footer clearfix">
			                <a href="<?php echo site_url('user/add');?>" class="btn btn-sm btn-info float-left">
                            <i class="fa fa-user-plus"></i> Add Users</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">  
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Level</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php 
                                    $no = 1;
                                    foreach($tampil as $row) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row->username ?></td>
                                        <td><?= $row->name ?></td>
                                        <td><?= $row->address ?></td>
                                        <td><?= $row->level == 1 ? "Admin" : "Kasir" ?></td>
                                        <td class="text-center" width="160px">
                                            <a href="<?= site_url('user/edit/'.$row->user_id)?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="<?= site_url('user/delete/'.$row->user_id)?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger  btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
