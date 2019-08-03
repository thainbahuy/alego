

function deleteEvent(urlAjax, id) {
    $.ajax(
        {
            url: urlAjax,
            type: "get",
            data: {'id': id},
        }).done(function (response) {
        $('#row' + id).remove();
    }).fail(function (response) {
        alert('server not responding...');
    })

}


$("#add_eventfilm_form").validate({
    rules: {
        name: {
            required: true,
            maxlength: 101,
            minlength: 5,
        },
        sub_menu: {
            required: true,
        },
        producer: {
            required: true,
            maxlength: 30,
            minlength: 5,
        },
        director: {
            required: true,
            maxlength: 30,
            minlength: 5,
        },
        editor: {
            required: true,
            maxlength: 30,
            minlength: 5,
        },
        description: {
            required: true,
            maxlength: 500,
            minlength: 5,
        },
        author: {
            required: true,
            maxlength: 30,
            minlength: 5,
        },
        image_cover: {
            required: true,
        },
        video_link: {
            required: true,
        },
    },
    submitHandler: function(form) {
        form.submit();
    }

});


