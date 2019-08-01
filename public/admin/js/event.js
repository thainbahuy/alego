function deleteEvent(urlAjax, id) {
    $.ajax(
        {
            url: urlAjax,
            type: "get",
            data: {'id': id},
            // done: function (data) {
            //     alert(data.status);
            // },
            statusCode: {
                200: function () {
                    $('#row'+id).remove();
                },
            },
            fail : function (jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            }
        })


}


