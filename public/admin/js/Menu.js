
$(document).ready(function () {

    $('#delete_menu_btn').on('click', function () {
        let id = $(this).attr('data-id');

        deleteMenu(id);
        $('#deleteModalMenu').modal('hide');

    });

});

function showModalDeleteMenu(id) {
    $('#deleteModalMenu').modal('show');
    $('#delete_menu_btn').attr('data-id', id);
}

function deleteMenu(id) {
    $.ajax(
        {
            url: route('admin.index.menu.delete'),
            type: "get",
            data: {'id': id},
        }).done(function (response) {
        $('#rowMenu' + id).remove();
    }).fail(function (response) {
        alert('server not responding...');
    })
}

$("#menu_form").validate({
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
            minlength: 3,
        },
    },
    submitHandler: function(form) {
        form.submit();
    }

});
