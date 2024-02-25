<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Data Supplier</h1>
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
                            <h3 class="card-title">Edit Data Supplier</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- <div class="card-footer clearfix">
			                <a href="<?php echo site_url('user/index');?>" class="btn btn-sm btn-info float-left"> Back</a>
                        </div> -->

            <div class="card-body">
            <!-- form start -->
            <form action="<?php echo site_url('supplier/edit_data')?>" method="post" class="form-group">
			    <input type="hidden" name="supplier_id" value="<?php echo $supplier->supplier_id; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="<?php echo $supplier->name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone <span class="text-danger">*</span></label>
                        <input type="text" name="phone" value="<?php echo $supplier->phone; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">    
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputPassword1">address</label>
                        <input type="text" name="address" value="<?php echo $supplier->address; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" ><?php echo $supplier->description; ?></textarea>
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
