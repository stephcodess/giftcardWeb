<?php include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,700;1,200&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="payment-overlay modal">
        <div class="payment-modal" data-aos="fade-up">
            <div class="payment-header">
                <p>PURCHASE BTC</p>
                <div class="cancel-btn cancel-btc">
                    <img src="images/close.png" alt="" />
                </div>
            </div>
            <div class="payment-body">
                <form id="orderForm" action="proceedPayment.php" method="POST">

                    <div class="payment-input-wrapper">
                        <label>Enter Email Address</label><br>
                        <input required placeholder="email address" name="email_address" class="email_address"
                            type="email" />
                    </div>
                    <p style="padding: 20px 10px;">Current Bitcoin Price:
                        <b><span></span></b>
                    </p>
                    <div class="payment-input-wrapper">
                        <label>Enter Amount($)</label>
                        <input required type="number" value="1" placeholder="Enter BTC amount to purchase." id="price"
                            name="amount" min="0" max="100000" step="0.01" class="desiredAmount" />

                        <p style="padding: 10px 10px;">you will get: <b>
                            <input name="btc_amount" disabled type="number" class="totalBtc" /></b> btc</p>
                    </div>
                    <div class="payment-input-wrapper">
                        <label>Enter Your BTC Address</label><br>
                        <input required placeholder="BTC wallet address" name="btc_address" class="btc_address"
                            type="text" />
                    </div>
                    <div class="payment-footer" style="display:flex; flex-direction: column;">
                        <p>Pay with either Bank Transfer or Bank deposit</p>
                        <div style="display:flex; flex-direction: row; justify-content: space-between;width:100%;">
                            <button class="order_confirm proceed-btn submitForm"
                                style="display: flex; flex-direction: row; gap: 15px; align-items: center; justify-content: center;"><img
                                    width="18px" height="18px" src="images/paystackIcon.png" alt="" />proceed</button>
                        </div>
                    </div>
                </form>
            </div>



            <div>
                <select name="currency" id="currency" style="display: none;">
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">POUND</option>
                </select>
            </div>

        </div>
    </div>

    <!-- header starts -->
    <header class="general-header">
        <div class="header-inner">
            <!-- <img src="images/FJXlogo.png" alt="all" /> -->
            <h2><a href="index.php"><img src="images/FJXlogo.png" alt="all" /></a></h2>
            <nav class="header-nav">
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contactUs.php">contact us</a></li>
                    <li><a>report</a></li>
                    <li><a href="#validate">Buy card</a></li>
                    <li><a href="#coin-section">Buy BTC</a></li>
                    <li><button class="hamburger"
                            style="height: 45px; border: none; background-color: rgba(186,1,253,0.1); width: 45px; border-radius: 50%;"><img
                                style="width: 20px; height: 20px;" src="images/hamburger.png" alt="" /></button></li>
                </ul>
            </nav>
        </div>
    </header>

    <!--  -->
    <!-- header ends -->
    <div class="header-sidebar">
        <div class="inner" data-aos="fade-left">
            <div class="toggle-close">
                <div class="close-sidebar-btn"><img width="50px" height="50px" src="images/close.png" alt="" /></div>
            </div><br>

            <div class="sidebar-menu">
                <p class=""><span class="">Quick</span> Links</p>
                <br><br>
                <div class="css-1f20h8m">
                    <p class="close-sidebar-btn"><a style="color:#000;" href="index.php"><img
                                src="images/home-icon-silhouette.png" alt="" />Home</a></p>
                </div>
                <div class="css-1f20h8m">
                    <p class="close-sidebar-btn"><a style="color:#000;" href="about.php"><img
                                src="images/exclamation-mark.png" alt="" />About</a>
                    </p>
                </div>
                <div class="css-1f20h8m">
                    <p class="close-sidebar-btn"><a style="color:#000;" href="contactUs.php"><img src="images/mail.png"
                                alt="" />Contact</a></p>
                </div>
                <div class="css-1f20h8m">
                    <p class="close-sidebar-btn"><a href="#validate"><img src="images/dollar-symbol.png" alt="" />Buy
                            card</a></p>
                </div>
                <div class="css-1f20h8m">
                    <p class="close-sidebar-btn"><a href="#coin-section"><img src="images/check.png" alt="" />Buy
                            BTC</a></p>
                </div>
            </div>
        </div>
    </div>