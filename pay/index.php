<?php 
include('./header.php');
?>
<title>Marwadi Univesity : Demo Razorpay Payment Gateway Integration in PHP</title>
<?php include('./container.php');?>
<div class="container">
	<div class="row">		
		<div class="col-sm-12">	
			<h2>Example: Razorpay Payment Gateway Integration in PHP</h2>
			<br><br>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="prod.gif" alt="">
					<div class="caption">
						<h4 class="pull-right">₹999.99</h4>
						<h4><a href="#">Laptop</a></h4>
						<p>See more examples like this at <a target="_blank" href="https://www.phpzag.com/">phpzag</a>.</p>
					</div>
					<form id="checkout-selection" action="pay.php" method="POST">		
						<input type="hidden" name="item_name" value="Laptop">
						<input type="hidden" name="item_description" value="HP Pavilion">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount" value="999.99">
						<input type="hidden" name="address" value="Addis Ababa">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="Ene Yene">								
						<input type="hidden" name="email" value="---EMAIL HERE---">	
						<input type="hidden" name="contact" value="9999999999">								
						<input type="submit" class="btn btn-primary" value="Buy Now">					
					</form>						
				</div>
			</div>

			<!-- ======================================================== -->
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="prod.gif" alt="">
					<div class="caption">
						<h4 class="pull-right">₹25</h4>
						<h4><a href="#">Mouse</a></h4>
						<p>See more examples like this at <a target="_blank" href="https://www.phpzag.com/">phpzag</a>.</p>
					</div>
					<form id="checkout-selection" action="pay.php" method="POST">		
						<input type="hidden" name="item_name" value="Mouse">
						<input type="hidden" name="item_description" value="Logitech">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount" value="25">
						<input type="hidden" name="address" value="Addis Ababa">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="Ene Yene">								
						<input type="hidden" name="email" value="---EMAIL HERE---">	
						<input type="hidden" name="contact" value="9999999999">								
						<input type="submit" class="btn btn-primary" value="Buy Now">					
					</form>						
				</div>
			</div>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="prod.gif" alt="">
					<div class="caption">
						<h4 class="pull-right">₹10</h4>
						<h4><a href="#">Deskpad</a></h4>
						<p>See more examples like this at <a target="_blank" href="https://www.phpzag.com/">phpzag</a>.</p>
					</div>
					<form id="checkout-selection" action="pay.php" method="POST">		
						<input type="hidden" name="item_name" value="Deskpad">
						<input type="hidden" name="item_description" value="ASUS">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount" value="10">
						<input type="hidden" name="address" value="Addis Ababa">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="Ene Yene">								
						<input type="hidden" name="email" value="---EMAIL HERE---">	
						<input type="hidden" name="contact" value="9999999999">								
						<input type="submit" class="btn btn-primary" value="Buy Now">					
					</form>						
				</div>
			</div>
		</div>
	</div>	
</div>
<?php include('./footer.php');?>