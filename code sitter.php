
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['change'])){
        view($_POST['change'], $conn);
        }
        elseif(isset($_POST['delete'])){
            $delemail = $_POST['email'];
            $sql = "UPDATE `accounts` SET `status` = 0 WHERE `email` = '$delemail'";
        // $sql = "SELECT * FROM `accounts`";
            if(mysqli_query($conn, $sql)){
                unset($_POST['delete']);
                header("Location: admin.php?alluser");
                
            }
        }
    }


    else{
        
    $pa = $_GET['alluser'];
    // echo gettype($pa);
    // echo $pa;
    $getpage = (int) $pa;
    // echo $getpage;
    if($getpage == 0 ){
        $getpage = 1;
    }
    echo '<table border="1px" style="border-collapse: collapse; width: inherit;">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Status</th>
                <th>Verification</th>
                
                
            </tr>';

        $start = 0;
        $size = 2;

        $count = "SELECT count(*) as `nopage` from`accounts` ";
        $info = mysqli_query($conn, $count);
        $value = mysqli_fetch_assoc($info);

        $resultCount = number_format($value['nopage']);
        $pageno = $resultCount/$size;
        if(isset($getpage)){
            // echo $start;
            $start = ($getpage-1)*$size;
            
        }
        // echo $start .' ' . $size;
        $sql = "SELECT * FROM `accounts` LIMIT $start,$size";
        // $sql = "SELECT * FROM `accounts`";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);

            if(mysqli_num_rows($data)>0){
                while($fetch = mysqli_fetch_assoc($data)){
                    if($fetch['status'] == 1){
                        $status = 'Active';
                    }
                    if($fetch['iVerify'] == 1){
                        $verify = 'verified';
                    }
                    if($fetch['status'] == 0){
                        $status = 'Deleted';
                    }
                    if($fetch['iVerify'] == 0){
                        $verify = 'Not verified';
                    }

                    $fech_mail = $fetch['email'];
                    // echo $fech_mail;
                   $tb = "<tr><td>". $fetch['firstName'].' '. $fetch['lastName'] ."</td><td>".$fetch['email']
                    ."</td><td>".$fetch['birthday'] ."</td><td>". $status."</td><td>". $verify.
                    "</td><td>".'
                    <form action="" method="post">
                        <input type="hidden" name="change" id="progressvalue" value="'.$fech_mail.'">
                        <input type="submit"  value="View">
                    </form>
                    '."
                    </td><td>
                    <button>Update</button></td><td> ".'
                    <form action="" method="post">
                        <input type="hidden" name="email" id="progressvalue" value="'.$fech_mail.'">
                        <input type="hidden" name="delete" id="progressvalue" value="delete">
                        <button type="submit" name="delete" >delete</button>
                    </form>
                    '."</td></tr>";
                    echo   $tb;


                    

                }
            }
        }

        echo '</table>
            <table>
            <tr>';

            $x=1;
            $n = $resultCount%$size;
            if($n != 0){
                $a = 1;
            }
            else{
                $a = 0;
            }

            while($x<=$pageno+$a){
                $p ="<td><a href='./admin.php?alluser=$x'>$x</a></td>";
                echo $p;
                $x++;
            }
            echo '</tr>
            </table>';
    }

    

}