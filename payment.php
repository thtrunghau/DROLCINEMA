<?php
	$dummy = array("email" => "user1@gmail.com", "ngayDat" => "05/10/2001", "tongTien" => 50000, "maKM" => 1);
	$dummy_film_info = array("tenPhim" => "SEMATIC ERROR: LỖI LOGIC 2D", "ngayChieu" => "Thứ 6, 21/04/2023", "gioChieu" => "9:30-11:20", "rapChieu" => "VIP 1, Phú Mỹ Hưng", "gheNgoi" => "D12, D13", "giaTien" => 12000, "soLuong" => 2);
	$dummy_food_info = array(array("tenMon" => "Combo Bigmon", "soLuong" => 1, "giaTien" => 20000), array("tenMon" => "Combo Bigmon", "soLuong" => 1, "giaTien" => 20000));
	$film_total = $dummy_film_info['giaTien'] * $dummy_film_info['soLuong'];
	$food_total = 0;
	include_once('./utils.php');
?>
	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="./payment.js"></script>
	<link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">
	<link rel="stylesheet" href="./css/payment.css">

    <title>DROL CINEMA</title>


</head>
<body>
	<!-- Start navbar -->
	<?php include_once('./navbar.php') ?>
	<div class="main">
		<div class="section">
			<div class="container input_group">
				<div style="margin-bottom: 20px;" class="text_bold">Thông tin khách hàng</div>
				<input type="email" name="mail" id="mail" placeholder="Email"/>
				<input id="couponId" type="text" name="user" placeholder="Mã khuyến mãi" />
				<button id="couponButton" class="apply_coupon_button">Thêm mã khuyến mãi</button>
			</div>
			
			<div class="payment_method_group container">
				<div class="text_bold">Hình thức thanh toán</div>
				<div class="payment_method_group_item row">
						<div class="col-1">
							<input type="radio" id="atm" name="payment_method" />
						</div>
						<div class="col-11 d-flex justify-content-start">
							<label for="atm">
								<img src="./img/logo.png" />
								<div>Thẻ ATM/Internet Banking <br/> Thẻ tín dụng (credit card) <br/> Thẻ ghi nợ (Debit card)</div>
							</label>
						</div>
				</div>
				<div class="payment_method_group_item row">
					<div class="col-1">
						<input type="radio" id="momo" name="payment_method" />
					</div>
					<div class="col-11 d-flex justify-content-start">
						<label for="momo">
							<img src="./img/logo.png" />
							<div>Ví điện tử MOMO</div>
						</label>
					</div>
				</div>
				<div class="payment_method_group_item">
					<div class="col-1">
						<input type="radio" id="zalopay" name="payment_method" />
					</div>
					<div class="col-11 d-flex justify-content-start">
						<label for="zalopay">
							<img src="./img/logo.png" />
							<div>Ví điện tử ZaloPay</div>
						</label>
					</div>
				</div>
			</div>
			
			<div class="d-flex justify-content-center">
				<button class="pay_button">Thanh toán</button>
			</div>
		</div>
		<div class="section">
			<div class="d-flex receipt_info">
				<img src="./img/17.jpg" alt="" class="film_img">
				<div class="ml-4">
					<div class="film_name"><?php echo($dummy_film_info['tenPhim']) ?></div>
					<table>
						<tr>
							<td>Ngày</td>
							<td><?php echo($dummy_film_info['ngayChieu']) ?></td>
						</tr>
						<tr>
							<td>Giờ chiếu</td>
							<td><?php echo($dummy_film_info['gioChieu']) ?></td>
						</tr>
						<tr>
							<td>Rạp chiếu</td>
							<td><?php echo($dummy_film_info['rapChieu']) ?></td>
						</tr>
						<tr>
							<td>Ghế ngồi</td>
							<td><?php echo($dummy_film_info['gheNgoi']) ?></td>
						</tr>
						<tr>
							<td>Số lượng: <?php echo($dummy_film_info['soLuong']) ?></td>
						</tr>
						<tr>
							<td>Giá: <?php echo($dummy_film_info['giaTien']) ?> VNĐ</td>
						</tr>
					</table>
					<div class="seperator" style="margin: 10px 0"></div>
					<?php foreach($dummy_food_info as $food_info):
						$food_total += $food_info['giaTien'] * $food_info['soLuong']?>
						<div class="info_group d-flex justify-content-between">
							<div><?php echo(strval($food_info['tenMon'])) ?></div>
							<div>Số lượng: <?php echo($food_info['soLuong']) ?></div>
						</div>
						<div style="margin-top: 10px;"><?php echo($food_info['giaTien']) ?> VNĐ</div>
					<?php endforeach ?>
					<div class="seperator" style="margin: 10px 0"></div>
				</div>
			</div>
			
			<div class="text_bold">
				<div>
					Mã giảm giá
				</div>
				<div class="d-flex justify-content-around" style="margin: 80px 0;">
					
				</div>
			</div>
			<div>
				<div class="text_bold">Điểm thành viên</div>
				<div class="seperator" style="margin: 20px 0;"></div>
				<div>
					<div class="d-flex justify-content-between" style="margin-left:15px">
						<div>Tạm tính:</div>
						<div class="text_bold"><span id="temporaryPrice"><?php echo(strval($film_total + $food_total)) ?></span> VNĐ</div>
					</div>
					<div class="d-flex justify-content-between" style="margin-left:15px; margin-top:10px">
						<div>Giảm giá:</div>
						<div class="text_bold"><span id="discountPrice">0</span> VNĐ</div>
					</div>
					<div class="seperator" style="margin: 20px 0"></div>
					<div class="d-flex justify-content-between" style="margin-left:15px">
						<div>Tổng tiền:</div>
						<div class="text_bold" style="font-size: 20px;"><span id="totalPrice"><?php echo strval($film_total + $food_total) ?></span> VNĐ</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Start footer -->
	<?php include_once('./footer.php') ?>
	<!-- End footer -->
</body>
</html>