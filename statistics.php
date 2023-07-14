<?php

use Razorpay\Api\Api;

    function gender($conn){
        $sql ="SELECT COUNT(gender) as male FROM `accounts` WHERE gender = 'male' and status = '1'";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);
            $info = mysqli_fetch_assoc($data);
            // $name = $info['account'];
            $male = $info['male'];
        }

        $sql ="SELECT COUNT(gender) as female FROM `accounts` WHERE gender = 'female' and status = '1'";
        if(mysqli_query($conn, $sql)){
            $data = mysqli_query($conn, $sql);
            $info = mysqli_fetch_assoc($data);
            // $name = $info['account'];
            $female = $info['female'];
        }
        echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load("current", {"packages":["corechart"]});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable([
              ["Gender", "Population"],
              ["Male",     '.$male.'],
              ["Female",      '.$female.'],
            
            ]);

            var options = {
              title: "Gender Demographics"
            };

            var chart = new google.visualization.PieChart(document.getElementById("piechart"));

            chart.draw(data, options);
          }
        </script>
        
        <div id="piechart" style="width: 900px; height: 500px; margin-left: 15%"></div>';
    }
    // $mname = $info['midName'];
    // $lname = $info['lastName'];
    // $bdaypage = $info['birthday'];
    // $gender = $info['gender'];
    // $phone = $info['phone'];
    // $email = $info['email'];
    // $nation = $info['nationality'];
    // $bplace = $info['birthPlace'];
    // $martial = $info['martial'];
    // $ffname = $info['fatherFName'];
    // $fmname = $info['fatherMName'];
    // $flname = $info['fatherLName'];
    // $mfname = $info['motherFName'];
    // $mmname = $info['motherMName'];
    // $mlname = $info['motherLName'];
    // $pfname = $info['partnerFName'];
    // $pmname = $info['partnerMName'];
    // $plname = $info['partnerLName'];
    // $mrid = $info['marraigeID'];
    // $pobox = $info['pobox'];
    // $pstreet = $info['pstreet'];
    // $pcity = $info['pcity'];
    // $pstate = $info['pstate'];
    // $homeno = $info['homeNo'];
    // $hstreet = $info['hstreet'];
    // $hcity = $info['hcity'];
    // $hstate = $info['hstate'];
    // $photo = $info['photo'];
    // $efname = $info['eFName'];
    // $emname = $info['eMName'];
    // $elname = $info['eLName'];
    // $ephone = $info['ePhone'];
    // $eemail = $info['eEmail'];
    // $eid = $info['eID'];
    // $idno = $info['IDNo'];
    // $bday = date("d-m-Y", strtotime($bdaypage));

    // echo $female;

    function job($conn){
?>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load("current", {"packages":["bar"]});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["Occupation", "Male", "Female"],

            <?php
              $sql = "SELECT DISTINCT(occupation) FROM `accounts`";
              if(mysqli_query($conn, $sql)){
                $data = mysqli_query($conn, $sql);
                // $info = mysqli_fetch_assoc($data);
                // $name = $info['account'];
                // $male = $info['male'];
                if(mysqli_num_rows($data)>0){
                  while($fetch = mysqli_fetch_assoc($data)){
                    $job = $fetch['occupation'];
        
                    $sql = "SELECT COUNT(occupation) as $job  FROM `accounts` WHERE occupation = '$job' and gender = 'male'";
                          if(mysqli_query($conn, $sql)){
                                $jdata = mysqli_query($conn, $sql);
                                $jinfom = mysqli_fetch_assoc($jdata);
                                // print_r($jinfo);
                                // echo $jinfo["$job"];
                                // echo '["'.$job.'", '.$jinfo["$job"].'],';
                          }
                          $sql = "SELECT COUNT(occupation) as $job  FROM `accounts` WHERE occupation = '$job' and gender = 'female'";
                          if(mysqli_query($conn, $sql)){
                                $jdata = mysqli_query($conn, $sql);
                                $jinfof = mysqli_fetch_assoc($jdata);
                                // print_r($jinfo);
                                // echo $jinfo["$job"];
                                
                          }
                          echo '["'.$job.'", '.$jinfom["$job"].', '.$jinfof["$job"].'],';
                  }
                }
              }
            
            ?>
            // ['2017', 1030, 540]
          ]);
  
          var options = {
            chart: {
              title: "Country wide Occupation Distribution",
              subtitle: "Male, Female, and Occpation",
            }
          };
  
          var chart = new google.charts.Bar(document.getElementById("columnchart_material"));
  
          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
      </script>
      <div id="columnchart_material" style="width: 800px; height: 500px;"></div>

      <?php

      

    }

    function order(){
      ?>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <div class="container" style="width: 100%;">
        <div class="row">		
          <div class="col-sm-12">
            <br><br>
            <div class="col-sm-4 col-lg-4 col-md-4" >
              <div class="thumbnail" id="pptype1">
                <img src="pay/image/images (3).jpg" id="passtype" alt="">
                <div class="caption">
                  <h4 class="pull-right">₹500</h4>
                  <h4><a href="#" id="p1">32 Pages</a></h4>
                  <p>The 32-page passport has 29 usable pages for visas and stamps.</p>
                </div>
                <form id="checkout-selection" action="./admin.php?statistics=pay" method="POST">		
                  <input type="hidden" name="item_name" value="32 Pages">
                  <input type="hidden" name="item_description" value="Passport">
                  <input type="hidden" name="item_number" value="3456">
                  <input type="hidden" name="amount" value="500">
                  <input type="hidden" name="address" value="Addis Ababa">
                  <input type="hidden" name="currency" value="INR">	
                  <input type="hidden" name="cust_name" value="Ene Yene">								
                  <input type="hidden" name="email" value="---EMAIL HERE---">	
                  <input type="hidden" name="contact" value="9999999999">								
                  <input type="submit" class="btn btn-primary" value="Order Now">					
                </form>						
              </div>
            </div>

            <!-- ======================================================== -->
            <div class="col-sm-4 col-lg-4 col-md-4" >
              <div class="thumbnail" id="pptype2">
                <img src="pay/image/download (1).jpg" id="passtype" alt="">
                <div class="caption">
                  <h4 class="pull-right">₹1000</h4>
                  <h4><a href="#">64 Pages</a></h4>
                  <p>The 64-page booklet passport has 61 usable pages for visas and stamps.</p>
                </div>
                <form id="checkout-selection" action="./admin.php?statistics=pay" method="POST">		
                  <input type="hidden" name="item_name" value="64 pages">
                  <input type="hidden" name="item_description" value="Passport">
                  <input type="hidden" name="item_number" value="3457">
                  <input type="hidden" name="amount" value="1000">
                  <input type="hidden" name="address" value="Addis Ababa">
                  <input type="hidden" name="currency" value="INR">	
                  <input type="hidden" name="cust_name" value="Ene Yene">								
                  <input type="hidden" name="email" value="---EMAIL HERE---">	
                  <input type="hidden" name="contact" value="9999999999">								
                  <input type="submit" class="btn btn-primary" value="Order Now">					
                </form>						
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4">
              <div class="thumbnail" id="pptype3">
                <img src="./pay/image/img_11441.jpg" id="passtype" alt="">
                <div class="caption">
                  <h4 class="pull-right">₹3000</h4>
                  <h4><a href="#" id="p3">128 Pages</a></h4>
                  <p>The 128-page booklet passport has 125 usable pages for visas and stamps.</p>
                </div>
                <form id="checkout-selection" action="./admin.php?statistics=pay" method="POST">		
                  <input type="hidden" name="item_name" value="128 Pages">
                  <input type="hidden" name="item_description" value="Passport">
                  <input type="hidden" name="item_number" value="3458">
                  <input type="hidden" name="amount" value="3000">
                  <input type="hidden" name="address" value="Addis Ababa">
                  <input type="hidden" name="currency" value="INR">	
                  <input type="hidden" name="cust_name" value="Ene Yene">								
                  <input type="hidden" name="email" value="---EMAIL HERE---">	
                  <input type="hidden" name="contact" value="9999999999">								
                  <input type="submit" class="btn btn-primary" value="Order Now">					
                </form>						
              </div>
            </div>
          </div>
        </div>	
      </div>
    <?php
    }
    

function pay($recive){
  include('./pay/header.php');
      
      require('./pay/config.php');
      require('./pay/razorpay-php/Razorpay.php');


      $api = new Api($keyId, $keySecret);
      $orderData = [
          'receipt'         => 3456,
          'amount'          => $recive['amount'] * 100,
          'currency'        => $recive['currency'],
          'payment_capture' => 1
      ];
      $razorpayOrder = $api->order->create($orderData);
      $razorpayOrderId = $razorpayOrder['id'];
      $_SESSION['razorpay_order_id'] = $razorpayOrderId;
      $displayAmount = $amount = $orderData['amount'];
      if ($displayCurrency !== 'INR') {
          $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
          $exchange = json_decode(file_get_contents($url), true);

          $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
      }
      $data = [
          "key"               => $keyId,
          "amount"            => $amount,
          "name"              => $recive['item_name'],
          "description"       => $recive['item_description'],
          "image"             => "",
          "prefill"           => [
          "name"              => $recive['cust_name'],
          "email"             => $recive['email'],
          "contact"           => $recive['contact'],
          ],
          "notes"             => [
          "address"           => $recive['address'],
          "merchant_order_id" => "12312321",
          ],
          "theme"             => [
          "color"             => "#F37254"
          ],
          "order_id"          => $razorpayOrderId,
      ];

      if ($displayCurrency !== 'INR')
      {
          $data['display_currency']  = $displayCurrency;
          $data['display_amount']    = $displayAmount;
      }

      $json = json_encode($data);


      require("./pay/checkout/manual.php");
      ?>
      </div>
      <?php
      }

  function verify($pay){
      // $_SESSION['ooooo'] = 123;
      if($pay['payment'] == 1){
        ?>
        <div class="seccess" id="success" style="width: 100%; text-align: center;">
            <img src="./image/gif/done.gif" alt="" style="border-radius: 50%;">
        </div>
        <?php
    
    }
    else{
        echo 'wait';
    }
  }
      
       
?>

