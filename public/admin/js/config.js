$("#config_form").validate({
    onfocusout: false,
    onkeyup: false,
    focusInvalid: false,
    rules: {
        email: {
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
        quantity_event_home: {
            number: true,
            min: 1,
            max:20,
        },
        quantity_event_type: {
            number: true,
            min: 1,
            max:20,
        },
    },
    submitHandler: function(form) {
        form.submit();
    }

});
