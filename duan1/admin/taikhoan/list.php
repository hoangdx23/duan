<!-- taikhoan/list.php -->
<div class="table">    
    <div class="title" ><h2 style="text-align: center;"> QUẢN LÍ TÀI KHOẢN</h2></div>
    <a href="index.php?act=addtk"><button type="button" class="btn btn-primary" style="margin-left: 80px; margin-top:30px;">Add</button></a>  
    <table class="table">        
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($listtk as $taikhoan) {
                    extract($taikhoan);
                    $lockUnlockUrl = $is_locked ? "index.php?act=unlock&id=".$id : "index.php?act=lock&id=".$id;
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $tel; ?></td>
                    <td><?php echo $is_locked ? 'Khóa' : 'Mở'; ?></td>
                    <td>
                        <a href="<?php echo $lockUnlockUrl; ?>">
                            <button type="button" class="btn btn-<?php echo $is_locked ? 'success' : 'danger'; ?>">
                                <?php echo $is_locked ? 'Mở' : 'Khóa'; ?>
                            </button>
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
