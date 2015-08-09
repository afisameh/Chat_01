$(document).ready(function () {

    $('.chat_head').click(function () {
        $('.chat_body').slideToggle('slow');
    });
    $('.msg_head').click(function () {
        $('.msg_wrap').slideToggle('slow');
    });

    $('.close').click(function () {
        $('.msg_box').hide();
    });

    $('.user').click(function () {

//        $('.msg_wrap').show();
//        $('.msg_box').show();
//        $("p").append("<strong>Hello</strong>");
        //      $("p").append("<div class='msg_box' style='right:290px'><div class='msg_head'>Sameh<div class='close'>x</div></div><div class='msg_wrap'><div class='msg_body'><div class='msg_a'>This is from A</div><div class='msg_b'>know it even i liked it :)</div><div class='msg_a'>Wow, Thats great to hear from you man </div><div class='msg_push'></div></div><div class='msg_footer'><textarea class='msg_input' rows='4'></textarea></div></div></div>");});

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