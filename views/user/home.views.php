<link rel="stylesheet" href="uploads/css/listproduct.css">
<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Featured Product</h3>
										<h2>Popular Products</h2>
								</div>
						</div>
				</div>
				<?php
					$i=1;
					foreach ($getTop6SanPham as $key ) {
						$check=false;
						if($i==1){
							echo'<div class="row">';
						}
						if($i%4==1){
							echo'<div class="row">';
						}
						echo'
						<style>
						.section-products #product-'.$i.' .part-1::before {
							background: url("uploads/image/'.$key['anhSanPham'].'") no-repeat center;
							background-size: cover;
								transition: all 0.3s;
						}
						</style>
						<div class="col-md-6 col-lg-4 col-xl-3">
						<div id="product-'.$i.'" class="single-product">
								<div class="part-1" style="">
										<ul>
												<li ><a href="index.php?type=home&idtocart='.$key['id_sanpham'].'" class="d-grid justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
												<path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
												<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
											  </svg></a></li>
												<li><a href="" class="d-grid justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
												  </svg></a></li>
												<li><a href="index.php?type=detail&id='.$key['id_sanpham'].'" class="d-grid justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
													<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
													<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
												  </svg></a></li>
												<li><a href="" class="d-grid justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
												  </svg></a></li>
										</ul>
								</div>
								<div class="part-2">
										<h3 class="product-title">'.$key['tenSanPham'].'</h3>
										<h4 class="product-old-price">'.number_format($key['gia']*1.2, 0, ',', '.') . ' đ'.'</h4>
										<h4 class="product-price text-danger">'.number_format($key['gia'], 0, ',', '.') . ' đ'.'</h4>
										<br>
										<h4 class="product-price">'.$key['luotXem'].' Views</h4>
								</div>
						</div>
				</div>
						';
						if($i%4==0){
							echo'</div>';
							$check=true;
						}
						$i++;
					}
					if($check){
						echo'</div>';
					}
				?>
				
						
				</div>
</section>