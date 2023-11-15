<?php
include './boxleft.php';
?>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header border-0">
            <h3>Danh sách tin tức </h3>
            <div style="float: right;">
                <a href="index.php?act=add_news"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID News</th>
                        <th>Tiêu đề</th>
                        <th>Hình Ảnh</th>
                        <th>Ngày Đăng</th>
                        <th>Trạng Thái</th>
                        <th>Nội Dung</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Tin tức thời trang 24h</td>
                        <td><img src="../../thu_vien/dist/img/user1-128x128.jpg" alt="" width="80px" height="80px"></td>
                        <td>23/11/2023</td>
                        <td>Hiểm thị</td>
                        <td>sdfhjsadfjkasfhjkashfkjasfjajsdfasmfnjasfjkafjk</td>
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