<?php
include('includes/connection.php');
include('includes/header.php');
include('includes/navbar.php');

if (!isset($_SESSION['login'])) {
  header("location:form.php");
}
session_start();
?>
<h1 style="color: #7a6031; text-align:center; padding-top: 90px; ">
  <?php echo $_SESSION['company_name'] ?>
</h1>

<!-- item section 1 -->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/1.jpg" class="card-img-top" alt="...">
       
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 1</h5>
              <p class="card-text">price: Rs.1000</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 1">
            <input type="hidden" name="price" value="1000">
            <input type="hidden" name="quantity" value="1">
          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/2.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 2</h5>
              <p class="card-text">price: Rs.1500</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 2">
            <input type="hidden" name="price" value="1500">
            <input type="hidden" name="quantity" value="1">

          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/3.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 3</h5>
              <p class="card-text">price: Rs.1200</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 3">
            <input type="hidden" name="price" value="1200">
            <input type="hidden" name="quantity" value="1">

          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/4.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 4</h5>
              <p class="card-text">price: Rs.1300</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 4">
            <input type="hidden" name="price" value="1300">
            <input type="hidden" name="quantity" value="1">
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- item section 1 end -->
<!-- item section 2 -->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/5.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 5</h5>
              <p class="card-text">price: Rs.1000</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 5">
            <input type="hidden" name="price" value="1000">
            <input type="hidden" name="quantity" value="1">
          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/6.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 6</h5>
              <p class="card-text">price: Rs.1500</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 6">
            <input type="hidden" name="price" value="1500">
            <input type="hidden" name="quantity" value="1">

          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/7.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 7</h5>
              <p class="card-text">price: Rs.1200</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 7">
            <input type="hidden" name="price" value="1200">
            <input type="hidden" name="quantity" value="1">

          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/8.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 8</h5>
              <p class="card-text">price: Rs.1300</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 8">
            <input type="hidden" name="price" value="1300">
            <input type="hidden" name="quantity" value="1">
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- item section 2 end -->
<!-- item section 3 -->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/9.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 9</h5>
              <p class="card-text">price: Rs.1000</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 9">
            <input type="hidden" name="price" value="1000">
            <input type="hidden" name="quantity" value="1">
          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/2.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 10</h5>
              <p class="card-text">price: Rs.1500</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 10">
            <input type="hidden" name="price" value="1500">
            <input type="hidden" name="quantity" value="1">

          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/3.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 11</h5>
              <p class="card-text">price: Rs.1200</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 11">
            <input type="hidden" name="price" value="1200">
            <input type="hidden" name="quantity" value="1">

          </div>
        </div>
      </form>

    </div>
    <div class="col-lg-3">
      <form action="manage_card.php" method="POST">
        <div class="card">
          <div class="img-wrapper-item">
            <img src="img/4.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <div>
              <h5 class="card-title">item 12</h5>
              <p class="card-text">price: Rs.1300</p>
            </div>
            <button type="submit" name="Add_to_Cart" class="btn btn-primary">Add to Cart</button>
            <input type="hidden" name="item_name" value="item 12">
            <input type="hidden" name="price" value="1300">
            <input type="hidden" name="quantity" value="1">
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- item section 3 end -->

<?php
include('includes/footer.php');
?>