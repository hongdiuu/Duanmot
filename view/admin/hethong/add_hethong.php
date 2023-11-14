<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
              <h3 class="card-title">Thêm hệ thống</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">tên của hàng </label><br>
                  <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="Tên của hàng">

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">số điện thoại</label>
                  <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="số điện thoại">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">email</label>
                  <input type="text" name="mota" class="form-control" id="exampleInputPassword1" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">địa chỉ</label>
                  <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="địa chỉ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">logo</label>
                  <input type="file" name="trangthai" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">fax</label>
                  <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="fax">
                </div>
               
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <input type="button" class="btn btn-primary" value="Thêm Mới">
               
                <button type="reset" class="btn btn-primary">Nhập lại</button>
               <a href="index.php?act=list_ht">   <input type="button" class="btn btn-primary" value="Danh sách"></a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>