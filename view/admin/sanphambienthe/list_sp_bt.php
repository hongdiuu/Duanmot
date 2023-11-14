<?php
include 'boxleft.php';
?>
<div class="content-wrapper">


    <div class="card">
        <div class="card-header border-0">
            <h3>Danh sách sản phẩm biến thể </h3>
            <div style="float: right;">
    <a href="index.php?act=add_sp"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
  </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>mã biến thể</th>
                        <th>Tên sản phẩm </th>
                        <th>Kích thước</th>
                        <th>Màu sắc </th>
                        <th>Số Lượng </th>
                        <th>Giá</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>váy nam</td>
                        <td>XL</td>
                        <td>Đỏ</td>
                        <td>20 chiếc</td>
                        <td>$30</td>
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