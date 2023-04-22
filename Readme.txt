-Tổng quan:

- Folder
-css: chứa các file trang trí web
-img: chứa các tệp hình ảnh trong web
-js: chứa tệp script.js làm nhiệm vụ xử lí sự kiện
-php: file giao diện và các hành động tương tác trên giao diện
----------------------------------------------------------------------------------------------------------------------------------------
- Cách chạy web:
+ yêu cầu: web sẽ chạy trên xamp

- Thực hiện:
+ giải nén folder trong đường dẫn c:/xamp/htdocs/ .
+ sau khi giải nén thư mục thực hiện chạy xamp.
+ truy cập cơ sở dữ liệu của xamp với đường dẫn là http://localhost/phpmyadmin .
+ thực hiện tạo và sử dụng database mới với tên xemphimthat.
+ mở file createTable.sql để copy toàn bộ dữ liệu rồi dán vào mySQL trên xamp để thực hiện tạo bảng
+ tiếp theo là file insertData.sql để copy toàn bộ dữ liệu rồi dán vào mySQL trên xamp để thực hiện thêm thông tin vào các bảng.
+ sau khi chạy thành công, truy cập browser gõ địa chỉ của file index.php. Thông thường có đường dẫn là 127.0.0.1/HATCinema/index.php.
+ có thể tìm kiếm phim và xem lịch chiếu mà không cần đăng nhập nhưng khi đặt vé thì có yêu cầu buộc phải đăng nhập.
----------------------------------------------------------------------------------------------------------------------------------------
- các File:
+ index.php: chứa giao diện chính cũng là giao diện đầu tiên khi vào web
	Nhiệm vụ: là nơi liên kết đến hầu hết các trang còn lại của web.
+ login.php: chứa giao diện để người dùng đăng nhập tài khoản cá nhân hoặc admin
	Nhiệm vụ: form đăng nhập
+ signup.php: chứa giao diện để người dùng đăng ký thông tin và tạo tài khoản
	Nhiệm vụ: form đăng ký
+ searchResult.php: chứa kết quả tìm kiếm từ thanh nav phía đầu các trang.
	Nhiệm vụ: hiển thị toàn bộ các bộ phim có tên giống hoặc gần giống với dữ liệu được nhập vào.
+ information.php: chứa giao diện hiển thị thông tin của 1 bộ phim khi được chọn
	Nhiệm vụ: hiển thị thông tin phim
+ Bookingticket.php: chứa giao diện của trang đặt vé sau khi chọn phim và muốn đặt vé xem phim
	Nhiệm vụ: form chọn các rạp và thời gian xem.
+ chonghe.php: chứa giao diện để người mua chọn ghế và combo đi kèm
	Nhiệm vụ: form chọn ghế và bắp nước.
+ booking.php: giao diện hiển thị vé của khách hàng sau khi đặt vé thành công
	Nhiệm vụ: hiển thị vé.
+ Thanhvien.php, admin.php: lần lượt là các giao diện để hiện thị thông tin và là nơi để thực hiện các thao tác đặc biệt với mỗi cương vị người dùng
	Nhiệm vụ: hiển thị thông tin cá nhân
+ promotion.php: hiển thị các chính sách khuyến mãi từ trước đến nay của web phim
	Nhiệm vụ: hiển thị thông tin khuyến mãi.
----------------------------------------------------------------------------------------------------------------------------------------
- Link github: https://github.com/HanhTranMy/HATCinema