<section class=" gradient-custom  mb-5" style="margin-top:100px">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Giỏ hàng - <?php echo count($_SESSION['checkout']);?> sản phẩm</h5>
          </div>
          <div class="card-body">
            <?php
            // print_r($_SESSION['cart']);
            $i=0;
            $tong=0;
              foreach ($_SESSION['checkout'] as $key) {
                $tong=$key['total']+$tong;
                $getSizeById=getSizeById($key['size']);
                echo'
                <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="uploads/image/'.$key['anhSanPham'].'"
                    class="w-100" alt="" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>'.$key['tenSanPham'].'</strong></p>
                <p>Size: '.$getSizeById['tenKichCo'].'</p>
                <p>Đơn giá: '.number_format($key['gia'], 0, ',', '.').' đ</p>
                <a href="index.php?type=cart&del='.$i.'">Xóa</a>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">

                  <div class="form-outline">
                    <input id="form1" name="quantity" value="'.$key['quantity'].'" type="number" readonly class="form-control" />
                  </div>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>'.number_format($key['total'], 0, ',', '.').' đ</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <hr class="my-4" />
                ';
                $i++;
              }
            ?>
           


            
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Dự kiến thời gian giao</strong></p>
            <p class="mb-0">4 to 7 days</p>
          </div>
        </div>
        
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Tạm tính</h5>
          </div>
              <form action="" method="post">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Tổng đơn hàng
                <span><?php echo number_format($tong, 0, ',', '.').'đ'; ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Phí giao hàng
                <span>Miễn Phí</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Tổng cộng</strong>
                  <strong>
                    <p class="mb-0">(Đã bao gồm phí VAT)</p>
                  </strong>
                </div>
                <span><strong><?php echo number_format($tong, 0, ',', '.').'đ'; ?></strong></span>
              </li>
              <?php
              if(isset($_SESSION['user'])){
                echo'
                <li
                class="list-group-item  border-0 px-0 pb-0">
                <label>Số điện thoại</label>
                <br>
                <input id="" name="sDTDH" value="'.$_SESSION['user']['soDT'].'" type="text"  class="form-control" />
              </li>
              <li
                class="list-group-item  border-0 px-0 pb-0">
                <label>Địa chỉ</label>
                <br>
                <input id="" name="diaCDH" value="'.$_SESSION['user']['diaChi'].'" type="text"  class="form-control" />
              </li>
                ';
              }
              ?>
              
              
            </ul>
            
<input type="number" value="<?php echo $tong; ?>" name="tongDon" hidden>
<br>
<?php
  if($tong>0 ){
    if (isset($_SESSION['user'])){
      echo'<button type="submit" name="cart-btn" class="btn btn-primary btn-lg btn-block">
      Thanh toán
    </button>';
    }else{
      echo'<button type="button" class="btn btn-primary btn-lg btn-block" disabled>
    Đăng nhập để thanh toán
  </button>';
    }
    
  }else{
    echo'<button type="button" class="btn btn-primary btn-lg btn-block" disabled>
    Thanh Toán
  </button>';
  }
?>
</form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>