<header class="header">
  <div class="container">
    <div class="inner-contant-wrapper">
      <a class="logo">
        <img src="images/logo.png" >
      </a>
      <nav>
        <input id="nav-toggle" type="checkbox">
        <ul>
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
              <a href="logout.php">
              <i class="fa-regular fa-user"></i>
              <span>LOGOUT</span>
            </a>
              ';
            } else {
              echo '<a href="login.php">
              <i class="fa-regular fa-user"></i>
              <span>Login</span>
            </a>';
            }
            ?>
          </li>
          <li>
            <?php
            if (isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
            } else {
              $count = 0;
            }
            ?>
            <a href="cart.php" class="btn btn-secondary btn-outline">
              <i class="fa-solid fa-cart-shopping"></i>
              <span>CART (
                <?php echo $count; ?>)
              </span>
            </a>
          </li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
      </nav>

    </div>
  </div>
</header>