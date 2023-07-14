<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = '<form action="../admin.php?statistics=pay" method="post">
                <input type="hidden" name="payment" value="1">
                <input type="submit" value="verified" id="verifypay">
            </form>';
}
else
{
    $html = '<form action="../admin.php?statistics=pay" method="post">
                <input type="hidden" name="payment" value="0">
                <input type="submit" value="verified" id="verifypay">
            </form>';
}

echo $html;
?>
<script>
    document.getElementById("verifypay").click();
</script>
