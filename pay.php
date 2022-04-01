<style>
    input{
        border: 3px solid blue; 
        background-color: blue;
        color:white;
        width:auto;
        height:3rem
    }
</style>
<?php

 $apiKey = "rzp_live_1EIwA681AeHUoD";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="your_orders.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="<?php echo $_GET['amount'] * 100;?>" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay Now"
    data-name="Hunger Harvest"
    data-description="Food Order"
    data-image="https://traidev.com/img/web-desgin-development.png"
    data-prefill.name=""
    data-prefill.email=""
    data-prefill.contact=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>