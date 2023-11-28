<link rel="stylesheet" href="css/home.css">


<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link href="assets/css/spct.css" rel="stylesheet" />


  <link rel="stylesheet" href="css/hoadon.css">

<header>
<?php
    if(isset($bill)&&(is_array($bill))){
        extract($bill);
    }
?>

<h1>Hóa đơn bán hàng</h1>
</header>
<main>
<table>
  <tr>
    <th>Số hóa đơn</th>
    <td>H2T-<?=$bill['id'];?></td>
  </tr>
  <tr>
    <th>Ngày bán</th>
    <td><?=$bill['ngaydathang'];?></td>
  </tr>
  <tr>
    <th>Khách hàng</th>
    <td><?=$bill['bill_name'];?></td>
  </tr>
  <tr>
    <th>Địa chỉ</th>
    <td><?=$bill['bill_address'];?></td>
  </tr>
  <tr>
    <th>Số Điện Thoại</th>
    <td><?=$bill['bill_tel'];?></td>
  </tr>
  <tr>
    <th>Thành tiền</th>
    <td><?=$bill['total'];?></td>
  </tr>
</table>

<h3>Chi tiết giỏ hàng</h3>



</main>
</body>
<div class=button>
<div class="back"> <a href="index.php?act=home" class="btn-theme">Trở về trang chủ</a></div>

<div class="next" ><a href="index.php?act=giohang" class="btn-theme">Giỏ hàng</a></div>
</div>
<footer>
<p>Cảm ơn quý khách đã mua hàng!</p>
</footer>