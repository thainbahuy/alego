
$(document).ready(function () {
    $('#delete_btn').on('click', function () {
        let id = $(this).attr('data-id');

        deleteBackground(id);
        $('#deleteModalCenter').modal('hide');
    });
});

function showModelDeleteEvent(id) {
    $('#deleteModalCenter').modal('show');
    $('#delete_btn').attr('data-id', id);
}

function deleteBackground(id) {
    $.ajax(
        {
            url: route('admin.background.list_background.delete'),
            type: "get",
            data: {'id': id},
        }).done(function (response) {
        $('#rowBackground' + id).remove();
    }).fail(function (response) {
        alert('server not responding...');
    })
}

var backgroundForm = document.getElementById("backgroundForm");
if(backgroundForm != null ){
    $("#backgroundForm").validate({
        ignore: "",
        onfocusout: false,
        onkeyup: false,
        focusInvalid: false,
        rules: {
            position :{
                number:true,
            },
            'image_cover[link]': {
                required: true,
            },
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
}

$("#image_choose_btn").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            //upload
            uploadImageToServer(e.target.result, 2);
        }
        reader.readAsDataURL(this.files[0]);
    } else {
        alert('image is not choose yet !');
        $("#image_choose_btn").val('');
    }
});

function uploadImageToServer(image, option) {
    $('#loader').show();
    $.ajax(
        {
            url: route('admin.uploadImage.service'),
            type: "post",
            data: {
                'image': image,
                'option': option,
            },
        }).done(function (response) {
        //preview
        $('.imgKLIK5').attr('src', image);
        //set input
        $('#image_cover').val(response.link);
        $('#image_cover_key').val(response.deletehash);
        $('#loader').hide();

    }).fail(function (response) {
        alert('server not responding...');
        $('#loader').hide();
    });
    $("#image_choose_btn").val('');
}
