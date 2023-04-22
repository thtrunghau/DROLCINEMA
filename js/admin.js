var ID = "";
var ROW = 0;
var isAdmin = 0;

$(document).ready(function () {
  $("#film").click(function () {
    $(".body").load("./page-admin/film.php");
  });

  $("#account").click(function () {
    $(".body").load("./page-admin/account.php");
  });

  $("#cinema").click(function () {
    $(".body").load("./page-admin/cinema.php");
  });

  $("#promotion-admin").click(function () {
    $(".body").load("./page-admin/promotion-info.php");
  });

  $("#drink").click(function () {
    $(".body").load("./page-admin/drink.php");
  });

  $("#bill").click(function () {
    $(".body").load("./page-admin/bill.php");
  });

  $("#showtime").click(function () {
    $(".body").load("./page-admin/showtime.php");
  });

  $("#overall").click(function () {
    $(".body").load("./page-admin/overall.php");
  });

  $(".fa-trash").click(function () {
    let id = $(this).attr("id");

    let tableDelete = $(this).attr("class").toString();
    let arr = tableDelete.split(" ");
    $.ajax({
      type: "post",
      url: "./page-admin/deleteData.php",
      data: {
        deleteRow: "deleteRow",
        rowID: id,
        table: arr[arr.length - 1],
        id: arr[arr.length - 2],
      },
      success: function (response) {
        if (response == "success") {
          let row = document.getElementById("" + id);
          row.parentNode.parentNode.parentNode.removeChild(
            row.parentNode.parentNode
          );
        }
      },
    });
  });

  $(".edit").focusout(function () {
    let id = this.id;
    let split_id = id.split("_");
    let name = split_id[0];
    let editID = split_id[2];
    let table = split_id[1];
    let value = $(this).text();
    let idDatabase = split_id[3];
    

    $.ajax({
      url: "./page-admin/updateDataAdmin.php",
      type: "POST",
      data: {
        table: table,
        value: value,
        id: editID,
        name: name,
        idDatabase: idDatabase,
      },
      success: function (response) {
        alert("Updated Success!");
      },
    });
  });
});


function addAccount() {
  let ten = $("#ten").val().trim();
  let sdt = $("#sdt").val().trim();
  let admin = $("#admin").is(":checked") ? 1 : 0;
  let matKhau = $("#matKhau").val().trim();
  let email = $("#email").val().trim();

  $.ajax({
    type: "post",
    url: "./page-admin/addDataAdmin.php",
    data: {
      target: "taikhoan",
      ten,
      sdt,
      admin,
      matKhau,
      email,
    },
    success: function (response) {
      if (response == "success") {
        alert("Thêm dữ liệu thành công!");
      }else{
        alert("Thêm dữ liệu thất bại!");
      }
    },
  });
}

function addFilm() {
  let ngayBD = $("#ngayBD").val().trim();
  let ngayKT = $("#ngayKT").val().trim();
  let gia = $("#gia").val().trim();
  let quocGia = $("#quocGia").val().trim();
  let tenPhim = $("#tenPhim").val().trim();
  let theLoai = $("#theLoai").val().trim();
  let thoiLuong = $("#thoiLuong").val().trim();
  let trangThai = $("#trangThai").val().trim();
  let hangPhim = $("#hangPhim").val().trim();
  let phienBan = $("#phienBan").val().trim();
  let dienVien = $("#dienVien").val().trim();
  let daoDien = $("#daoDien").val().trim();

  $.ajax({
    type: "post",
    url: "./page-admin/addDataAdmin.php",
    data: {
      target: "phim",
      ngayBD,
      ngayKT,
      gia,
      quocGia,
      tenPhim,
      theLoai,
      thoiLuong,
      trangThai,
      hangPhim,
      phienBan,
      dienVien,
      daoDien
    },
    success: function (response) {
      if (response == "success") {
        alert("Thêm dữ liệu thành công!");

      }else{
        alert("Thêm dữ liệu thất bại!");
      }
    },
  });
}

function addBapNuoc() {
  let tenSP = $("#tenSP").val().trim();
  let gia = $("#gia").val().trim();

  $.ajax({
    type: "post",
    url: "./page-admin/addDataAdmin.php",
    data: {
      target: "bapnuoc",
      tenSP,
      gia,
    },
    success: function (response) {
      if (response == "success") {
        alert("Thêm dữ liệu thành công!");
      }else{
        alert("Thêm dữ liệu thất bại!");
      }
    },
  });
}

function addKhuyenMai() {
  let chuDe = $("#chuDe").val().trim();
  let noiDung = $("#noiDung").val().trim();
  let ngayBD = $("#ngayBD").val().trim();
  let ngayKT = $("#ngayKT").val().trim();

  $.ajax({
    type: "post",
    url: "./page-admin/addDataAdmin.php",
    data: {
      target: "khuyenmai",
      chuDe,
      noiDung,
      ngayBD,
      ngayKT,
    },
    success: function (response) {
      if (response == "success") {
        alert("Thêm dữ liệu thành công!");
      }
    },
  });
}

function addXuatChieu() {
  let ngaygio = $("#ngaygio").val().trim();
  let maPhong = $("#maPhong").val().trim();
  let maPhim = $("#maPhim").val().trim();
  let maRap = $("#maRap").val().trim();

  $.ajax({
    type: "post",
    url: "./page-admin/addDataAdmin.php",
    data: {
      target: "xuatchieu",
      ngaygio,
      maPhong,
      maPhim,
      maRap
    },
    success: function (response) {
      if (response == "success") {
        alert("Thêm dữ liệu thành công!");
      }else{
        alert("Thêm dữ liệu thất bại!");
      }
    },
  });
}

function addBill() {
  let email = $("#email").val().trim();
  let ngayDat = $("#ngayDat").val().trim();
  let tongTien = $("#tongTien").val().trim();
  let maKM = $("#maKM").val().trim();

  $.ajax({
    type: "post",
    url: "./page-admin/addDataAdmin.php",
    data: {
      target: "hoadon",
      email,
      ngayDat,
      tongTien,
      maKM
    },
    success: function (response) {
      if (response == "success") {
        alert("Thêm dữ liệu thành công!");
      }else{
        alert("Thêm dữ liệu thất bại!");
      }
    },
  });
}

function addCinema() {
  let diaChi = $("#diaChi").val().trim();
  let maPhong = $("#maPhong").val().trim();

  $.ajax({
    type: "post",
    url: "./page-admin/addDataAdmin.php",
    data: {
      target: "rap",
      maPhong,
      diaChi,
    },
    success: function (response) {
      if (response == "success") {
        alert("Thêm dữ liệu thành công!");
      }
      else{
        alert("Thêm dữ liệu thất bại!");
      }
    },
  });
}