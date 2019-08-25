$(function () {
    var dateToday = new Date();
    $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: dateToday,
    });

    $("#submit_contact_btn").click(function (e) {
        e.preventDefault(e);
        $("#submit_contact_btn").attr("disabled",true);
        $("#contact_form").submit();
    });

    $(document).on("click", ".close", function () {
        $('#myModal').hide();
    });
    $(document).on("click", ".modal", function () {
        $('#myModal').hide();
    });
});
