<?php
session_start();
include "baseheader.php";
?>
    <!----------------------------------------------payment---->
    <section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
				<div class="delivery-top">
					<div class="delivery-top-cart delivery-top-item">
						<i class="fas fa-shopping-cart "></i>
					</div>
					<div class="delivery-top-address delivery-top-item">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="delivery-top-payment delivery-top-item">
						<i class="fas fa-money-check-alt"></i>
					</div>
				</div>
			</div>
        </div>
		<div class="container">
			<div class="delivery-content row">
				<div class="delivery-content-left">
					<p>Vui lòng nhập địa chỉ giao hàng</p>
					<div class="delivery-content-left-dangnhap row">
						<a href="http://localhost/%c4%90%e1%bb%93%20%c3%a1n/admin/user/login.php"><i class="fa-solid fa-right-to-bracket"></i>
						<p>Đăng nhập (Nếu bạn đã có tài khoản CROSTY)</p></a>
					</div>
					<div class="delivery-content-left-khachle row">
						<input checked name="loaikhach" type="radio">
						<p><span style="font-weight: bold;">Khách lẻ</span>(Nếu bạn không muốn lưu lại thông tin)</p>
					</div>
					<div class="delivery-content-left-dangky row">
						<input name="loaikhach" type="radio">
						<a href="http://localhost/%c4%90%e1%bb%93%20%c3%a1n/admin/user/register.php"><p><span style="font-weight: bold;">Đăng ký</span>(Tạo mới tài khoản với thông tin bên dưới)</p></a>
					</div>
					<div class="delivery-content-left-input-top row">
						<div class="delivery-content-left-input-top-item">
							<label for="">Họ tên <span style="color: red;">*</span></label>
							<input type="text">
						</div>
						<div class="delivery-content-left-input-top-item">
							<label for="">Điện thoại <span style="color: red;">*</span></label>
							<input type="text">
						</div>
						<div class="delivery-content-left-input-top-item">
							<label for="">Tỉnh/TP <span style="color: red;">*</span></label>
							<input type="text">
						</div>
						<div class="delivery-content-left-input-top-item">
							<label for="">Quận/Huyện <span style="color: red;">*</span></label>
							<input type="text">
						</div>
					</div>
					<div class="delivery-content-left-input-bottom">
						<label for="">Địa chỉ <span style="color: red;">*</span></label>
						<input type="text">
					</div>
					<div class="delivery-content-left-button row">
						<a href="cart.php"><span>&#171;</span><p>Quay lại giỏ hàng</p></a>
						<a href="payment.php"><button><p style="font-weight: bold; ">THANH TOÁN VÀ GIAO HÀNG</p></button></a>
					</div>
				</div>
				<div class="delivery-content-right">
					<table>
						<tr>
							<th>Tên sản phẩm</th>
							<th>Giảm giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
						</tr>
						<tr>
							<td>Áo thun in hình</td>
							<td>-20%</td>
							<td>1</td>
							<td><p>260.000<sup>đ</sup></p></td>
						</tr>
						<tr>
							<td>Áo thun in hình</td>
							<td>-20%</td>
							<td>1</td>
							<td><p>260.000<sup>đ</sup></p></td>
						</tr>
						<tr>
							<td style="font-weight: bold;" colspan="3">Tổng</td>
							<td style="font-weight: bold;"><p>520.000<sup>đ</sup></p></td>
						</tr>
						<tr>
							<td style="font-weight: bold;" colspan="3">Thuế VAT (10%)</td>
							<td style="font-weight: bold;"><p>52.000<sup>đ</sup></p></td>
						</tr>
						<tr>
							<td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
							<td style="font-weight: bold;"><p>572.000<sup>đ</sup></p></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
    </section>
    <!----------------------------------------------footer---->
<?php
include "basefooter.php";
?>