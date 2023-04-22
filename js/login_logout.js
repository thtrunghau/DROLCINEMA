$(".login-logout").on("click", function (event) {
  //lấy nội dung thẻ li
  content = $(this).html();

  console.log(content);

  if (content.includes("Đăng nhập")) {
    window.location = "./login.php";
  } else {
    if (confirm("Bạn có muốn đăng xuất không?")) {
      window.location = "./logout.php";
    }
  }
});
