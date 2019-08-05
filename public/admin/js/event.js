

function deleteEvent(urlAjax, id) {
    $.ajax(
        {
            url: urlAjax,
            type: "get",
            data: {'id': id},
        }).done(function (response) {
        $('#rowEvent' + id).remove();
    }).fail(function (response) {
        alert('server not responding...');
    })

}


$("#add_eventfilm_form").validate({
    onfocusout: false,
    onkeyup: false,
    focusInvalid: false,
    rules: {
        name: {
            required: {
                depends: function() {
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
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            maxlength: 30,
            minlength: 5,
        },
        director: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            maxlength: 30,
            minlength: 5,
        },
        editor: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            maxlength: 30,
            minlength: 5,
        },
        description: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            maxlength: 500,
            minlength: 5,
        },
        author: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            maxlength: 30,
            minlength: 5,
        },
        image_cover: {
            required: true,
        },
        video_link: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            url: true,
        },
    },
    submitHandler: function(form) {
        form.submit();
    }

});


