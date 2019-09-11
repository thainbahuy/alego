$("#config_form").validate({
    onfocusout: false,
    onkeyup: false,
    focusInvalid: false,
    rules: {
        Email: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            maxlength: 100,
            minlength: 3,
            email: true,
        },
        Quantity_Event_Home: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            number: true,
            min: 1,
            max:25,
        },
        Quantity_Event_Type: {
            required: {
                depends: function() {
                    $(this).val($.trim($(this).val()));
                    return true;
                },
            },
            number: true,
            min: 1,
            max:25,
        },
    },
    submitHandler: function(form) {
        form.submit();
    }

});
