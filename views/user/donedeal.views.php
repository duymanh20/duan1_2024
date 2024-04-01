<div class="container" style="margin-bottom:200px;margin-top:100px;">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <div class="card">
          <div class="card-body text-center">
           
            <?php
              if(isset($_SESSION['noleft'])){
                if(count($_SESSION['noleft'])>0){
                  echo'
                  <h2 class="card-title">Xin lỗi bạn!</h2>
              <p class="card-text">Đơn hàng của bạn chưa được hoàn thành !</p>
              <p class="card-text">Bởi có 1 số sản phẩm sẽ không được cho vào đơn hàng vì số lượng không đủ!</p>
                  ';
                  if(count($_SESSION['noleft'])>0){
                    foreach ($_SESSION['noleft'] as $key ) {
                      $getSizeById=getSizeById($key['size']);
                      echo'<p class="card-text"><strong>Không đủ <span class="text-danger">'.$key['quantity'].'</span> đôi '.$key['tenSanPham'].' <span class="text-danger">size '.$getSizeById['tenKichCo'].'</span></strong></p>';
                    }
                  }
                }else{
                  echo'
                  <h2 class="card-title">Cảm ơn bạn!</h2>
                  <p class="card-text">Đơn hàng của bạn đã được hoàn thành.</p>
                  ';
                }
              }else{
                echo'
                <h2 class="card-title">Cảm ơn bạn!</h2>
                <p class="card-text">Đơn hàng của bạn đã được hoàn thành.</p>
                ';
              }
            ?>
            <a href="index.php?type=home" class="btn btn-primary">Continue Shopping</a>
          </div>
        </div>
      </div>
    </div>
  </div>
