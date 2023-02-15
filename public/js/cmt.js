// Hàm gửi tin nhắn
function sendMsg() {
  // Khai ba1oca1c biến trong form
  $body_msg = $("#id").val();

  // Gửi dữ liệu
  $.ajax({
    url: "./viewadd.php", // đường dẫn file xử lý
    type: "POST", // phương thức
    // dữ liệu
    data: {
      id_id: $body_msg,
      // thực thi khi gửi dữ liệu thành công
    },
    dataType: "text",
    success: function (a) {
      // làm trống thanh trò chuyện
      $("#idd").html(a);
    },
  });
}
