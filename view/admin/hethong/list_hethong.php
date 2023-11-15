<?php
include './boxleft.php';
?>
<div class="content-wrapper">


  <div class="card">
    <div class="card-header border-0">
      <h3>Danh sách hệ thống </h3>
      <div style="float: right;">
        <a href="index.php?act=add_hethong"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
      </div>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
          <tr>
            <th>ID hệ thống</th>
            <th>Tên cửa hàng</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Logo</th>
            <th>Fax</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>Thời trang giới trẻ</td>
            <td>0336274225</td>
            <td>baohtph41689@fpt.eu.vn</td>
            <td>Cầu Giấy Hà Nội</td>
            <td><img src="../../thu_vien/dist/img/user1-128x128.jpg" alt="" width="80px" height="80px"></td>
            <td>0243242342342342</td>
            <td>
              <a href="#" class="btn btn-primary" style="margin-right: 30px;">
                <i class="bi bi-pencil-fill"></i>
                Edit
              </a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card -->


</div>