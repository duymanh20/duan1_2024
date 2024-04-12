<link rel="stylesheet" href="uploads/css/login.css">
<div id="container4">
  <div id="title-container4">
  <div class="d-flex justify-content-center" style="margin-top:100px;"><h1>THÊM SẢN PHẨM</h1></div>
  </div>
<form action="" method="post">
  <div class="form-outline mb-4">
    <input type="file" id="" name="anhSanPham" value="" class="form-control" required/>
    <label for="">Ảnh</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" name="tenSanPham" value="" class="form-control" required />
    <label for="">Tên sản phẩm</label>
  </div>
  <div class="form-outline mb-4">
    <select name="loaiSanPham" id="" class="form-control" required>
        <?php
            foreach ($getAllCate as $key ) {
                    echo'<option value="'.$key['id_theloai'].'">'.$key['tenTheLoai'].'</option>';
            }
        ?>
    </select>
    <label for="">Thể Loại</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="" name="moTa" value="" class="form-control" required />
    <label for="">Mô tả</label>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="" name="gia" value="" class="form-control" required />
    <label for="">Giá</label>
  </div>
  <label for=""><h3>Các size sản phẩm có và số lượng</h3></label>
  <div class="form-outline mb-4">
    <?php
    $i=0;
      foreach ($getAllSize as $key ) {
        echo'
        <label>'.$key['tenKichCo'].'</label>
        <input class="form-check-input" name="size[]" type="checkbox" value="'.$key['id_kichco'].'" id="">
        <input type="number" min="1" step="1" value="1" name="size'.$key['id_kichco'].'"  />
        <br>
        ';
        $i++;
      }
    ?>
    
    
  </div>
  <button type="submit" name="btn-add-sanpham" class="btn btn-primary btn-block mb-4">Thêm</button>
</form>
</div>
