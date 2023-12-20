<?php
include "baseheader.php";
?>
 <!----------------------------------------------cart---->
    <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
				<div class="cart-top">
					<div class="cart-top-cart cart-top-item">
						<i class="fas fa-shopping-cart "></i>
					</div>
					<div class="cart-top-address cart-top-item">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="cart-top-payment cart-top-item">
						<i class="fas fa-money-check-alt"></i>
					</div>
				</div>
			</div>
        </div>
		<div class="container">
			<div class="cart-content row">
				<div class="cart-content-left">
					<table>
						<tr>
							<th>Sản phẩm</th>
							<th>Tên sản phẩm</th>
							<th>Màu</th>
							<th>Size</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							<th>Xoá</th>
						</tr>
						<tr>
							<td><img src="images/sp1s1.png" alt=""></td>
							<td><p>Áo thun in hình</p></td>
							<td><p>Đen</p></td>
							<td><p>XL</p></td>
							<td><input type="number" value="1" min="1"></td>
							<td><p>325.000<sup>đ</sup></p></td>
							<td><span>X</span></td>
						</tr>
						<tr>
							<td><img src="images/sp2.png" alt=""></td>
							<td><p>Áo thun in hình</p></td>
							<td><p>Xanh da trời</p></td>
							<td><p>XL</p></td>
							<td><input type="number" value="1" min="1"></td>
							<td><p>325.000<sup>đ</sup></p></td>
							<td><span>X</span></td>
						</tr>
					</table>
				</div>
				<div class="cart-content-right">
					<table>
						<tr>
							<th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
						</tr>
						<tr>
							<td>TỔNG SẢN PHẨM</td>
							<td>2</td>
						</tr>
						<tr>
							<td>TỔNG TIỀN HÀNG</td>
							<td><p>650.000<sup>đ</sup></p></td>
						</tr>
						<tr>
							<td>TẠM TÍNH</td>
							<td><p style="color: black; font-weight: bold;">650.000<sup>đ</sup></p></td>
						</tr>
					</table>
					<div class="cart-content-right-text">
						<p>Bạn sẽ được miễn phí ship khi có đơn hàng trên 2.000.000<sup>đ</sup></p>
						<p style="color: Red; font-weight: bold;">Mua thêm <span style="font-size: 18px;">1.350.000<sup>đ</sup></span> để được miễn phí ship</p>
					</div>
					<div class="cart-content-right-button">
						<button>TIẾP TỤC MUA SẮM</button>
						<a href="delivery.php"><button>THANH TOÁN</button></a>
					</div>
					<div class="cart-content-right-dangnhap">
						<p>TÀI KHOẢN CROSTY</p><br>
						<p>Hãy <a href="#" style="font-weight: bold; color: blueviolet;">đăng nhập</a> tài khoản của bạn để tích điểm thưởng</p>
					</div>
				</div>
			</div>
		</div>
    </section>
<!----------------------------------------------footer---->
<?php
include "basefooter.php";
?>