<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Data Users</h1>
                </div>
            </div>
        </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- <div class="card-footer clearfix">
			                <a href="<?php echo site_url('user/index');?>" class="btn btn-sm btn-info float-left"> Back</a>
                        </div> -->

            <div class="card-body">
            <!-- form start -->
            <form action="<?php echo site_url('user/edit_data')?>" method="post" class="form-group">
			    <input type="hidden" name="user_id" value="<?php echo $user->user_id; ?>">
                <div class="card-body">
                    <div class="form-group <?=form_error('name') ? 'text-danger': null?>">
                        <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="<?php echo $user->name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        <?= form_error('name')?>
                    </div>
                    <div class="form-group <?=form_error('username') ? 'text-danger': null?>">
                        <label for="exampleInputPassword1">Username <span class="text-danger">*</span></label>
                        <input type="text" name="username" value="<?php echo $user->username; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <?= form_error('username')?>
                    </div>
                    <div class="form-group <?=form_error('password') ? 'text-danger': null?>">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" value="<?php echo $user->password; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <?= form_error('password')?>
                    </div>
                    <div class="form-group <?=form_error('passconf') ? 'text-danger': null?>">
                        <label for="exampleInputPassword1">Password Confirmation</label>
                        <input type="password" name="passconf" value="<?= set_value('passconf')?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <?= form_error('passconf')?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <textarea name="address" class="form-control" ><?php echo $user->address; ?></textarea>
                        <?= form_error('address')?>
                    </div>

                    <div class="form-group <?=form_error('level') ? 'text-danger': null?>">
                        <label for="exampleInputPassword1">Level <span class="text-danger">*</span></label>
                        <select name="level" class="form-control">
                            <<?php echo $user->level; ?>
                            <option value="1">Admin</option>
                            <option value="2">Kasir</option>
                        </select>
                        <?= form_error('level')?>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class=" ml-auto">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button onClick="goBack()".GoBack  class="btn btn-warning"> Kembali</button>
                        <script>
                        function goBack() {
                            window.history.back();
                        }
                        </script>
                </div>
            </form>
            </div>
            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
