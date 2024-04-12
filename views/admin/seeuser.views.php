<h1>CHI TIẾT NGƯỜI DÙNG</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SỐ ĐƠN ĐÃ MUA</th>
      <th scope="col">SỐ TIỀN ĐÃ CHI TIÊU</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getRevenueUser as $key) {
            echo'
            <tr>
      <td>'.$key['soDon'].'</td>
      <td>'.$key['tongDon1'].'</td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>