<link rel="stylesheet" href="uploads/css/wishlist.css">
<div class="wrapper" style="margin-top:100px;margin-bottom:200px;">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex flex-column">
                <div class="h3">My lists</div>
                <div class="text-uppercase"><?php echo count($_SESSION['cart']); ?> sublists</div>
            </div>
        </div>
        <div id="table" class="bg-white rounded">
            <div class="table-responsive">
                <table class="table activitites">
                    <thead >
                        <?php
                            if(count($_SESSION['cart'])>0){
                                echo'
                                <tr>
                                <th scope="col" class="text-uppercase">Image</th>
                                <th scope="col" class="text-uppercase ">Name</th>
                                <th scope="col" class="text-uppercase ">Size</th>
                                <th scope="col" class="text-uppercase">Quantity</th>
                                <th scope="col" class="text-uppercase">price each</th>
                                <th scope="col" class="text-uppercase">total</th>
                            </tr>
                                ';
                            }else{
                                echo'
                                    <tr class="d-flex justify-content-center">
                                    <td><h1 class="text-danger">YOUR WISHLIST IS EMPTY!</h1></td>
                                    </tr>
                                ';
                            }
                        ?>
                        
                    </thead>
                    <tbody>
                        <?php
                            $tong=0;
                            if(count($_SESSION['cart'])>0){
                                $i=0;
                                foreach ($_SESSION['cart'] as $key) {
                                    $tong=$tong+$key['total'];
                                    $getSizeById=getSizeById($key['size']);
                                    echo'
                                    <tr>
                                    <td class="item">
                                            <img src="uploads/image/'.$key['anhSanPham'].'"
                                                alt="" >
                                    </td>
                                    <td>'.$key['tenSanPham'].'</td>
                                    <td>'.$getSizeById['tenKichCo'].'</td>
                                    <td>'.$key['quantity'].'</td>
                                    <td class="d-flex flex-column"><span class="red">'.number_format($key['gia'], 0, ',', '.') . ' đ'.'</span>
                                        <del class="cross">'.number_format($key['gia']*1.2, 0, ',', '.') . ' đ'.'</del>
                                    </td>
                                    <td class="font-weight-bold">
                                    '.number_format($key['total'], 0, ',', '.') . ' đ'.'
                                        <div class="close"><a style="text-decoration:none;" href="index.php?type=wishlist&del='.$i.'">&times;</a></div>
                                        <form action="" method="POST">
                                        <button value="'.$i.'" class="d-flex justify-content-end btn border" name="checkout-btn" type="submit">+ Add to checkout</button>
                                        </form>
                                    </td>
                                </tr>
                                    ';
                                    $i++;
                                }
                            }
                        ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="text-muted">
                
            </div>
            <div class="d-flex flex-column justify-content-end align-items-end">
                <div class="d-flex px-3 pr-md-5 py-1 subtotal">
                    <div class="px-4">Subtotal</div>
                    <div class="h5 font-weight-bold px-md-2"><?php echo number_format($tong, 0, ',', '.');?> đ</div>
                </div>
            </div>
        </div>
    </div>