
<?php
    if(is_array($listdh)){
        extract($listdh);
    }
?>
      <form action="index.php?act=updatehd" method="post" >
       <div class="title" ><h2 style="text-align: center;"> QUẢN LÍ ĐƠN HÀNG</h2></div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Mã đơn hàng</label>
      <input name="maloai"  type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
  </div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Tên Người Nhận</label>
  <input name="billname" value="<?php if(isset($bill_name)&&($bill_name!="")) echo $bill_name;?>" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Email</label>
  <input name="billemail" value="<?php if(isset($bill_email)&&($bill_email!="")) echo $bill_email;?>" type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Địa chỉ</label>
  <input name="billaddress" value="<?php if(isset($bill_address)&&($bill_address!="")) echo $bill_address;?>" type="text" class="form-control" placeholder="Địa chỉ" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Số điện thoại</label>
  <input name="billtel" value="<?php if(isset($bill_tel)&&($bill_tel!="")) echo $bill_tel;?>" type="text" class="form-control" placeholder="Số điện thoại" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Ảnh bill</label> <br/>
    <img src="../upload/<?php if(isset($bank_img)&&($bank_img!="")) echo $bank_img;?>" alt="Không tải được ảnh" width="200px">
</div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Trạng thái đơn hàng (0.Đơn hàng không hợp lệ 1.Chờ kiểm tra 2.Chờ xử lý 3.Đang giao 4.Đã giao hàng)</label>
  <input name="billstatus" value="<?php if(isset($bill_status)&&($bill_status!="")) echo $bill_status;?>" type="text" class="form-control" placeholder="Số điện thoại" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
  <input type="submit" name="capnhat" value="Update" style=" padding: 10px 20px; 
      font-size: 16px; 
      cursor: pointer; 
      background-color: #007BFF; 
      color: #fff; 
      border: none; 
      border-radius: 5px;">
  <a href="index.php?act=listbill">  <input type="button" value="list" style=" padding: 10px 20px; 
      font-size: 16px; 
      cursor: pointer; 
      background-color: #007BFF; 
      color: #fff; 
      border: none; 
      border-radius: 5px;"></a>
  <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
    ?>
</form>
 