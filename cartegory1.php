<?php
include "baseheader.php";
include "product1_class.php";
?>
<?php
$product = new product;
$show_product = $product -> show_product();
?>
        <section class="cartegory">
                <div class="container">
                    <div class="cartegory-top row">
                        <p>Trang chủ</p> <span>&#10230; </span> <p>NAM</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="cartegory-left">
                            <ul>
                                <li class="cartegory-left-li"><a href="#">NAM</a>
                                    <ul>
                                        <li><a href="#">Áo sơ mi</a></li>
                                        <li><a href="">Áo vest</a></li>
                                        <li><a href="cartegory1.php">Áo thun</a></li>
                                        <li><a href="">Áo khoác</a></li>
                                        <li><a href="#">Quần jean</a></li>
                                        <li><a href="#">Quần tây</a></li>
                                        <li><a href="#">Quần lửng</a></li>
                                    </ul>
                                </li>
                                <li class="cartegory-left-li"><a href="#">NỮ</a>
                                    <ul>
                                        <li><a href="#">Áo sơ mi</a></li>
                                        <li><a href="#">Áo len</a></li>
                                        <li><a href="#">Áo thun</a></li>
                                        <li><a href="#">Áo khoác</a></li>
                                        <li><a href="#">Quần jean</a></li>
                                        <li><a href="#">Quần tây</a></li>
                                        <li><a href="#">Quần lửng</a></li>
                                        <li><a href="#">Đầm thun</a></li>
                                        <li><a href="#">Đầm dạ hội</a></li>
                                    </ul>
                                </li>
                                <li class="cartegory-left-li"><a href="#">TRẺ EM</a>
                                    <ul>
                                        <li><a href="#">Áo bé trai</a></li>
                                        <li><a href="#">Quần bé trai</a></li>
                                        <li><a href="#">Áo bé gái</a></li>
                                        <li><a href="#">Quần bé gái</a></li>
                                        <li><a href="#">Váy bé gái</a></li>
                                    </ul>
                                </li>
                                <li class="cartegory-left-li"><a href="">SALE</a></li>
                            </ul>
                        </div>
                        <div class="cartegory-right row">
                            <div class="cartegory-right-top-item">
                                <p>NAM</p>
                            </div>
                            <div class="cartegory-right-top-item">
                                <button><span>Bộ lọc</span><i class="fa-solid fa-sort-down"></i></button>
                            </div>
                            <div class="cartegory-right-top-item">
                                <select name="" id="">
                                    <option value="">Sắp xếp</option>
                                    <option value="">Giá cao đến thấp</option>
                                    <option value="">Giá thấp đến cao</option>
                                </select>
                            </div>
                            <div class="cartegory-rigth-content row">
                                <?php
                                if($show_product){$i = 0;
                                while($result = $show_product -> fetch_assoc()){$i++;
                                ?>
                                <div class="cartegory-rigth-content-item">
                                    <a href="product1.php?product_id=<?php echo $result['product_id']?>"><img src="./admin/uploads/<?php echo $result['product_img'] ?>"></a>
                                    <h1><?php echo $result['product_name'] ?></h1>
                                    <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                                </div>
                                <?php
                                    }
                                    }
                                    ?>
                                <!-- <div class="cartegory-rigth-content-item">
                                    <img src="images/sp2.png" alt="">
                                    <h1>Áo thun in hình</h1>
                                    <p>325.000<sup>đ</sup></p>
                                </div>
                                <div class="cartegory-rigth-content-item">
                                    <img src="images/sp3.png" alt="">
                                    <h1>Áo thun in hình</h1>
                                    <p>325.000<sup>đ</sup></p>
                                </div>
                                <div class="cartegory-rigth-content-item">
                                    <img src="images/sp4.png" alt="">
                                    <h1>Áo thun túi hộp</h1>
                                    <p>345.000<sup>đ</sup></p>
                                </div>
                                <div class="cartegory-rigth-content-item">
                                    <img src="images/sp5.png" alt="">
                                    <h1>Áo thun túi hộp</h1>
                                    <p>345.000<sup>đ</sup></p>
                                </div>
                                <div class="cartegory-rigth-content-item">
                                    <img src="images/sp6.png" alt="">
                                    <h1>Áo thun in hình</h1>
                                    <p>325.000<sup>đ</sup></p>
                                </div>
                                <div class="cartegory-rigth-content-item">
                                    <img src="images/sp7.png" alt="">
                                    <h1>Áo thun in hình</h1>
                                    <p>325.000<sup>đ</sup></p>
                                </div>
                                <div class="cartegory-rigth-content-item">
                                    <img src="images/sp8.png" alt="">
                                    <h1>Áo thun in hình</h1>
                                    <p>325.000<sup>đ</sup></p>
                                </div> -->
                            </div>
                            <div class="cartegory-right-bottom row">
                                <div class="cartegory-right-bottom-item">
                                    <p>Hiển thị 8 sản phẩm</p>
                                </div>
                                <div class="cartegory-right-bottom-item">
                                    <p><span>&#171;</span> 1 2 3 4 5 <span>&#187;</span> Trang cuối</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </section>

<?php
include "basefooter.php";
?>