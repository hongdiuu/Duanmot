<?php
include './boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="card card-primary" style="width: 70%; margin-left: 200px;">
      <div class="card-header">
        <h3 class="card-title">Thêm hệ thống</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên cửa hàng </label><br>
            <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="Tên của hàng">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Số điện thoại</label>
            <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="số điện thoại">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="mota" class="form-control" id="exampleInputPassword1" placeholder="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Địa chỉ</label>
            <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="địa chỉ">
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputFile">Logo</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Số fax</label>
            <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="fax">
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <input type="button" class="btn btn-primary" value="Thêm Mới">
          <button type="reset" class="btn btn-primary">Nhập lại</button>
          <a href="index.php?act=list_hethong"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>