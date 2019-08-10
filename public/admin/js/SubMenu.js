function deleteSubMenu(urlAjax, id) {
    $.ajax(
        {
            url: urlAjax,
            type: "get",
            data: {'id': id},
        }).done(function (response) {
        $('#rowSub' + id).remove();
    }).fail(function (response) {
        alert('server not responding...');
    })
}

$("#add_submenu_form").validate({
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
            maxlength: 50,
            minlength: 5,
        },
        menu_id: {
            required: true,
        },

    },
    submitHandler: function(form) {
        form.submit();
    }

});
