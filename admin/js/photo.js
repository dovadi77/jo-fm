let canvas = $("#canvas"),
	context = canvas.get(0).getContext("2d"),
	$result = $("#result");
let dataImg = null;
$("#fileInput").on("change", function () {
	if (this.files && this.files[0]) {
		if (this.files[0].type.match(/^image\//)) {
			let reader = new FileReader();
			reader.onload = function (evt) {
				let img = new Image();
				img.onload = function () {
					context.canvas.height = img.height;
					context.canvas.width = img.width;
					context.drawImage(img, 0, 0);
					// Destroy the old cropper instance
					canvas.cropper("destroy");
					// Replace url
					canvas.attr("src", this.result);
					let cropper = canvas.cropper({
						aspectRatio: 4 / 3,
					});
					$("#photoModal").modal("show");
					canvas.show();
					$("#btnCrop").show();
					$("#btnSave").hide();
					$("#btnCrop").on("click", function () {
						$(this).hide();
						$("#btnSave").show();
						// Get a string base 64 data url
						let croppedImageDataURL = canvas
							.cropper("getCroppedCanvas")
							.toDataURL("image/png");
						if ($result.children("img").length < 1) {
							$result.append($("<img>").attr("src", croppedImageDataURL));
						}
						dataImg = croppedImageDataURL;
						canvas.cropper("destroy");
						canvas.hide();
					});
					$("#btnRestore").on("click", function () {
						$("#btnCrop").show();
						$("#btnSave").hide();
						canvas.cropper("reset");
						$result.empty();
					});
				};
				img.src = evt.target.result;
			};
			reader.readAsDataURL(this.files[0]);
		} else {
			alert("Invalid file type! Please select an image file.");
		}
	} else {
		alert("No file(s) selected.");
	}
});

$(".closeModal").on("click", function (e) {
	e.preventDefault();
	$("#fileInput").val(null);
});

$("#btnSave").on("click", (e) => {
	e.preventDefault();
	let url = new URL(window.location.href);
	db = url.searchParams.get("db");
	id = url.searchParams.get("id");
	$.ajax({
		type: "post",
		url: "upload.php",
		data: {
			image: dataImg,
			filename: db + id + ".png",
			db: db,
			id: id,
		},
		success: function (response) {
			if (response === "success") {
				alert("Image Replaced");
				location.reload();
			} else {
				alert(response);
			}
		},
		error: function (err) {
			alert("AJAX FAIL");
		},
	});
});
