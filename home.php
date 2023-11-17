<?php
include('includes/connection.php');
include('includes/header.php');
include('includes/navbar.php');

if(!isset($_SESSION['login'])){
header("location:form.php");
} 

?>
<main>
  <!-- section no 1 -->
  <section class="section-1"> 
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contant-wrapper">
            <h1><?php echo $_SESSION['company_name'] ?></h1>
            <p>A trusted point where you got all kind of
              Vicky Razai for yourself and your new born
              baby to give him the warmth of your love in
              every kind of season serving you with the
              best for 18 years now. </p>
          </div>
        </div>
        <div class="col-md-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/04530401be2ae6ea01b4b19f0d310ecb.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pri_175_p-1631978478.webp" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
  </section>
  <!-- section no 1 end  -->
  <!-- section no 4  -->
  <section class="section-4">
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
  <div class="col">
    <div class="card ">
      <div class="img-wrapper-item">
      <img src="images/download (1).jpeg"  alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">item</h5>
        <p class="card-text">...</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <div class="img-wrapper-item">
      <img src="images/pic2.jpg"  alt="pic2.jpg">
      </div> 
      <div class="card-body">
        <h5 class="card-title">item 1</h5>
        <p class="card-text">...</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <div class="img-wrapper-item">
      <img src="images/download.jpeg"  alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">item</h5>
        <p class="card-text">...</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <div class="img-wrapper-item">
      <img src="images/images.jpeg"  alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">item</h5>
        <p class="card-text">...</p>
      </div>
    </div>
  </div>
</div>
</div>
  </section>
</main>

<?php
include('includes/footer.php');
?>