  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
            Add
          </button>
        </div>
        <div class="box-body">

          <table id="tbl" class="table table-responsive">
            <thead>
              <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Picture</th>
                <th>Description</th>
                <th>Price</th>

              </tr>
             </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Kancing Super</td>
                <td>image</td>
                <td>Jeans Bagus </td>
                <td>IDR 40.000</td>
              </tr>
            </tbody>
          </table>

          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Data</h4>
                </div>
                <div class="modal-body">
                  <?php echo form_open_multipart('Admin/Add');?>
                  <div class="form-group">
                    <label class="control-label">Nama</label>
                    <input class="form-control" type="text" name="custom_name" placeholder="Nama Gambar">
                  </div>
                  <input type="hidden" name="category" value="product">
                  <div class="form-group">
                    <label class="control-label">Description</label>
                    <input class="form-control" type="text" name="description" placeholder="Deskripsi Gambar">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Price</label>
                    <input class="form-control" type="text" name="price" placeholder="Harga">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Image</label>
                    <input class="form-control" name="gambar" type="file">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

        </div>
        <!-- /.box-body -->

        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
