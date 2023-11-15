<?php
include './boxleft.php';
?>
<div class="content-wrapper">


  <div class="card">
    <div class="card-header border-0">
      <h3>Danh sách khuyến mại </h3>
      <div style="float: right;">
        <a href="index.php?act=add_khuyenmai"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
      </div>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>tên sản phẩm</th>
            <th>Mã Khuyến Mại</th>
            <th>Tên Khuyến Mại</th>
            <th>Phần Trăm %</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
            <th>Trạng thái </th>
            <th>Mô Tả</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>sp01</td>
            <td>km0001</td>
            <td>khuyến mại 20-11</td>
            <td>30</td>
            <td>15/11/2023</td>
            <td>23/11/2023</td>
            <td>hiển thị</td>
            <td>chi ân ngày nhà giáo Việt Nam</td>
            <td>
              <a href="#" class="btn btn-primary" style="margin-right: 30px;">
                <i class="bi bi-pencil-fill"></i>
                Edit
              </a>
              <a href="#" class="btn btn-primary">
                <i class="bi bi-trash3-fill"></i>
                Xóa
              </a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card -->


</div>