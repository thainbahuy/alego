
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


