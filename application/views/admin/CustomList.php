  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         List <?php echo ucfirst($jenis); ?>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">


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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Kancing Super</td>
                <td>image</td>
                <td>Kualitas Terbaik</td>
                <td>IDR 40.000</td>
                <td class='col-sm-2'>
                  <a class="btn btn-warning" href="">Edit</a>
                  <a class="btn btn-danger" href="">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
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
                  <input class="form-control" type="text" name="description" placeholder="Deskripsi Gambar">
                </div>
                <input type="hidden" name="category" value="product">
                <select class="form-control" name="category">
                  <option value="button">Button</option>
                  <option value="thread_color">Thread Color</option>
                  <option value="pocket_lining_fabric">Pocket Linning Fabric</option>
                  <option value="zipper">Zipper</option>
                  <option value="back_pocket">Back Pocket</option>
                </select>
                <div class="form-group">
                  <label class="control-label">Description</label>
                  <input class="form-control" type="text" name="description" placeholder="Deskripsi Gambar">
                </div>
                <div class="form-group">
                  <label class="control-label">Price</label>
                  <input class="form-control" type="text" name="description" placeholder="Deskripsi Gambar">
                </div>
                <div class="form-group">
                  <label class="control-label">Image Carousel</label>
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
        <!-- /.box-body -->

        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
