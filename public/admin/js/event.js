var spinner = $('#loader');
$(document).ready(function () {

    $('#delete_btn').on('click', function () {
        let id = $(this).attr('data-id');

        deleteEvent(id);
        $('#deleteModalCenter').modal('hide');

    });


});

function showModelDeleteEvent(id) {
    $('#deleteModalCenter').modal('show');
    $('#delete_btn').attr('data-id', id);
}

function deleteEvent(id) {
    $.ajax(
        {
            url: route('admin.index.delete'),
            type: "get",
            data: {'id': id},
        }).done(function (response) {
        $('#test').DataTable().ajax.reload();
    }).fail(function (response) {
        alert('server not responding...');
    })

}

//for form validate
var add_eventfilm_form = document.getElementById("add_eventfilm_form");
if(add_eventfilm_form != null){
    $("#add_eventfilm_form").validate({
        ignore: "",
        onfocusout: false,
        onkeyup: false,
        focusInvalid: false,
        rules: {
            name: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 101,
                minlength: 5,
            },
            sub_menu: {
                required: true,
            },
            producer: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 30,
                minlength: 5,
            },
            director: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 30,
                minlength: 5,
            },
            editor: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 30,
                minlength: 5,
            },
            description: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 500,
                minlength: 5,
            },
            author: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 30,
                minlength: 5,
            },
            'image_cover[link]': {
                required: true,
            },
            video_link: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                url: true,
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
        reader.onload = function(e) {
            //upload
            uploadImageToServer(e.target.result,2);
        }
        reader.readAsDataURL(this.files[0]);

    } else {
        alert('image is not choose yet !');
        $("#image_choose_btn").val('');
    }

});

function uploadImageToServer(image,option) {
    spinner.show();
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
            $('.imgKLIK5').attr('src',image);
            //set input
            $('#image_cover').val(response.link);
            $('#image_cover_key').val(response.deletehash);
            spinner.hide();

    }).fail(function (response) {
        spinner.hide();
        alert('server not responding...');
    })
    $("#image_choose_btn").val('');
}
