
<?php
    if(is_array($listdh)){
        extract($listdh);
    }
?>
      <form action="index.php?act=updatehd" method="post" >
       <div class="title" ><h2 style="text-align: center;"> QUẢN LÍ ĐƠN HÀNG</h2></div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Mã đơn hàng</label>
      <input name="maloai"  type="text" id="disabledTextInput" class="form-control" value="<?php if(isset($id)&&($id!="")) echo "H2T-".$id;?>" disabled>
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
  <label for="disabledTextInput" class="form-label">Tên Ngân hàng</label>
  <input name="bankname" value="<?php if(isset($bank_name)&&($bank_name!="")) echo $bank_name;?>" type="text" disabled class="form-control" placeholder="Bank name" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Tên tài khoản</label>
  <input name="bankuser" value="<?php if(isset($bank_user)&&($bank_user!="")) echo $bank_user;?>" type="text" disabled class="form-control" placeholder="Bank user" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Số tài khoản</label>
  <input name="banknumber" value="<?php if(isset($bank_number)&&($bank_number!="")) echo $bank_number;?>" disabled type="text" class="form-control" placeholder="Bank number" aria-label="Username" aria-describedby="addon-wrapping">
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
 