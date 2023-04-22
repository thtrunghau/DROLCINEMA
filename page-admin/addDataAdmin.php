<?php

    require_once('../utils.php');

	if($_POST['target'] == "taikhoan") {
		$ten = getPOST('ten');
		$sdt = getPOST('sdt');
		$admin = getPOST('admin');
		$matKhau = getPOST('matKhau');
		$email = getPOST('email');
		$target = getPOST('target');

		addData($target, "email, matKhau, ten, admin, sdt", "'$email', '$matKhau', '$ten', '$admin', '$sdt'");
		echo "success";
	} 

	if ($_POST['target'] == 'phim') {
		$ngayBD = getPOST('ngayBD');
		$ngayKT = getPOST('ngayKT');
		$gia = getPOST('gia');
		$quocGia = getPOST('quocGia');
		$tenPhim = getPOST('tenPhim');
		$theLoai = getPOST('theLoai');
		$thoiLuong = getPOST('thoiLuong');
		$trangThai = getPOST('trangThai');
		$target = getPOST('target');
		$hangPhim = getPOST('hangPhim');
		$dienVien = getPOST('dienVien');
		$phienBan = getPOST('phienBan');
		$daoDien = getPOST('daoDien');

		addData($target, "ngayBD,ngayKT, gia, quocGia, tenPhim, theLoai, thoiLuong, trangThai,hangPhim,dienVien,phienBan,daoDien", "'$ngayBD', '$ngayKT', $gia, '$quocGia', '$tenPhim', '$theLoai', $thoiLuong, '$trangThai', '$hangPhim', '$dienVien', '$phienBan', '$daoDien'");
		echo "success";
	}

	// if ($_POST['target'] == 'rap') {
	// 	$theLoai = getPOST('theLoai');

	// 	addData($target, "theLoai", "'$theLoai'");
	// 	echo "success";

	// }

	if ($_POST['target'] == 'bapnuoc') {
		$tenSP = getPOST('tenSP');
		$gia = getPOST('gia');
		$target = getPOST('target');

		addData($target, "tenSP, gia", "'$tenSP', '$gia'");
		echo "success";

	}

	if ($_POST['target'] == 'khuyenmai') {
		$chuDe = getPOST('chuDe');
		$noiDung = getPOST('noiDung');
		$ngayBD = getPOST('ngayBD');
		$ngayKT = getPOST('ngayKT');
		$target = getPOST('target');

		addData($target, "maKM, chuDe, noiDung, ngayBD, ngayKT", "'$maKM', '$chuDe', '$noiDung', '$ngayBD', '$ngayKT'");
		echo "success";

	}

	if ($_POST['target'] == 'xuatchieu') {
		$ngaygio = getPOST('ngaygio');
		$maPhong = getPOST('maPhong');
		$maPhim = getPOST('maPhim');
		$maRap = getPOST('maRap');
		$target = getPOST('target');

	addData($target, "ngaygio, maPhong, maPhim, maRap", "'$ngaygio', '$maPhong', '$maPhim', '$maRap'");
	echo "success";

	}

	if ($_POST['target'] == 'hoadon') {
		$email = getPOST('email');
		$ngayDat = getPOST('ngayDat');
		$maKM = getPOST('maKM');
		$tongTien = getPOST('tongTien');
		$target = getPOST('target');

		addData($target, "email,ngayDat,tongTien,maKM", "'$email', '$ngayDat',$tongTien,$maKM");
		echo "success";

	}

	if ($_POST['target'] == 'rap') {
		$maPhong = getPOST('maPhong');
		$diaChi = getPOST('diaChi');
		$target = getPOST('target');

		addData($target, "maPhong,diaChi", "'$maPhong', '$diaChi'");
		echo "success";

	}
?>
