<?php

function alluser($conn, $logemail){
    echo '<table border="1px">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Status</th>
                <th>Verification</th>
                <th>Update</th>
                <th>Delete</th>
                
            </tr>';

        $start = 0;
        $size = 2;

        $count = "SELECT count(*) as `nopage` from`accounts` ";
        $info = mysqli_query($conn, $count);
        $value = mysqli_fetch_assoc($info);

        $resultCount = number_format($value['nopage']);
        $pageno = $resultCount/$size;
        if(isset($_GET['alluser'])){
            $alluser = number_format($_GET['alluser']);
            $start = ($alluser-1)*$size;
        }
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

                   $tb = "<tr><td>". $fetch['firstName'].' '. $fetch['lastName'] ."</td><td>".$fetch['email']
                    ."</td><td>".$fetch['birthday'] ."</td><td>". $status."</td><td>". $verify."</td><td><button>Update</button></td></td><td><button>Delete</button></td></tr>";
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


function home(){

}

function newrequest(){

}

function statistics(){

}

function reqchng(){
    
}
?>
