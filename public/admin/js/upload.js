$("#image_choose_btn").change(function () {

    if (this.files && this.files[0] && this.files[0].size < 3000000) {
        var reader = new FileReader();
        reader.onload = function(e) {
            //upload
            uploadImageToServer(e.target.result,2)
        }
        reader.readAsDataURL(this.files[0]);

    } else {
        alert('file to large or not choose yet !');
        $("#image_choose_btn").val('');
    }

});

function uploadImageToServer(image,option) {
    $('#loader').show();
    $.ajax(
        {
            url: route('admin.uploadImage.service'),
            type: "post",
            data: {
                'image': image,
                'option': option,
            },
        }).done(function (response) {
        //preview
        $('.imgKLIK5').attr('src',image);
        //set input
        $('#image_cover').val(response.link);
        $('#image_cover_key').val(response.deletehash);
        $('#loader').hide();

    }).fail(function (response) {
        alert('server not responding...');
        $('#loader').hide();
    });
    $("#image_choose_btn").val('');
}
