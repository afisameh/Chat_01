$(document).ready(function () {

    $('.chat_head').click(function () {
        $('.chat_body').slideToggle('slow');
    });
    $('.msg_head').click(function () {
        $('.msg_wrap').slideToggle('slow');
    });

    $('.close').click(function () {
//        $(this).parent().remove();
        alert("chat");
    });

    $('.user').click(function () {
        $('textarea').keypress(
                function (e) {
                    if (e.keyCode == 13) {
                        var msg = $(this).val();
                        $(this).val('');
                        if (msg != '')
                            $('<div class="msg_b">' + msg + '</div>').insertBefore('.msg_push');
                        $('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
                    }
                });

    });
});