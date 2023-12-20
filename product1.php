<?php
include "baseheader.php";
include "product1_class.php";
?>
<?php
$product = new product;
$product_id = $_GET['product_id'];
$show_product = $product -> show_product();
$get_product = $product -> get_product($product_id);
$result = $get_product->fetch_assoc();

?>
<!----------------------------------------------product---->
    <section class="product">
        <div class="container">
            <div class="product-top row">
                <p>Trang chủ</p><span>&#10230;</span><p>NAM</p><span>&#10230;</span><p>Sản phẩm</p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
						<img src="./admin/uploads/<?php echo $result['product_img'] ?>">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="images/sp1s1.png" alt="">
                        <img src="images/sp1s2.png" alt="">
                        <img src="images/sp1s3.png" alt="">
                        <img src="images/sp1s4.png" alt="">
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-name">
                        <h1><?php echo $result['product_name'] ?></h1>
                    </div>
                    <div class="product-content-right-price">
                        <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-color">
                        <p><span style="font-weight: bold;">Màu sắc</span>: Đen<span style="color: red;">*</span></p>
                    </div>
					<div class="product-content-right-size">
						<p style="font-weight: bold;">Size:</p>
						<div class="size">
							<span>S</span>
							<span>M</span>
							<span>L</span>
							<span>XL</span>
							<span>XXL</span>
						</div>
					</div>
					<div class="quantity">
						<p style="font-weight: bold;">Số lượng: </p>
						<input type="number" min="1" value="1">
						
					</div>
					<p style="color: red;">Vui lòng chọn Size<span style="color: red;">*</span></p>
					<div class="product-content-right-button">
						<a href="cart.php"><button><i class="fas fa-shopping-cart"></i>MUA HÀNG</button></a>
					</div>
					<div class="product-content-right-icon">
						<div class="product-content-right-icon-item">
							<i class="fas fa-phone"></i><p>Hotline</p>
						</div>
						<div class="product-content-right-icon-item">
							<i class="fas fa-comment"></i><p>Chat</p>
						</div>
						<div class="product-content-right-icon-item">
							<i class="fas fa-envelope"></i><p>Hotline</p>
						</div>
					</div>
					<div class="product-content-right-bottom">
						<div class="product-content-right-bottom-top">
							&#8744;
						</div>
						<div class="product-content-right-bottom-content-big">
							<div class="product-content-right-bottom-content-title row">
								<div class="product-content-right-bottom-content-title-item gioithieu">
									<p>Giới thiệu</p>
								</div>
								<div class="product-content-right-bottom-content-title-item chitiet">
									<p>Chi tiết sản phẩm</p>
								</div>
								<div class="product-content-right-bottom-content-title-item baoquan">
									<p>Bảo quản</p>
								</div>
							</div>
							<div class="product-content-right-bottom-content">
								<div class="product-content-right-bottom-content-gioithieu">
									<br>Áo thun tay ngắn độ dài vừa phải mang phong cách trẻ trung năng động.<br><br>
									Họa tiết được in trên áo sẽ giúp chàng nổi bật giữa đám đông. Là sản phẩm phù hợp cho những buổi đi chơi hay hoạt động thể thao.
								</div>
								<div class="product-content-right-bottom-content-chitiet">
									<br><?php echo $result['product_detail'] ?> <br>
								</div>
								<div class="product-content-right-bottom-content-baoquan">
									<br>Chi tiết bảo quản sản phẩm : <br><br>
									* Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ, tweed, lông, phao) chỉ giặt khô, tuyệt đối không giặt ướt.<br><br>
									* Vải dệt kim: sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn.<br><br>
									* Vải voan, lụa, chiffon nên giặt bằng tay.<br><br>
									* Vải thô, tuytsi, kaki không có phối hay trang trí đá cườm thì có thể giặt máy.<br><br>
									* Vải thô, tuytsi, kaki có phối màu tường phản hay trang trí voan, lụa, đá cườm thì cần giặt tay.<br><br>
									* Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans. Nếu giặt thì nên lộn trái sản phẩm khi giặt, đóng khuy, kéo khóa, không nên giặt chung cùng đồ sáng màu, tránh dính màu vào các sản phẩm khác.<br><br>
									* Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu, phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh, nên giặt cùng xà phòng pha loãng.<br><br>
									* Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ, vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.<br><br>
									* Nên phơi sản phẩm tại chỗ thoáng mát, tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu, nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn.<br><br>
									* Những chất vải 100% cotton, không nên phơi sản phẩm bằng mắc áo mà nên vắt ngang sản phẩm lên dây phơi để tránh tình trạng rạn vải.<br><br>
									* Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng, mát và không bị cháy, giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải. <br><br>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
	<!------------related-->
	<section class="product-related container">
		<div class="product-related-title">
			<p>SẢN PHẨM LIÊN QUAN</p>
		</div>
		<div class="product-content row">
			<div class="product-related-item">
				<img src="images/sp2.png" alt="">
				<h1>Áo thun in hình</h1>
				<p>325.000<sup>đ</sup></p>
			</div>
			<div class="product-related-item">
				<img src="images/sp3.png" alt="">
				<h1>Áo thun in hình</h1>
				<p>325.000<sup>đ</sup></p>
			</div>
			<div class="product-related-item">
				<img src="images/sp4.png" alt="">
				<h1>Áo thun túi hộp</h1>
				<p>345.000<sup>đ</sup></p>
			</div>
			<div class="product-related-item">
				<img src="images/sp5.png" alt="">
				<h1>Áo thun túi hộp</h1>
				<p>345.000<sup>đ</sup></p>
			</div>
			<div class="product-related-item">
				<img src="images/sp8.png" alt="">
				<h1>Áo thun in hình</h1>
				<p>325.000<sup>đ</sup></p>
			</div>
		</div>
	</section>

<!----------------------------------------------footer---->

<?php
include "basefooter.php";
?>