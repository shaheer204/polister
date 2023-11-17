<script src="js/bootstrap.bundle.js"></script>
</body>
<section class="footer-section mt-5">
    <div class="container">
        <div class="row">
            <div class=" col-md-4">
                <div class="footer-logo">
                    <img src="images/logo.png">
                </div>
                <P>CONTACT US ON</P>
                <div class="web-img-wrapper">
                    <ul>
                        <li>
                            <a href="https://wa.me/03270961908">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100090847719561&mibextid=ZbWKwL">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/m_s_b_x_1?igshid=OGQ5ZDc2ODk2ZA==">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+923270961908">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" col-md-6">
                <h4>Payment Method</h4>
                <div class="logo-img-wrapper">
                    <ul>
                        <li><img src="images/cash-delivery_5359666.png"></li>
                        <li><img src="images/easypaisa-pay-logo.png"></li>
                        <li><img src="images/nayapay-logo.png"></li>
                        <li><img src="images/jazz-cash-logo.png"></li>
                        <li><img src="images/logo (1).png"></li>
                        <li><img src="images/Mastercard-logo.svg.png"></li>
                        <li><img src="images/unionpay-logo.png"></li>
                        <li><img src="images/visa.png"></li>
                    </ul>
                </div>
            </div>
                <div class=" col-md-2 d-flex justify-content-end">

                    <ul class="company">
                        <h4>Company</h4>
                        <li><a href="home.php">
                                <i class="fa-solid fa-house"></i>
                                <span>HOME</span>
                            </a></li>
                        <li><a href="items.php">
                                <i class="fa-solid fa-list-ul"></i>
                                <span>ITEMS</span>
                            </a></li>
                        <li>
                            <?php
                            if (isset($_SESSION['login'])) {
                                echo '
              <a href="form.php">
              <i class="fa-solid fa-user"></i>
              <span>PROFILE</span>
            </a>
              ';
                            } else {
                                echo '<a href="form.php">
              <i class="fa-solid fa-user"></i>
              <span>Login</span>
            </a>';
                            }
                            ?>
                        </li>
                </div>
            </div>
        </div>
</section>

</html>