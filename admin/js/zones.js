$(function () {
  var status = "";
  $("#myonoffswitch-combo").change(function () {
    status = $(this).prop("checked");
    var log = "";
    if (status == true) {
      log = "ON";
    } else {
      log = "OFF";
    }
    $.ajax({
      url: "zones/proses.php",
      type: "POST",
      data: {
        status: status,
        zones: "combo",
      },
      cache: false,
      success: function () {
        console.log("Combo Zone Status : " + log);
      },
      error: function () {
        alert("AJAX FAIL");
      },
    });
  });
  $("#myonoffswitch-fastnet").change(function () {
    status = $(this).prop("checked");
    var log = "";
    if (status == true) {
      log = "ON";
    } else {
      log = "OFF";
    }
    $.ajax({
      url: "zones/proses.php",
      type: "POST",
      data: {
        status: status,
        zones: "fastnet",
      },
      cache: false,
      success: function () {
        console.log("Fastnet Zone Status : " + log);
      },
      error: function () {
        alert("AJAX FAIL");
      },
    });
  });
});
