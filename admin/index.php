<?php include_once("header.php"); ?>

<div class="payment-overlay category-overlay">
    <div class="payment-modal" data-aos="fade-up">
        <div class="payment-header">
            <h3>Create A New Category For Gift Cards</h3>
            <div class="cancel-btn">
                <img src="../images/close.png" alt="" />
            </div>
        </div>
        <div class="payment-body">
            <div>
                <label><b>Enter category:</b></label><br>
                <input type="text" placeholder="category name" />
            </div>
            <div>
                <label><b>Enter description(optional):</b></label><br>
                <textarea class="description"></textarea>
            </div>
        </div>
        <div class="payment-footer" style="display: flex; flex-direction: row; justify-content: flex-end;">
            <button class="proceed-btn" style="background-color: #000; color:#fff;">create category</button>
        </div>
    </div>
</div>

<div class="payment-overlay gift-overlay">
    <form action="data.php" method="POST" id="myForm" class="payment-modal" enctype="multipart/form-data">
        <div class="payment-header">
            <h3>Add Gift Card</h3>
            <div class="cancel-btn cancel-gift-btn">
                <img src="../images/close.png" alt="" />
            </div>
        </div>
        <div class="payment-body">
            <div>
                <label><b>Enter name:</b></label><br>
                <input type="text" class="name-input" name="name" placeholder="category name" />
            </div>
            <div>
                <label><b>Enter category:</b></label><br>
                <select class="category-input" name="category">
                    <?php
                    $categories = selectAll('gift_cards_categories');
                    foreach ($categories as $key => $category){
                    ?>
                    <option><?php echo $category['name']; ?></option>
                    <?php } ?>
                    
                </select>
            </div>
            <div>
                <label><b>choose image:</b></label><br>
                <input name="file" type="file" style="display:none;" class="fileInput" />
                <div class="image-input-container" onclick="getFile()">
                    <img src="../images/image.png" alt="" />
                </div>
            </div>
            
            <div>
                <label><b>Available prices:</b></label>
                <div class="gift-price-container">
                    <input placeholder="available gift card price" type="text" class="price" /> <button>add</button>
                </div>

            </div>
            <div>
                <label><b>Enter description(optional):</b></label><br>
                <textarea class="description"></textarea>
            </div>
            
                    </div>
        <div class="payment-footer" style="display: flex; flex-direction: row; justify-content: flex-end;">
            <button class="proceed-btn" style="background-color: #000; color:#fff;">create gift card</button>
        </div>
                    </form>
</div>
<div class="create-section">
    <div class="tab">
        <button class="tablinks active" onclick="openTab(event, 'About Me')">categories</button>
        <button class="tablinks" onclick="openTab(event, 'Cool Sites')">Gift Cards</button>
        <!-- <button class="tablinks" onclick="openTab(event, 'Contact Us')"></button> -->
    </div>

    <div class="tabcontent" style="display: block" id="About Me">
        <div class="container">
            <button class="create-btn">create new category</button>
        </div>

        <table style="width: 100%; margin-top: 20px">
            <tr>
                <th>S/N</th>
                <th>categories</th>
                <th>description</th>
            </tr>
            <?php
                    $categories = selectAll('gift_cards_categories');
                    foreach ($categories as $key => $category){
                    ?>
                    <tr>
                        <td><?php echo $key + 1; ?></d>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['description']; ?></td>
                    </tr>

                    <?php } ?>

        </table>
    </div>
    <div class="tabcontent" id="Cool Sites">
        <div class="container">
            <button class="create-btn create-gift-btn">Add Gift Card</button>
        </div>
        <table style="width: 100%; margin-top: 20px">
            <tr>
                <th>S/N</th>
                <th>name</th>
                <th>category</th>
                <th>available prices</th>
                <th>description</th>
                <th>created date</th>
            </tr>
            <?php $giftCards = selectAll('gift_cards');
                foreach ($giftCards as $key => $giftCard){ ?>
                    <tr>
                        <td><?php echo $key + 1; ?></d>
                        <td><?php echo $giftCard['name']; ?></td>
                        <td><?php echo $giftCard['category']; ?></td>
                        <td><?php echo $giftCard['prices']; ?></d>
                        <td><?php echo $giftCard['description']; ?></td>
                        <td><?php echo $giftCard['created_date']; ?></td>
                    </tr>
                <?php } ?>


        </table>
    </div>
    <!-- <div class="tabcontent" id="Cool Sites">
        <h3>Cool Me</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ratione delectus repellendus nobis natus
            reiciendis minima optio laboriosam nostrum cumque, asperiores pariatur sit quibusdam atque fugiat expedita,
            tenetur facere non.</p>
    </div> -->
</div>

<script>
    function openTab(evt, tabName) {

        var i, tabcontent, tablinks;

        tabcontent = document.querySelectorAll(".tabcontent");

        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.querySelectorAll(".tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

</script>

<script>
    let closeCreateModal = document.querySelector(".cancel-btn");
    let openCreateModal = document.querySelector(".create-btn");
    let createModal = document.querySelector(".category-overlay");
    var createModalOpen = false;

    closeCreateModal.addEventListener("click", () => {
        if (createModalOpen) {
            createModal.style.display = "none";
            createModalOpen = false
        }
    })

    openCreateModal.addEventListener("click", () => {
        if (!createModalOpen) {
            createModal.style.display = "flex";
            createModalOpen = true;
        }
    })
</script>
<script>
    let closeGiftModal = document.querySelector(".cancel-gift-btn");
    let openGiftModal = document.querySelector(".create-gift-btn");
    let createGiftModal = document.querySelector(".gift-overlay");
    var createGiftModalOpen = false;

    closeGiftModal.addEventListener("click", () => {
        if (createGiftModalOpen) {
            createGiftModal.style.display = "none";
            createGiftModalOpen = false
        }
    })

    openGiftModal.addEventListener("click", () => {
        if (!createGiftModalOpen) {
            createGiftModal.style.display = "flex";
            createGiftModalOpen = true;
        }
    })
</script>
<script>
    function getFile() {
        document.querySelector(".fileInput").click();
    }
</script>
<!-- <script>
    $(document).ready(function() {
        var form = $('#myForm'); // contact form
        var submit = $('.proceed-btn');
        // var alert = $('.alert-msg'); // alert div for show alert message

        // form submit event
        form.on('submit', function(e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'data.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function() {
                    // alert.fadeOut();
                    submit.html('creating....'); // change submit button text
                },
                success: function(data) {
                    // alert.html(data).fadeIn(); // fade in response data
                    form.trigger('reset'); // reset form
                },
                error: function(e) {
                    console.log(e)
                }
            });
                
        });
    });
</script> -->

<script >
    function submitForm(){
        $('#myForm').submit();
    }
    </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>