<h1>QUẢN LÝ NGƯỜI DÙNG</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">TÊN NGƯỜI DÙNG</th>
      <th scope="col">EMAIL</th>
      <th scope="col">HỌ VÀ TÊN</th>
      <th scope="col">NGÀY SINH</th>
      <th scope="col">ĐỊA CHỈ</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">XÓA</th>
      <th scope="col">XEM</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllUser as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['tenND'].'</td>
      <td>'.$key['email'].'</td>
      <td>'.$key['hoVT'].'</td>
      <td>'.$key['ngaySinh'].'</td>
      <td>'.$key['diaChi'].'</td>
      <td>'.$key['soDT'].'</td>
      <td><a href="index.php?type=user&del='.$key['id_nguoidung'].'">Xóa</a></td>
      <td><a href="index.php?type=user&type1=seeuser&id='.$key['id_nguoidung'].'">Xem</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>