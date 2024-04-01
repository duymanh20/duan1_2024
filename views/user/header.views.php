<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: lightgrey">
    <div class="container-fluid">
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?type=home">Home</a>
        </li>
        <?php
          if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
            echo'
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cá nhân
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?type=urorder">Đơn hàng của bạn</a></li>
          </ul>
        </li>
            <li class="nav-item" >
            <a class="nav-link" href="" id="">'.$_SESSION['user']['tenND'].'</a>
          </li>
          <li class="nav-item" style="display: flex; justify-content: center; align-items:center;">
              <a class="nav-link" href="index.php?logout=1" id="">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
            </svg></a>
            </li>
            ';
          }else{
            echo'
            <li class="nav-item" >
            <a class="nav-link" href="index.php?type=login" id="">Đăng nhập</a>
          </li>
          <li class="nav-item" >
              <a class="nav-link" href="index.php?type=regis" id="">Đăng ký</a>
            </li>
            ';
          }
        ?>
            
            <li class="nav-item" >
              <a class="nav-link" href="index.php?type=wishlist" id="">Wishlist</a>
            </li>
            <li class="nav-item" style="display: flex; justify-content: center; align-items:center;" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg>
<?php
if(isset($_SESSION['cart'])){
echo'<span class="badge bg-danger rounded-circle">'.count($_SESSION['cart']).'</span>';
}
?>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="index.php?type=cart" id="">Thanh toán</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <?php
  if(isset($_GET['type'])){
    if($_GET['type']!=='login' && $_GET['type']!=='urorder' && $_GET['type']!=='donedeal' && $_GET['type']!=='regis' && $_GET['type']!=='cart' && $_GET['type']!=='updateinfor' && $_GET['type']!=='changepass' && $_GET['type']!=='contact' && $_GET['type']!=='detail'  && $_GET['type']!=='wishlist'){
      echo'
      <div
  class="p-5 text-center bg-image"
  style="
    background-image: url(\'https://tse3.mm.bing.net/th?id=OIP.vqlTjRt0Poz1vARTsuDx5wHaCP&pid=Api&P=0&h=180\');
    height: 400px;
    margin-top: 58px;
  "
>
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3">TRANG SNEAKER</h1>
        <h4 class="mb-3">2024</h4>
        ';
        foreach ($getAllCate as $key ) {
          echo'
        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="index.php?type=cate&id='.$key['id_theloai'].'" role="button"
        >'.$key['tenTheLoai'].'</a
        >';
        }
        echo'
      </div>
    </div>
  </div>
</div>
      ';
    }
  }else{
    echo'
    <div
  class="p-5 text-center bg-image"
  style="
    background-image: url(\'https://tse3.mm.bing.net/th?id=OIP.vqlTjRt0Poz1vARTsuDx5wHaCP&pid=Api&P=0&h=180\');
    height: 400px;
    margin-top: 58px;
  "
>
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3">TRANG SNEAKER</h1>
        <h4 class="mb-3">2024</h4>';
        foreach ($getAllCate as $key ) {
          echo'
        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="index.php?type=cate&id='.$key['id_theloai'].'" role="button"
        >'.$key['tenTheLoai'].'</a
        >';
        }
        echo'
      </div>
    </div>
  </div>
</div>
    ';
  }
  ?>
  
  <!-- Background image -->
</header>
