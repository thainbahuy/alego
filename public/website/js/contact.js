$(function () {
    var dateToday = new Date();
    $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: dateToday,
    });

    $("#submit_contact_btn").click(function (e) {
        //alert('ok');
        e.preventDefault(e);
        $("#submit_contact_btn").attr("disabled",true);
        $("#contact_form").submit();
    })
});
