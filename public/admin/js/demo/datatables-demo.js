// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
      "bInfo" : false,
  });
    $('#dataTableMenu').DataTable({
        "bPaginate": false,
        "bInfo" : false,
        "searching": false,
        "bLengthChange": false,
    });

    $('#dataTableSubMenu').DataTable({
        "bPaginate": false,
        "bInfo" : false,
        "searching": false,
        "bLengthChange": false,
    });
});
