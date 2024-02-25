<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Data Category</h1>
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
                            <h3 class="card-title">Edit Data Category</h3>
                        </div>
            <div class="card-body">
            <!-- form start -->
            <form action="<?php echo site_url('category/edit_data')?>" method="post" class="form-group">
			    <input type="hidden" name="category_id" value="<?php echo $category->category_id; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="<?php echo $category->name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class=" ml-auto">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
