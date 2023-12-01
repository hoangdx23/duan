<link rel="stylesheet" href="css/home.css">


<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link href="assets/css/spct.css" rel="stylesheet" />
<div class="container">
    <section class="shopping-cart-area">
        <div class="container">
            <h3>Giỏ hàng</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart-form table-responsive">
                        <form action="#" method="post">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumb">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Unit price</th>
                                    </tr>
                                </thead>
                                <?php
                                if (isset($_SESSION["cart"])) {
                                    echo count($_SESSION["cart"])." sản phẩm";
                                } else {
                                    echo "0 sản phẩm";
                                }
                                ?>
                                <?php
                                    if (isset($_SESSION["cart"])) {
                                        if (count($_SESSION["cart"])!=0){
                                        foreach ($_SESSION["cart"] as $item) {
                                            extract($item);
                                            ?>
                                <tbody>
                                    <tr class="cart-product-item">
                                        <td class="product-remove">
                                            <a href="index.php?act=xoagiohang&&id=<?php echo $item['id']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product-thumb">
                                            <a href="#">
                                                <img src="./upload/<?php echo $item['img']; ?>" width="90" height="110" alt="Image-HasTech">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="single-product.html"><?php echo $item['names']; ?></a></h4>
                                        </td>
                                            <h4 class="title">
                                        <td class="product-price">
                                            <span class="price">£<?php echo $item['price']; ?></span>
                                        </td>
                                        <td class="product-price">
                                            <span class="price"><?php echo $item['soluongmua']; ?></span>
                                        </td>
                                        <!-- <td class="product-price">
                                            <span class="price"><?php echo $item['luotxem']; ?></span>
                                        </td> -->
                                        <td class="product-subtotal">
                                            <span class="price">£<?php echo $item['price']; ?></span>
                                        </td>
                                    </tr>
                                    <?php }  ?>



                                    <tr class="actions">
                                        <td class="border-0" colspan="6">
                                            <a href="index.php" class="btn-theme btn-flat">View Product</a>
                                            <a href="index.php?act=bill" class="btn-theme btn-flat">Continue Shopping</a>
                                        </td>
                                    </tr>
                                    <?php }else{?>
                                        <tr class="actions">
                                        <td class="border-0" colspan="6">
                                            <a href="index.php" class="btn-theme btn-flat">View Product</a>
                                        </td>
                                    </tr>
                                    <?php }  }?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-main.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>