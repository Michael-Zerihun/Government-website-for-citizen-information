
<div class="razor" style="width: 40%; margin: auto; text-align: center;">
    <div class="img"><img src="./image/Background/razor.png" alt="" style="width: 70%;"></div>
    <button id="rzp-button1" class="btn btn-primary">Pay with Razorpay</button>
</div>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="pay/verify.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
var options = <?php echo $json?>;
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};
options.theme.image_padding = false;
options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    escape: true,
    backdropclose: false
};
var rzp = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>