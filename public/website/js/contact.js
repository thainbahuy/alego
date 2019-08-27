$(function () {
    var dateToday = new Date();
    $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: dateToday,
    });

    // $("#submit_contact_btn").click(function (e) {
    //     e.preventDefault(e);
    //     $("#submit_contact_btn").attr("disabled", true);
    //     $("#contact_form").submit();
    // });

    $(document).on("click", ".close", function () {
        $('#myModal').hide();
    });
    $(document).on("click", ".modal", function () {
        $('#myModal').hide();
    });

    $("#contact_form").validate({
        onfocusout: false,
        onkeyup: false,
        focusInvalid: false,
        rules: {
            email: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                email: true,
                maxlength: 100,
            },
            name: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 100,
            },
            phone: {
                required: {
                    depends: function () {
                        $(this).val($.trim($(this).val()));
                        return true;
                    },
                },
                maxlength: 20,
                minlength: 6,
            },
            date: {
                required: true,
            },

        },
        submitHandler: function (form) {
            $("#submit_contact_btn").attr("disabled", true);
            form.submit();
        }

    });
});
