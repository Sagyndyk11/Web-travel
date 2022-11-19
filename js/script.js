$(document).ready(function () {
    $("form").submit(function () {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/send.php',
            data: formNm.serialize(),
            beforeSend: function () {
                $(formNm).html('<p style="text-align:center">Отправка...</p>');
            },
            success: function (data) {
                $(formNm).html('<p style="text-align:center">'+data+'</p>');
            },
            error: function (jqXHR, text, error) {
                $(formNm).html(error);
            }
        });
        return false;
    });
});