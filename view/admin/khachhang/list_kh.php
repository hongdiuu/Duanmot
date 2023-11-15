<?php
include 'boxleft.php';
?>
<div class="content-wrapper">


    <div class="card">
        <div class="card-header border-0">
            <h3>Danh sách sản phẩm biến thể </h3>
            <div style="float: right;">
    <a href="index.php?act=add_kh"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
  </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID user</th>
                        <th>User name</th>
                        <th>password</th>
                        <th>Họ và Tên</th>
                        <th>Ngày Sinh</th>
                        <th>Địa Chỉ</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Chức Vụ</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>baotheha</td>
                        <td>1234</td>
                        <td>Hà Thế Bảo</td>
                        <td>16/05/2004</td>
                        <td>Trịnh Văn Bô Cầu Giấy </td>
                        <td>baotheha@gmail.com</td>
                        <td>0806679721</td>
                        <td>Admin</td>
                        <td>
                            <a href="#" class="btn btn-primary" style="margin-right: 30px;">
                                <i class="bi bi-pencil-fill"></i>
                                Edit
                            </a>
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-trash3-fill"></i>
                                xóa
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->


</div>