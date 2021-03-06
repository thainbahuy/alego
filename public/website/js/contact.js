$(function () {
    var dateToday = new Date();
    $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: dateToday,
    });

    $(document).on("click", ".close", function () {
        location.reload();
    });
    $(document).on("click", ".modal", function () {
        location.reload();
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
            sendContact();
        }

    });
});

function sendContact() {
    $("#submit_contact_btn").attr("disabled", true);
    $.ajax(
        {
            url: $("#contact_form").attr('action'),
            type: "post",
            data:  $("#contact_form").serialize(),
        })
        .done(function (data) {
            $('#myModal').show();
            $('#content-mess').text(data.success);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('server not responding...');
        });
}
