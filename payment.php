<?php
include "baseheader.php";
?>
    <!-----------payment------------->
    <section class="payment">
        <div class="container">
            <div class="payment-top-wrap">
				<div class="payment-top">
					<div class="payment-top-cart payment-top-item">
						<i class="fas fa-shopping-cart "></i>
					</div>
					<div class="payment-top-address payment-top-item">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="payment-top-payment payment-top-item">
						<i class="fas fa-money-check-alt"></i>
					</div>
				</div>
			</div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-delivery-item">
                            <input checked type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán bằng thẻ tín dụng</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="images/visalogo.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán bằng thẻ ngân hàng</label>
                            <p>Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến Việt Nam.</p>
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán Momo</label>
                            <p>Ví điện tử.</p>
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input checked name="method-payment" type="radio">
                            <label for="">Thanh toán khi nhận hàng</label>
                        </div>
                    </div>
                </div>
                <div class="payment-content-right">
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá/Quà tặng">
                        <button><i class="fas fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-mnv">
                        <select name="" id="">
                            <option value="">Chọn mã NV thân thiết</option>
                            <option value="">A951</option>
                            <option value="">V753</option>
                            <option value="">H369</option>
                            <option value="">G630</option>
                            <option value="">B842</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="payment-content-right-payment">
                <a href="endpayment.php"><button>THANH TOÁN</button></a>
            </div>
        </div>
    </section>
    <!-----------footer------------->
<?php
include "basefooter.php";
?>