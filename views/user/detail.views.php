<link rel="stylesheet" href="uploads/css/size.css">
<div id="container3" style="margin-top:100px">
    <div id="detail-container3" class="d-flex justify-content-center">
        <h1>CHI TIẾT SẢN PHẨM</h1>
    </div>
    <form action="" method="post">
  <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class=" rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
              <img style="max-width: 100%; max-height: 100vh;" class="rounded-4 fit" src="uploads/image/<?php echo $getSanPhamById['anhSanPham'];?>" />
            </a>
          </div>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
            <?php echo $getSanPhamById['tenSanPham'];?>
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
            </div>
  
            <div class="mb-3">
              <span class="h5"><?php echo number_format($getSanPhamById['gia'], 0, ',', '.') . ' đ';?></span>
              <span class="text-muted">/sản phẩm</span>
            </div>
  
            <p>
            <?php echo $getSanPhamById['moTa'];?>
            </p>
  
            <div class="row">
              <dt class="col-3">Loại sản phẩm:</dt>
              <dd class="col-9"><h6><?php echo $getSanPhamById['tenTheLoai'];?></h6></dd>
  
            </div>
            <div class="row">
              <dt class="col-1">Size:</dt>
              <dd class="col-11">
                <?php
                  foreach ($getAllSizeSanPham as $key) {
                    if($key['soLuong']>0){
                      echo'<label class="custom-radio"><input type="radio" name="size" value="'.$key['id_kichco'].'" required><span>'.$key['tenKichCo'].'</span></label>
                            <input type="number" class="form-group" value="'.$key['soLuong'].'" name="size'.$key['id_kichco'].'" id="" hidden>
                ';
                    }else{
                      echo'<label class="custom-radio"><input type="radio" name="size" value="'.$key['id_kichco'].'" disabled><span class="empty" style="text-decoration: line-through;text-decoration-color: red;">'.$key['tenKichCo'].'</span></label>';
                    }
                  }
                ?>
              </dd>
  
            </div>
  
            <hr />
  
            <div class="row mb-4">
              <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <label for="">Số lượng:</label>
              <input type="number" class="form-group w-50" value="1" min="1" step="1" name="quantity" id="customRange3">
              <input type="text" class="form-group" value="<?php echo $getSanPhamById['id_sanpham'];?>" name="id_sanpham" id="" hidden>
                <input type="text" class="form-group" value="<?php echo $getSanPhamById['anhSanPham'];?>" name="anhSanPham" id="" hidden>
                <input type="text" class="form-group" value="<?php echo $getSanPhamById['tenSanPham'];?>" name="tenSanPham" id="" hidden>
                <input type="number" class="form-group" value="<?php echo $getSanPhamById['gia'];?>" name="gia" id="" hidden>
              </div>
            </div>
            <button type="submit" name="detail-btn" class="btn btn-danger">THÊM VÀO GIỎ HÀNG</button>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->
  </form>
</div>
<br>
<script src="uploads/js/quantity.js"></script>
  <!-- content -->
  
  
  
  