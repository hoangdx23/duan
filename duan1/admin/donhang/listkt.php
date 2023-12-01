
<div class="table" >
        <div class="title" ><h2 style="text-align: center;"> Kiểm tra đơn hàng</h2></div>
        <!--
        search input 

       table 
    -->
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Khách hàng</th>
                <th scope="col">Số lượng hàng</th>
                <th scope="col">Giá trị đơn hàng</th>
                <th scope="col">Tình trạng đơn hàng</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
            <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $kh=$bill["bill_name"].'
                            <br> '.$bill["bill_email"].'
                            <br> '.$bill["bill_address"].'
                            <br> '.$bill["bill_tel"];
                            $countsp=loadall_cart_count($bill["id"]);
                            $ttdh=get_ttdh($bill["bill_status"]);
                            $suadh= "index.php?act=suadh&id=".$id;
                            $xoadh= "index.php?act=xoadh&id=".$id;
                            echo  '<tr>
                            <td>H2T-'.$bill['id'].'</td>
                            <td>'.$kh.' </td>
                            <td>'.$countsp.' </td>
                            <td>'.$bill['total'].' </td>
                            <td>'.$ttdh.' </td>
                            <td> 
                            <a href="'.$xoadh.'"><button type="button" class="btn btn-danger">Delete</button></a>
                            <a href="'.$suadh.'"><button type="button" class="btn btn-success">Edit</button></a></td>
                        </tr>';
                        }   
                    ?>
            </tbody>
          </table>
    </div>
</div>
</div>
</body>
</html>
       