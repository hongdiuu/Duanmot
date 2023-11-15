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
              <h3 class="card-title">Thêm khuyến mai</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">mã khuyến mại</label>
                  <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="Mã khuyến mãi">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên khuyến mại </label><br>
                  <input type="text" name="id_bn" class="form-control" id="exampleInputPassword1" placeholder="tên khuyến mãi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phần trăm khuyến mại</label>
                  <input type="number" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="% khuyến mãi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ngày bắt đầu</label>
                  <input type="date" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="ngày bắt đầu">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ngày kết thúc</label>
                  <input type="date" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="ngày kết thúc">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">trạng thái</label>
                  <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="trang thai">
                </div>
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>



                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="button" class="btn btn-primary" value="Thêm Mới">
                  <button type="reset" class="btn btn-primary">Nhập lại</button>
                  <a href="index.php?act=list_khuyenmai"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
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