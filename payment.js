$(document).ready(() => {
  $("#couponButton").on("click", () => {
    $.get(
      "http://localhost/HatCinema/api/get_coupon_by_id.php?maKM=" +
        $("#couponId").val(),
      (data, status) => {
        let temporaryPrice = Number.parseInt($("#temporaryPrice").text());
        let discountPrice = 0;
        let totalPrice = 0;
        res = JSON.parse(data);
        console.log(JSON.parse(data));
        discountPrice =
          Number.parseInt(
            $("#temporaryPrice").text() * Number.parseInt(res.phanTramGiam)
          ) / 100;
        totalPrice = temporaryPrice - discountPrice;
        $("#discountPrice").text(discountPrice);
        $("#totalPrice").text(totalPrice);
      }
    );
  });
});
