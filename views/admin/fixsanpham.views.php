<link rel="stylesheet" href="uploads/css/login.css">
<div id="container4">
  <div id="title-container4">
  <div class="d-flex justify-content-center" style="margin-top:100px;"><h1>SỬA SẢN PHẨM</h1></div>
  </div>
<form action="" method="post">
  <div class="form-outline mb-4">
    <img src="uploads/image/<?php echo $getAllSanPhamById['anhSanPham'];?>" alt="">
    <input type="file" id="" name="anhSanPham" value="" class="form-control" />
    <input type="text" id="" name="anhSanPham1" value="<?php echo $getAllSanPhamById['anhSanPham'];?>" class="form-control" hidden />
    <label for="">Ảnh</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" name="tenSanPham" value="<?php echo $getAllSanPhamById['tenSanPham'];?>" class="form-control" />
    <label for="">Tên sản phẩm</label>
  </div>
  <div class="form-outline mb-4">
    <select name="loaiSanPham" id="" class="form-control">
        <?php
            foreach ($getAllCate as $key ) {
                if($key['id_theloai']==$getAllSanPhamById['loaiSanPham']){
                    echo'<option value="'.$key['id_theloai'].'" selected>'.$key['tenTheLoai'].'</option>';
                }else{
                    echo'<option value="'.$key['id_theloai'].'">'.$key['tenTheLoai'].'</option>';
                }
            }
        ?>
    </select>
    <label for="">Thể Loại</label>
  </div>
  <div class="form-outline mb-4">
    <textarea name="moTa" id="" cols="30" rows="10" class="form-control"><?php echo $getAllSanPhamById['moTa'];?></textarea>
    <label for="">Mô tả</label>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="" name="gia" value="<?php echo $getAllSanPhamById['gia'];?>" class="form-control" />
    <label for="">Giá</label>
  </div>
  <label for=""><h3>Các size sản phẩm có và số lượng(Chưa tích là sản phẩm chưa có size đó)</h3></label>
  <div class="form-outline mb-4">
  <?php
      foreach ($getAllSize as $key1 ) {
        $check=true;
        foreach ($getAllSizeSanPham as $key2) {
          if($key1['id_kichco']===$key2['id_kichco']){
            echo'
            <label>'.$key1['tenKichCo'].'</label>
            <input class="form-check-input" name="sizee[]" type="checkbox" value="'.$key1['id_kichco'].'" id="" hidden checked>
            <input type="number" min="'.$key2['soLuong'].'" step="1" value="'.$key2['soLuong'].'" name="sizee'.$key1['id_kichco'].'"  />
            <br>
            <br>
            ';
            $check=false;
            break;
          }
        }
        if($check){
          echo'
          <label>'.$key1['tenKichCo'].'</label>
          <input class="form-check-input" name="size[]" type="checkbox" value="'.$key1['id_kichco'].'" id="">
          <input type="number" min="1" step="1" value="1" name="size'.$key1['id_kichco'].'"  />
          <br>
          <br>
          ';
        }
      }
    ?>
    
    
  </div>
  <button type="submit" name="btn-save-sanpham" class="btn btn-primary btn-block mb-4">Lưu</button>
</form>
</div>
