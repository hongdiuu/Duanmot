?php
include 'boxleft.php';
?>
<div class="content-wrapper">


    <div class="card">
        <div class="card-header border-0">
            <h3>Danh sách banner </h3>

        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ảnh banner</th>
                        <th>tên banner</th>
                        <th>mô tả</th>
                        <th>link</th>
                        <th>trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="../dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2" />
                        </td>
                        <td>anh1</td>
                        <td>anh banner</td>
                        <td><a href="#"> link baner </a> </td>

                        <td>mới</td>

                        <td>
                            <a href="#" class="btn btn-primary" style="margin-right: 30px;">
                                Sửa
                            </a>
                            <a href="#" class="btn btn-primary">
                                xóa
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div>
        <a href="index.php?act=add_bn"> <input type="button" class="btn btn-primary" value="Nhập thêm"></a>
    </div>
    <!-- /.card -->


</div>