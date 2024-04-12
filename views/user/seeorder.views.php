<div class="d-flex justify-content-center" style="margin-top:100px;"><h1 >CHI TIẾT ĐƠN HÀNG <?php echo $_GET['id'];?></h1></div>
<table class="table table-bordered table-striped" style="margin-bottom:300px;">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">ẢNH</th>
      <th scope="col">TÊN SẢN PHẨM</th>
      <th scope="col">SỐ LƯỢNG</th>
      <th scope="col">SIZE</th>
      <th scope="col">ĐƠN GIÁ</th>
      <th scope="col">TỔNG</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getChiTietHoaDon as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td><img src="uploads/image/'.$key['anhSanPham'].'" width="50" /></td>
      <td>'.$key['tenSanPham'].'</td>
      <td>'.$key['soLuong1'].'</td>
      <td>'.$key['kichCo1'].'</td>
      <td>'.$key['gia'].'</td>
      <td>'.$key['tongCT'].'</td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>