
$(document).ready(function () {

    $('#delete_submenu_btn').on('click', function () {
        let id = $(this).attr('data-id');

        deleteSubMenu(id);
        $('#deleteModalSubMenu').modal('hide');

    });

});

function showModalDeleteSubMenu(id) {
    $('#deleteModalSubMenu').modal('show');
    $('#delete_submenu_btn').attr('data-id', id);
}


function deleteSubMenu(id) {
    $.ajax(
        {
            url: route('admin.index.submenu.delete'),
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
            minlength: 3,
        },
        menu_id: {
            required: true,
        },

    },
    submitHandler: function(form) {
        form.submit();
    }

});
