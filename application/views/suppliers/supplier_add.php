<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Add Data Supplier</h1>
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
                            <h3 class="card-title">Add Data Supplier</h3>
                        </div>
                        <!-- /.card-header -->

            <div class="card-body">
            <!-- form start -->
            <form action="<?=site_url('supplier/action_add')?>" method="post" class="form-group" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone <span class="text-danger">*</span></label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="desc" class="form-control"></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>Images</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="images" />
                    </div> -->
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
