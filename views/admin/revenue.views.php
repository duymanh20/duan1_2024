<div class="d-flex justify-content-center" style="margin-top:100px;"><h1>QUẢN LÝ DOANH THU <?php echo $ngayXem;?></h1></div>
<div class="p-4">
                <div class="row">

                  <div class="col-2">
                    <form action="index.php?type=revenue" method="POST">
                    <label for="">Chọn theo tháng/năm:</label>
                      <div class="row mt-2">
                        <div class="col-6">
                          <select name="month" class="form-control  mx-auto" id="table-search">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <select name="year" class="form-control  mx-auto" id="table-search">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="monthyear-btn" class="btn btn-primary mt-2">Tìm</button>
                    </form>
                  </div>
                  <div class="col-2"></div>
                  <div class="col-3">
                    <form action="index.php?type=revenue" method="POST">
                      <label for="">Chọn theo quý/năm:</label>
                      <div class="row mt-2">
                        <div class="col-6">
                          <select name="quy" class="form-control  mx-auto" id="table-search">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <select name="year" class="form-control  mx-auto" id="table-search">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="quy-btn" class="btn btn-primary mt-2">Tìm</button>
                    </form>
                  </div>
                  <div class="col-2"></div>
                  <div class="col-3">
                    <form action="index.php?type=revenue" method="POST">
                      <label for="">Chọn theo năm:</label>
                      <div class="row mt-2">
                        <div class="col-12">
                          <select name="year" class="form-control  mx-auto" id="table-search">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="year-btn" class="btn btn-primary mt-2">Tìm</button>
                    </form>
                  </div>
                </div>
              </div>
<h2>DOANH THU</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">SỐ ĐƠN</th>
      <th scope="col">TỔNG DOANH THU</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($getRevenue as $key) {
            echo'
            <tr>
      <td>'.$key['soDon'].'</td>
      <td>'.$key['tongTien'].'</td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>


<h2>TOP 5 SẢN PHẨM CÓ DOANH THU CAO NHẤT</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">ẢNH</th>
      <th scope="col">TÊN SẢN PHẨM</th>
      <th scope="col">SỐ SẢN PHẨM BÁN RA</th>
      <th scope="col">TỔNG DOANH THU</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getRevenueTop5 as $key) {
            echo'
            <tr>
    <th scope="row">'.$i++.'</th>
    <td><img src="uploads/image/'.$key['anhSanPham'].'" width="50" /></td>
      <td>'.$key['tenSanPham'].'</td>
      <td>'.$key['soSach'].'</td>
      <td>'.$key['tongTien'].'</td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>