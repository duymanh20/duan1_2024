<div class="d-flex justify-content-center" style="margin-top:100px;"><h1 >QUẢN LÝ ĐƠN HÀNG</h1></div>
<h2>CHỜ XÁC NHẬN</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ HÓA ĐƠN</th>
      <th scope="col">NGƯỜI MUA</th>
      <th scope="col">NGÀY MUA</th>
      <th scope="col">TỔNG HÓA ĐƠN</th>
      <th scope="col">TRẠNG THÁI ĐƠN HÀNG</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">ĐỊA CHỈ</th>
      <th scope="col">HỦY</th>
      <th scope="col">XEM</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllHoaDonNotConfirm as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['id_hoadon'].'</td>
      <td>'.$key['tenND'].'</td>
      <td>'.$key['ngayMua'].'</td>
      <td>'.number_format($key['tongDon'], 0, ',', '.') . ' đ'.'</td>
      <td>'.$key['tenTrangThai'].'</td>
      <td>'.$key['sDTDH'].'</td>
      <td>'.$key['diaCDH'].'</td>
      <td><a href="index.php?type=urorder&del='.$key['id_hoadon'].'">Hủy</a></td>
      <td><a href="index.php?type=urorder&type1=seeorder&id='.$key['id_hoadon'].'">Xem</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>

<h2>ĐÃ XÁC NHẬN</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ HÓA ĐƠN</th>
      <th scope="col">NGƯỜI MUA</th>
      <th scope="col">NGÀY MUA</th>
      <th scope="col">TỔNG HÓA ĐƠN</th>
      <th scope="col">TRẠNG THÁI ĐƠN HÀNG</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">ĐỊA CHỈ</th>
      <th scope="col">XEM</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllHoaDonConfirm as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['id_hoadon'].'</td>
      <td>'.$key['tenND'].'</td>
      <td>'.$key['ngayMua'].'</td>
      <td>'.number_format($key['tongDon'], 0, ',', '.') . ' đ'.'</td>
      <td>'.$key['tenTrangThai'].'</td>
      <td>'.$key['sDTDH'].'</td>
      <td>'.$key['diaCDH'].'</td>
      <td><a href="index.php?type=urorder&type1=seeorder&id='.$key['id_hoadon'].'">Xem</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>

<h2>ĐANG GIAO</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ HÓA ĐƠN</th>
      <th scope="col">NGƯỜI MUA</th>
      <th scope="col">NGÀY MUA</th>
      <th scope="col">TỔNG HÓA ĐƠN</th>
      <th scope="col">TRẠNG THÁI ĐƠN HÀNG</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">ĐỊA CHỈ</th>
      <th scope="col">XEM</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllHoaDonDeliByIdUser as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['id_hoadon'].'</td>
      <td>'.$key['tenND'].'</td>
      <td>'.$key['ngayMua'].'</td>
      <td>'.number_format($key['tongDon'], 0, ',', '.') . ' đ'.'</td>
      <td>'.$key['tenTrangThai'].'</td>
      <td>'.$key['sDTDH'].'</td>
      <td>'.$key['diaCDH'].'</td>
      <td><a href="index.php?type=urorder&type1=seeorder&id='.$key['id_hoadon'].'">Xem</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>

<h2>ĐÃ HOÀN THÀNH </h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ HÓA ĐƠN</th>
      <th scope="col">NGƯỜI MUA</th>
      <th scope="col">NGÀY MUA</th>
      <th scope="col">TỔNG HÓA ĐƠN</th>
      <th scope="col">TRẠNG THÁI ĐƠN HÀNG</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">ĐỊA CHỈ</th>
      <th scope="col">XEM</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllHoaDonDone as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['id_hoadon'].'</td>
      <td>'.$key['tenND'].'</td>
      <td>'.$key['ngayMua'].'</td>
      <td>'.number_format($key['tongDon'], 0, ',', '.') . ' đ'.'</td>
      <td>'.$key['tenTrangThai'].'</td>
      <td>'.$key['sDTDH'].'</td>
      <td>'.$key['diaCDH'].'</td>
      <td><a href="index.php?type=urorder&type1=seeorder&id='.$key['id_hoadon'].'">Xem</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>