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
              <h3 class="card-title">Thêm user </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">user name </label>
                  <input type="text" name="id_dm" class="form-control" id="exampleInputEmail1" placeholder="id danh mục">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">password</label>
                  <input type="password" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
                </div>
               
                <div class="form-group">
                  <label for="exampleInputPassword1">Họ và tên</label>
                  <input type="text" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Ngày Sinh</label>
                  <input type="date" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Địa chỉ</label>
                  <input type="text" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Số Điện Thoại</label>
                  <input type="number" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục sản phẩm">
                </div>
                <div class="form-group">
                        <label>Chức vụ</label>
                        <select class="form-control">
                          <option>nhân viên</option>
                          <option>khách hàng</option>
                         <option>admin</option>
                        </select>
                      </div>
                
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <input type="button" class="btn btn-primary" value="Thêm Mới">
               
                <button type="reset" class="btn btn-primary">Nhập lại</button>
               <a href="index.php?act=list_kh">   <input type="button" class="btn btn-primary" value="Danh sách"></a>
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