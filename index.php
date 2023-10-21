<?php include_once("header.php"); ?>

<!-- hero banner starts -->
<section class="hero-section">
    <div class="left">
        <h2 data-aos="fade-down" style="transition: 1s ease-in-out;"><img src="images/FJXlogo.png" alt="" /></h2>
        <p class="sub-header" style="font-weight: light; font-size: 20px;">purchase and validate giftcards</p>
        <p>xyrjxtLorem ipsum dolor sit amet consectetur adipisicing elit. veniam excepturi eligendi, amet magnam!</p>
        <br>
        <div style="border-left: 10px solid #000;">
            <p style="padding-left: 10px;">what will you do?</p>
        </div>
        <br>
        <div class="hero-actions">
            <button class="buy-btn">Buy card</button>
            <button class="validate-btn btn">Buy Btc</button>
        </div>
    </div>
    <div class="right">
        <div class="content" data-aos="fade-down">
            <span>You Can </span><span><b>Recieve.</b></span>
        </div>
    </div>
</section>
<!-- hero banner ends -->
<!-- info section -->
<section class="info-section">
    <div class="info-banner" data-aos="fade-right" style="transition: 1.5s ease-in-out;">
        <img src="images/info-img.png" alt="info bg" />
    </div>
    <div class="info-alert">
        <h2 style="font-weight: 500;transition: 2s ease-in-out;" data-aos="fade-down"><b>Why</b> choose us??</h2><br>
        <span data-aos="fade-down" style="transition: 2s ease-in-out; opacity: 0.4;">We are your No.1 Stop for
            purchasing and validating digital gift cards.</span>
        <p data-aos="fade-up" style="transition: 2s ease-in-out;">We offer a wide selection of gift cards from
            popular brands across various categories, including fashion,
            dining, entertainment, and more</p>

        <div class="info-count" data-aos="fade-up" style="transition: 2s ease-in-out;">
            <div>
                <h1 style="color: rgba(134,0,255,255);">12K</h1>
                <p>Daily validation</p>
            </div>
            <div>
                <h1 style="color: rgba(134,0,255,255);">12K</h1>
                <p>Daily validation</p>
            </div>
        </div>
    </div>
</section>
<!-- info section ends -->
<!-- purchase section -->
<section class="purchase-section" id="validate">
    <div class="purchase-header">
        <h3 style="font-weight: 400;" data-aos="fade-down"><b>purchase</b> or Validate</h3>
        <p data-aos="fade-up">Select a gift card to purchase or validate, if you can't find your preferred card,
            kindly select the "other cards" option.</p>
    </div>
    <div style="display: flex; width:100%; flex-direction: row; justify-content: space-between; flex-wrap: wrap;">
        <?php $all_gifts = selectAll('gift_cards');
        foreach ($all_gifts as $key => $gift) {
            ?>
            <div class="gift-box" data-aos="fade-up">
                <img src="images/ebay.png" alt="" />
                <div class="gift-box-action">
                    <h4>
                        <?php echo $gift['name'] ?>
                    </h4>
                    <button style="display: flex; align-items: center; justify-content: center; font-weight: 700;"
                        onclick="window.location.href='buy.php?id=<?php echo $gift['id']; ?>'"><img
                            style="height:16px; width: 16px;" src="images/dollar-symbol.png" alt="" />
                        <span>purchase</span></button>
                    <!-- <button>button 2</button> -->
                </div>
            </div>
        <?php } ?>

    </div>
    <button class="validate-btn">Validate Other cards</button>
</section>
<section class="coin-section" id="coin-section">
    <div class="container">
        <div class="header">
            <h3 style="font-weight: 700;transition: 2s ease-in-out;" data-aos="fade-down">Purchase coin</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam harum dolorem eveniet est! Molestiae beatae eum sint cupiditate ullam at inventore sequi nulla voluptatum incidunt magni ducimus, ratione eos aut.</p>
        </div>
        
        <table style="width: 100%; margin-top: 20px">
            <tr>
                <th>S/N</th>
                <th>coin</th>
                <th>price</th>
                <th>trade</th>
            </tr>
           
                    <tr>
                        <td>1</td>
                        <td style="display: flex; flex-direction: row; justify-content: center;align-items: center; gap: 10px;"><img src="images/bitcoin.png" alt="" /><span>Bitcoin</span></td>
                        <td>#42222224444</td>
                        <td><button class="purchase-btn btn" type="button">Buy</button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td style="display: flex; flex-direction: row; justify-content: center;align-items: center; gap: 10px;"><img src="images/etherium.png" alt="" /><span>Bitcoin</span></td>
                        <td>#42222224444</td>
                        <td><button>Buy</button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td style="display: flex; flex-direction: row; justify-content: center;align-items: center; gap: 10px;"><img src="images/cardano.png" alt="" /><span>Bitcoin</span></td>
                        <td>#42222224444</td>
                        <td><button>Buy</button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td style="display: flex; flex-direction: row; justify-content: center;align-items: center; gap: 10px;"><img src="images/solana.png" alt="" /><span>Bitcoin</span></td>
                        <td>#42222224444</td>
                        <td><button>Buy</button></td>
                    </tr>

        </table>
    </div>
<br>
</section>
<!-- testimonial section -->
<!-- <section class="testimonial-section">
        <div class="testimonial-inner">
            <h2 data-aos="fade-down">Customers feedbacks</h2>
            <p data-aos="fade-up">what users of gifty are saying</p>
            <div class="testimonial">
                <div>
                    <span>22</span>
                </div>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates voluptatibus ab, suscipit
                    eveniet qui iure fugiat ex quaerat cumque alias necessitatibus illo molestiae dignissimos velit nemo
                    ea eum reiciendis quidem.
                </p>
            </div>
        </div>
    </section> -->
<!-- testimonial section ends -->
<!-- frequently asked questions -->
<section class="faq-section">
    <div class="faq-header">
        <h1 class="faq-heading" data-aos="fade-down"><b>Frequently</b> Asked Question</h1>
        <span data-aos="fade-up">(FAQ's)</span><br><br><br>
    </div>
    <section class="faq-container" data-aos="fade-up">
        <div class="faq-one">
            <!-- faq question -->
            <h1 class="faq-page">What is an FAQ Page?</h1>

            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-two">
            <!-- faq question -->
            <h1 class="faq-page">Why do you need an FAQ page?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-two">
            <!-- faq question -->
            <h1 class="faq-page">Why do you need an FAQ page?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-three">
            <!-- faq question -->
            <h1 class="faq-page">Does it improves the user experience of a website?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-three">
            <!-- faq question -->
            <h1 class="faq-page">Does it improves the user experience of a website?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-three">
            <!-- faq question -->
            <h1 class="faq-page">Does it improves the user experience of a website?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-three">
            <!-- faq question -->
            <h1 class="faq-page">Does it improves the user experience of a website?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-three">
            <!-- faq question -->
            <h1 class="faq-page">Does it improves the user experience of a website?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                    necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                    aperiam.
                    Perspiciatis, porro!</p>
            </div>
        </div>
    </section>

</section>

<?php include "footer.php"; ?>