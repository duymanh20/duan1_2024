<div class="d-flex justify-content-center" style="margin-top:100px;"><h1>QUẢN LÝ SẢN PHẨM</h1></div>
<a href="index.php?type=sanpham&type1=addsanpham">THÊM SẢN PHẨM</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">ẢNH</th>
      <th scope="col">TÊN SẢN PHẨM</th>
      <th scope="col">LOẠI SẢN PHẨM</th>
      <th scope="col">GIÁ</th>
      <th scope="col">SỬA</th>
      <th scope="col">XÓA</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllSanPham as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td><img src="uploads/image/'.$key['anhSanPham'].'" width="50" /></td>
      <td>'.$key['tenSanPham'].'</td>
      <td>'.$key['tenTheLoai'].'</td>
      <td>'.number_format($key['gia'], 0, ',', '.') . ' đ'.'</td>
      <td><a href="index.php?type=sanpham&type1=fixsanpham&id='.$key['id_sanpham'].'">Sửa</a></td>
      <td><a href="index.php?type=sanpham&del='.$key['id_sanpham'].'">Xóa</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>