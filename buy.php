<?php include_once("./header.php"); ?>
<div class="payment-overlay purchase-modal-1">
    <div class="payment-modal" data-aos="fade-up">
        <div class="payment-header">
            <p>Continue to payment</p>
            <div class="cancel-btn close-btn">
                <img src="images/close.png" alt="" />
            </div>
        </div>
        <div class="payment-body">
            <form>
                <div class="payment-input-wrapper">
                    <label>Enter Email Address</label><br>
                    <input placeholder="email address" name="email" class="emailAddress" type="email" />
                </div>
            </form>
        </div>
        <div class="payment-footer">
            <button class="order_confirm proceed-btn buy-gift-btn"
                style="display: flex; flex-direction: row; gap: 15px; align-items: center; justify-content: center;"><img
                    width="18px" height="18px" src="images/paystackIcon.png" alt="" />pay with paystack</button>
            <button class="proceed-btn">pay with BTC</button>
        </div>
    </div>
</div>

<div class="product-detail-section">
    <div class="inner">
        <?php $currentGift = selectOne('gift_cards', ['id' => $_GET['id']]);

        ?>
        <div class="">
            <div class="left">
                <div data-aos="fade-up">
                    <div style="margin-bottom: 30px;">
                        <p><i class="mdi mdi-chevron-left"></i></p>
                        <p>Back</p>
                    </div>
                </div>
                <!-- <div data-aos="fade-down"> -->
                <img src="images/info-img.png" alt="" />
                <!-- </div> -->
            </div>
            <div class="right">
                <p class="card-title" style="display: flex;justify-content: flex-start; gap: 10px;"
                    data-aos="fade-down"><b>
                        <?php echo $currentGift['name']; ?>
                    </b> <span>
                        <?php echo $currentGift['category']; ?>
                    </span></p>
                <div class="detail">
                    <p style="display: flex;justify-content: flex-start; gap: 10px; margin:10px 0;"><img
                            src="images/envelope.png" alt="" /><span>Email Delivery</span></p>
                </div>
                <div class="detail">
                    <p style="display: flex;justify-content: flex-start; gap: 10px;"><img
                            src="images/clock-circular-outline(1).png" alt="" /><span>Est. Delivery
                            Time: 1-3 mins</span></p>
                </div>
                <p style="margin-top:20px; font-weight:700;">Select the amount you will like to purchase:</p>
                <input class="amount-input" value="100" style="display:none;" type="number" />
                <div class="available-price">
                    <button onclick="setAmount(20)" class="btn-20">$ 20</button>
                    <button onclick="setAmount(50)" class="btn-50">$ 50</button>
                    <button onclick="setAmount(100)" class="btn-100">$ 100</button>
                    <button onclick="setAmount(200)" class="btn-200">$ 200</button>
                    <button onclick="setAmount(500)" class="btn-500">$ 500</button>
                </div>
                <!-- <div class="switch-wrapper">
                     <label class="switch">
                     <input type="checkbox">
                     <span class="slider round"></span>
                   </label>
                     <p>Send as gift</p>
                 </div> -->
                <p>No. of digital cards</p>
                <div class="input-wrapper" data-aos="fade-up"><input type="number" onchange="updateFinalAmount()"
                        class="card_no" inputmode="decimal" type="number" pattern="[0-9]*(.[0-9]+)?" role="spinbutton"
                        aria-valuemin="1" aria-valuemax="20" aria-valuenow="1" aria-valuetext="1" autocomplete="off"
                        autocorrect="off" value="1">
                    <div aria-hidden="true">
                        <!-- <div role="button" tabindex="-1"><svg viewBox="0 0 24 24" focusable="false">
                                 <path fill="currentColor"
                                     d="M12.8,5.4c-0.377-0.504-1.223-0.504-1.6,0l-9,12c-0.228,0.303-0.264,0.708-0.095,1.047 C2.275,18.786,2.621,19,3,19h18c0.379,0,0.725-0.214,0.895-0.553c0.169-0.339,0.133-0.744-0.095-1.047L12.8,5.4z">
                                 </path>
                             </svg></div>
                         <div role="button" tabindex="-1" disabled="" aria-disabled="true">
                             <svg viewBox="0 0 24 24" focusable="false">
                                 <path fill="currentColor"
                                     d="M21,5H3C2.621,5,2.275,5.214,2.105,5.553C1.937,5.892,1.973,6.297,2.2,6.6l9,12 c0.188,0.252,0.485,0.4,0.8,0.4s0.611-0.148,0.8-0.4l9-12c0.228-0.303,0.264-0.708,0.095-1.047C21.725,5.214,21.379,5,21,5z">
                                 </path>
                             </svg>
                         </div> -->
                    </div>
                </div>
                <p style="display: flex; align-items: center; justify-content: flex-start;gap: 10px; font-size: 20px;">
                    Total Due: <span class="total_amount" style="font-weight: bolder; font-size: 25px;"></span>
                </p>

                <button type="" class="purchase-btn buy-gift-btn">
                    <p><i></i></p> Proceed to
                    Payment
                </button>

            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>