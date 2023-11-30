<?php
function insert_taikhoan($user, $pass, $email, $address, $tel) {
    $sql = "INSERT INTO user (user, pass, email, address, tel) VALUES ('$user', '$pass', '$email', '$address', '$tel')";
    pdo_execute($sql);
}
function checkuser($email,$pass){
    $sql="select*  from user where email='".$email."' AND pass='".$pass."'";
     $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$email,$address,$tel,$pass){
  $sql="update  user set  user='".$user."',email='".$email."',address='".$address."',tel='".$tel."',pass='".$pass."' where id=".$id;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from user order by id desc";
            $listdm = pdo_query($sql);
            return $listdm;
}
function delete_taikhoan($id){
    $sql="delete from user where id=".$id;
    pdo_query($sql);
}
function validate_taikhoan($user, $email, $address, $tel, $pass) {
    // Kiểm tra xem đã nhập đủ thông tin hay không
    if (empty($user) || empty($email) || empty($address) || empty($tel) || empty($pass)) {
        return 'Vui lòng điền đầy đủ thông tin.';
    }

    // Các kiểm tra hợp lệ khác có thể được thêm vào tại đây
    // Ví dụ: Kiểm tra định dạng email, độ dài mật khẩu, ...

    // Nếu không có lỗi, trả về null
    return null;
}
?>
