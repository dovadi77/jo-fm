(function ($) {
	"use strict";
	var status = "";
	var id = 0;
	var db = "";
	$("#myonoffswitch-paket").on("change", function () {
		status = $(this).prop("checked");
		var log = "";
		let url = new URL(window.location.href);
		db = url.searchParams.get("db");
		id = url.searchParams.get("id");
		console.log("run Bitch");
		if (status == true) {
			log = "ON";
		} else {
			log = "OFF";
		}
		$.ajax({
			url: "paket/proses.php",
			type: "POST",
			data: {
				status: status,
				id: id,
				db: db,
			},
			cache: false,
			success: function (response) {
				if (response == "Success")
					console.log(
						"Paket ID " + id + " with Table " + db + " Status : " + log
					);
				else console.log("error");
			},
			error: function () {
				alert("AJAX FAIL");
			},
		});
	});
})(jQuery);
