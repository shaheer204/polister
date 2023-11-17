<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_to_Cart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'item_name');
            if (in_array($_POST['item_name'], $myitems)) {
                echo "<script>
                alert(' item already added');
            window.location.href='items.php';
            </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'quantity' => $_POST['quantity']);
                echo "<script>
            alert(' item added');
            window.location.href='items.php';
            </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'quantity' => $_POST['quantity']);
            echo "<script>
         alert(' item already added');
            window.location.href='items.php';
            </script>";
        }
    }
    if (isset($_POST['Remove_items'])) {

        $filteredData = [];

        foreach ($_SESSION['cart'] as $item) {
            if ($item['item_name'] !== $_POST['item_name']) {
                $filteredData[] = $item;
            }
        }
        $_SESSION['cart'] = $filteredData;
        echo "<script>
                  alert('item removed');
                window.location.href='cart.php';
                </script>";
    }
}
?>