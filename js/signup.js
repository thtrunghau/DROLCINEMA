
function checkForm(){
    annouce = "";
    phone = $('#phone').val();
    flag = true;

    if (!$.isNumeric(phone) || phone.length > 12) {
        annouce += "Vui lòng nhập số điện thoại hợp lệ. ";
        flag =  false;
    }
    if ($('#pass').val() != $('#re-pass').val()) {
        annouce += 'Mật khẩu xác nhận không đúng.';
        flag =  false;
    }
    
    console.log($('#pass').value);
    console.log($('#re-pass').value);

    $('#annouce').text(annouce);

    return flag;
}


