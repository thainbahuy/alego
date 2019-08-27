$(function () {
    $('#test').DataTable({
        processing: true,
        serverSide: true,
        bInfo: false,
        "lengthMenu": [[5, 10, 15, 20, 25, 30], [5, 10, 15, 20, 25, 30]],
        ajax: {
            url: route('view.admin.index'),
        },
        columns: [
            {data: 'cname'},
            {data: 'image_cover'},
            {data: 'author'},
            {data: 'subMenu'},
            {data: 'action'},
        ]
    });

});
