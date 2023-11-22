<?php
include './boxleft.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="invoice p-3 mb-3" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
<?php
if (is_array($list_ctdh)) {
  extract($list_ctdh);
  echo 'sdfsdf'.$ten_sp;
}

?>
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>admin</strong><br>
                    Hà Nội Việt Nam<br>
                    Phone: 0336274225<br>
                    Email: baotheha@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong> Tên Khách hàng</strong><br>
                    Địa chỉ khách hàng<br>
                    Phone: 033333333333<br>
                    Email: abc@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <b>Mã HD:</b> 4F3S8J<br>
                  <b>Ngày mua:</b> 2/22/2014<br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Id hdct</th>
                      <th>Tên SP</th>
                      <th>Màu Sắc</th>
                      <th>Size</th>
                      <th>Số lượng</th>
                      <th>Đơn giá</th>
                      <th>Thành tiền</th>
                      <th>Trạng thái</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    
                     
                    <tr>
                     <td><?=$id_cthd?></td>
                     <td><?=$tensp?></td>
                     <td>'.$mau_sac.'</td>
                     <td>'.$size.'</td>
                     <td>'.$so_luong.'</td>
                     <td>'.$don_gia.'</td>
                     <td><?=$thanhtien?></td>
                     <td>'.$trang_thai.'</td>
                   </tr>

                  
                   
                
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../thu_vien/dist/img/credit/visa.png" alt="Visa">
                  <img src="../../thu_vien/dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../thu_vien/dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../thu_vien/dist/img/credit/paypal2.png" alt="Paypal">
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Thành Tiền:</th>
                        <td>$90</td>
                      </tr>
                      <tr>
                        <th>Khuyến mãi(10%)</th>
                        <td>$9</td>
                      </tr>
                      <tr>
                        <th>Thành tiền:</th>
                        <td>$81</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">

                <div class="col-12">
                <a href="index.php?act=list_don_hang"> <button type="submit" class="btn btn-success float-right">Danh Sách
                  </button></a>
                 
                 <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
                    Sửa Thông Tin
                  </button>
                </div>
              </div>
            </div>
</div>