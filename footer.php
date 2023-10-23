<footer>
    <div class="column-1">
        <div class="footer-child child-1">
            <div class="footer-Logo">
                <img src="images/FJXlogo.png" alt="yvuydv" />

            </div>
            <p>Purchase digital cards with instant email delivery. we email all kinds of cards internationally. We
                accept flutterwave and credit cards mode of payment. We are available 24/7.</p>
            <div>
                <input type="text" placeholder="Enter your email to subscribe to our newsletter" />
            </div>
            <button>subscribe</button>
        </div>
        <div class="footer-child child-2">
            <div>
                <h4>Explore</h4>
                <nav>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contactUs.php">Contact</a></li>
                        <li>FAQs</li>
                        <li>Privacy Policy</li>
                    </ul>
                </nav>
            </div>
            <div>
                <h4>Actions</h4>
                <nav>
                    <ul>
                        <li>Buy Card</li>
                        <li class="purchase-btn btn"><a>Buy BTC</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer-child child-3">
            <div class="social-contacts">
                <button><img src="images/twitter.png" alt="twitter" /></button>
                <button><img src="images/whatsapp.png" alt="whatsapp" /></button>
                <button><img src="images/facebook(1).png" alt="facebook" /></button>
            </div>
        </div>
    </div>
    <div class="column-2">
        <div class="horizontal-divider">
        </div>
        <div class="footer-text">
            <h3>@2023 Gifty</h3>
            <div>
                <a href="">Terms & Condition</a>
                <a href=""> All right reserved</a>
            </div>
        </div>
    </div>
</footer>
<script src="main.js"></script>
<script>
    let hamburgerBtn = document.querySelector(".hamburger");
    let sideBarCloseBtn = document.querySelectorAll(".close-sidebar-btn");
    let sidebar = document.querySelector(".header-sidebar");
    var sidebarOpen = false;

    Array.from(sideBarCloseBtn).forEach(function (element) {
        element.addEventListener("click", () => {
            if (sidebarOpen) {
                sidebar.style.display = "none";
                sidebarOpen = false
            }
        })
    }
    )
    
    hamburgerBtn.addEventListener("click", () => {
        if (!sidebarOpen) {
            sidebar.style.display = "flex";
            sidebarOpen = true;
        }
    })


</script>

<script>
    let closePaymentBtn = document.querySelector(".cancel-btc");
    let openPaymentBtn = document.querySelectorAll(".btn");
    let paymentModal = document.querySelector(".modal");
    var paymentopen = false;


    closePaymentBtn.addEventListener("click", () => {
        if (paymentopen) {
            paymentModal.style.display = "none";
            paymentopen = false
        }

    })

    Array.from(openPaymentBtn).forEach(function (element) {

        element.addEventListener("click", () => {
            if (!paymentopen) {
                document.querySelector(".header-sidebar").style.display = "none";
                paymentModal.style.display = "flex";
                paymentopen = true;
            }
        })
    });

    var btn = document.querySelector("button");
    var price = document.querySelector("span");
    var rate = 0;
    var updTime = document.querySelector("#updTime");
    var currency = document.querySelector("#currency");
    var symbol = currency.value;
    var url = "https://api.coindesk.com/v1/bpi/currentprice.json";

    function getPrice() {
        var url = "https://api.coindesk.com/v1/bpi/currentprice.json";
        var currency = document.querySelector("#currency");
        var symbol = currency.value;
        fetch(url)
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                console.log(data);
                price.innerHTML = data.bpi[symbol].symbol + `${data.bpi[symbol].rate_float}`;
                rate = data.bpi[symbol].rate_float;
                btcValue.innerHTML = parseInt(inputAmount.value) / rate ? parseInt(inputAmount.value) / rate : 0;
            });
    }

    getPrice();

    var inputAmount = document.querySelector('.desiredAmount');
    var btcValue = document.querySelector('.totalBtc');
    btcValue.value = parseInt(inputAmount.value) / parseFloat(rate) ? parseInt(inputAmount.value) / parseFloat(rate) : 0;
    // while processing
    inputAmount.addEventListener('input', function () {
        btcValue.value = parseInt(inputAmount.value) / parseFloat(rate) ? parseInt(inputAmount.value) / parseFloat(rate) : 0;
    });

</script>
<script>
    var button = document.querySelector('.submitForm');
    var formElement = document.getElementById("orderForm");
    // var container= document.querySelector('')
    // button.addEventListener('click', place_order);
    

    function place_order(e) {
        e.preventDefault();
        console.log("pressed");
        // var amount = 200;
        // var id = 4;

        // // var productPrice = productType.options[productType.selectedIndex].value;

        // var emailAddress = document.querySelector(".email_address").value;
        // var handler = PaystackPop.setup({
        //     key: 'pk_live_3f69d3dec1d889c80bec047a1ecbefae19f8b36e',
        //     email: emailAddress,
        //     amount: parseFloat(document.querySelector(".desiredAmount").value) * 100,
        //     product: id,
        //     currency: "NGN",
        //     callback: function (response) {
        //         // window.location.href="success.php?order=<?php echo $user['user_id']; ?>";
        //         alert('success. transaction ref is ' + response.reference);
        //     },
        //     onClose: function () {
        //         alert('window closed');
        //     }
        // });

        // handler.openIframe();


    }
</script>



<script>
    function setAmount(val) {
        var price = document.querySelector(".amount-input");
        document.querySelector(`.btn-${price.value}`).style.backgroundColor = "rgba(255,255,255,255)";
        document.querySelector(`.btn-${price.value}`).style.color = "rgba(0,0,0,255)";
        document.querySelector(`.btn-${val}`).style.backgroundColor = "rgba(134,0,255,255)";
        document.querySelector(`.btn-${val}`).style.color = "rgba(255,255,255,255)";
        document.querySelector(`.btn-${val}`).style.transition = "0.3s ease-in-out";
        price.value = val;
        updateFinalAmount();

    }

    setAmount(100);
    function updateFinalAmount() {
        document.querySelector('.total_amount').textContent = '$' + parseInt(document.querySelector(".amount-input").value) * parseInt(document.querySelector('.card_no').value);
    }

    updateFinalAmount();
</script>
<script>
    var gift_btn = document.querySelector('.buy-gift-btn');
    // if (gift_btn){
    gift_btn.addEventListener('click', place_order_for_gift);
    // }

    function place_order_for_gift(e) {
        e.preventDefault();

        var id = 4;

        // var productPrice = productType.options[productType.selectedIndex].value;

        var emailAddress = document.querySelector(".emailAddress").value;
        var handler = PaystackPop.setup({
            key: 'pk_live_3f69d3dec1d889c80bec047a1ecbefae19f8b36e',
            email: emailAddress,
            amount: parseFloat(parseInt(document.querySelector(".amount-input").value) * parseInt(document.querySelector('.card_no').value)) * 100,
            product: id,
            currency: "NGN",
            callback: function (response) {
                alert('success. transaction ref is ' + response.reference);
            },
            onClose: function () {
                alert('window closed');
            }
        });

        handler.openIframe();
    }
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>