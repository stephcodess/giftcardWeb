<?php
include "functions.php";
if (isset($_POST['email_address']) && isset($_POST['amount']) && isset($_POST['btc_address'])) {
    // $existing_order = selectOne('bitcoin_purchases',['email_address'=>$_POST['email_address']]);
    // echo count($existing_order);
    // if (count($existing_order)> 0){
    //     $updateuser = update('bitcoin_purchases', $existing_order['id'],['btc_address'=>$_POST['btc_address'],'amount_of_btc'=>$_POST['amount']]);
    // }else{
    $order = create('bitcoin_purchases', [
        "email_address " => $_POST['email_address'],
        "amount_of_btc" => $_POST['btc_amount'],
        "btc_address" => $_POST['btc_address'],
        "price_of_btc" => $_POST['amount'],
        "paid_status" => 0
    ]);
    // }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<style>
    section {
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.03);
        display: flex;
        align-items: center;
    }

    section .payment-inner {
        width: 50%;
        margin: auto;
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        background-color: #fff;
        padding-top: 20px;
        border-radius: 10px;
        text-align: center;
        padding: 15px;

    }

    section .payment-inner button {
        width: 400px;
        height: 45px;
        color: #fff;
        font-weight: bold;
        display: flex;
        flex-direction: row;
        margin: auto;
        align-items: center;
        justify-content: center;
        background-color: black;
        border-radius: 5px;
    }

    .account-details {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 20px;
    }
</style>

<body>
    <section>
        <div class="payment-inner">

            <div>
                <h2>Continue to payment</h2><br>
                <span>We accept both bank transfer and bank deposit.</span>
            </div>
            <div class="account-details">
                <h4>Order details:</h4>
                <span><b>Btc Address: </b>
                    <?php echo $_POST["btc_address"]; ?>
                </span>
                <span><b>Amount(btc)</b>
                    <?php echo $_POST["btc_amount"]; ?>
                </span>
                <span><b>Btc Price</b>
                    <?php echo $_POST["amount"]; ?>
                </span>
            </div>

            <div class="account-details">
                <h4> Send $
                    <?php echo $_POST["amount"]; ?> to the bank account below.
                </h4>
                <span><b>Account Number: </b>02355363636</span>
                <span><b>Account name:</b> Elon Musk</span>
                <span><b>Bank Name:</b> Gtbank Nigeria LTD.</span>
            </div>

            <button class="paid-btn">I have paid.</button>
            <button onclick="window.history.back()">Go back</button>
            <div>
    </section>

    <script>
        var btn = document.querySelector(".paid-btn");
        btn.addEventListener('click', (e) => {
            e.target.innerText = "your Order will start processing!";
            window.location.href = "index.php";
        })
    </script>
</body>


</html>