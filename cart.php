<?php
include('includes/connection.php');  
include('includes/header.php');
include('includes/navbar.php');
if (!isset($_SESSION['login'])) {
    header("location:form.php");
}
session_start();
?>
<style>
    h1 {
        padding-top: 100px;
        color: #7a6031;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>
                <i class="fa-solid fa-cart-shopping"></i>
                <span>My Cart</span>
            </h1>
        </div>
        <div class="col-lg-9 text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Item_name</th>
                        <th scope="col">Item_price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $sr = $key + 1;
                            echo "
                        <tr>
                        <td>$sr</td>
                        <td>$value[item_name]</td>
                        <td> $value[price] <input type='hidden' class='iprice' value='$value[price]'></td>
                         
                        <td>
                        <input class='text-center iquantity'  onchange='subTotal()' type='number' value ='$value[quantity]' min='1' max='10'>
                        </td>
                        <td class='itotal'></td>
                        <td>
                            <form action='manage_card.php' method='POST'>
                            <button  name='Remove_items' class='btn btn-sm btn-danger'>Remove</button>
                            <input type='hidden' name='item_name' value='$value[item_name]'>
                            </form>
                        </td>
                        </tr>
                        ";
                        }
                    }
                    ?>



                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
                <h4> Grand Total:</h4>
                <h5 class="d-flex justify-content-end" id="gtotal"></h5>
                <br>
                <form>
                    <button class="btn btn-danger  btn-block">Make Purshase</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    function subTotal() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {

            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);

            gt = gt + (iprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = gt;
    }
    subTotal();
</script>