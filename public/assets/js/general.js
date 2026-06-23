$(".data-table").DataTable();

function showPreview(input, previewAt) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            $("." + previewAt).attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function generateCode(ref, length = 8) {
    let letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let numbers = "0123456789";

    let code = "";

    // Generate first 4 letters
    for (let i = 0; i < 4; i++) {
        code += letters.charAt(Math.floor(Math.random() * letters.length));
    }

    // Generate last 4 numbers
    for (let i = 0; i < 4; i++) {
        code += numbers.charAt(Math.floor(Math.random() * numbers.length));
    }
    if (ref) {
        $(ref).val(code);
    } else {
        return code;
    }
}

function confirmationModal(act) {
    $("#confirmation_modal").modal(act);
}

// PRODUCT - starting
function updateProductImageTitle(url, id) {
    var title = $("#galleryImageTitle" + id).val();
    $.ajax({
        url: url, // Adjust the route
        type: "POST",
        data: {
            _token: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            id: id,
            title: title,
        },
        success: function (response) {
            if (response.success) {
                iziToast.success({
                    title: "Success!",
                    message: response.message,
                    position: "topRight",
                });
            } else {
                iziToast.error({
                    title: "Success!",
                    message: "Failed to update title.",
                    position: "topRight",
                });
            }
        },
        error: function (xhr) {
            alert("Error: " + xhr.responseJSON.message);
        },
    });
}
function deleteProductGalleryImage(url, id) {
    confirmationModal("show");

    $("#confirmed").click(function () {
        $.ajax({
            url: url, // Update with your actual route
            type: "GET",
            data: {
                _token: document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            success: function (response) {
                confirmationModal("hide");
                $("#galleryImageBox" + id).remove();
                iziToast.success({
                    title: "Success!",
                    message: "Image deleted successfully!",
                    position: "topRight",
                });
            },
            error: function () {
                confirmationModal("hide");
                iziToast.error({
                    title: "Success!",
                    message: "Failed to delete image.",
                    position: "topRight",
                });
            },
        });
    });
}
function updateReviewStatus(id, status, url) {
    status = status > 0 ? 0 : 1; // Toggle status

    $.post(url, {
        _token: document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
        id: id,
        status: status,
    })
        .done((response) => {
            iziToast[response.success ? "success" : "error"]({
                title: response.success ? "Success!" : "Error!",
                message: response.message || "Failed to update status.",
                position: "topRight",
            });
        })
        .fail((xhr) => {
            iziToast.error({
                title: "Error!",
                message: xhr.responseJSON?.message || "Something went wrong!",
                position: "topRight",
            });
        });
}



function deleteProductFaq(ref, id) {
    confirmationModal("show");

    $("#confirmed").click(function () {
        $.ajax({
            url: ref, // Update with your actual route
            type: "GET",
            data: {
                _token: document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            success: function (response) {
                confirmationModal("hide");
                $(".card" + id).remove();
                iziToast.success({
                    title: "Success!",
                    message: "Image deleted successfully!",
                    position: "topRight",
                });
            },
            error: function () {
                confirmationModal("hide");
                iziToast.error({
                    title: "Success!",
                    message: "Failed to delete image.",
                    position: "topRight",
                });
            },
        });
    });
}

// PRODUCT - ending

/*
function showPreview(input) {
    const previewContainer = document.getElementById('previewContainer');
    const previewImage = document.getElementById('previewImage');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        previewContainer.style.display = 'none';
    }
}
*/
