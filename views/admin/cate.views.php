<div class="d-flex justify-content-center" style="margin-top:100px;"><h1>QUẢN LÝ THỂ LOẠI</h1></div>
<a href="index.php?type=cate&type1=addcate">THÊM DANH MỤC</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">TÊN THỂ LOẠI</th>
      <th scope="col">SỬA</th>
      <th scope="col">XÓA</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getAllCate as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['tenTheLoai'].'</td>
      <td><a href="index.php?type=cate&type1=fixcate&id='.$key['id_theloai'].'">Sửa</a></td>
      <td><a href="index.php?type=cate&del='.$key['id_theloai'].'">Xóa</a></td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>