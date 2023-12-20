<?php
session_start();
include "baseheader.php";
if(!isset($_SESSION["user"])){
    header('location:./admin/user/login.php');
}
?>
<section class="payment">
    <div class="container">
            <div class="payment-img">
                <img src="images/paymentsuccess.png">
            </div>
            <div class="payment-button">
                <a href="cartegory1.php"><button><P style="font-weight: bold;">TIẾP TỤC MUA HÀNG</P></button></a>
            </div>
            <div></div>
    </div>
</section>
<?php
include "basefooter.php";
?>