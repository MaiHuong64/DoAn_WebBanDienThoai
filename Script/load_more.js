$(document).ready(function () {
  $("#btn-load").click(function () {
    var row = Number($("#row").val());
    var allcount = Number($("#all").val());
    var rowperpage = 6;
    row = row + rowperpage;

    if (row <= allcount) {
      $("#row").val(row);

      $.ajax({
        url: "getData.php",
        type: "post",
        data: { row: row },
        beforeSend: function () {
          $("#btn-load").text("Đang tải...");
        },
        success: function (response) {
          setTimeout(function () {
            $("#product-list").append(response);
            $("#btn-load").text("Xem thêm");

            if (row + rowperpage > allcount) {
              $("#btn-load").hide(); // Ẩn nút khi hết sản phẩm
            }
          }, 500);
        },
      });
    }
  });
});