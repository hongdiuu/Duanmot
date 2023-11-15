<?php
include './boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
                <h3 class="card-title">Thêm banner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh banner </label><br>
                        <input  type="file" name="id_bn"  >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tên banner</label>
                        <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="Tên banner">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">link</label>
                        <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="link">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="button" class="btn btn-primary" value="Thêm Mới">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=list_baner"> <input type="button" class="btn btn-primary" value="Danh sách"></a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->

</div>