$(function () {

    getfeedback();
    $('#form-customer-support').submit(function (e) {
        e.preventDefault();
        var errors = '';

        block = $(this);
        $('#form-customer-support input, #form-customer-support textarea').each(function () {
            var exp = new RegExp('^' + $(this).attr('data-pattern') + '$');
            if (!exp.test($(this).val())) {
                errors += $(this).attr('title') + "<br />";
            }
        });
        if (errors != '') {
            $('.form-response-error').css('display', 'block');
            $('.form-response-error .message').html(errors);
        } else {

            $.ajax({
                url: 'api/feedback',
                type: 'post',
                dataType: 'json',
                data: $(this).serialize(),
                success: function (data) {
                    block.html(data.message);
                    block.parent().css('height', 'auto');
                    $('.form-response-error').css('display', 'none');
                    getfeedback();
                }
            });

        }
    });

    function getfeedback() {
        $.ajax({
            url: 'api/getfeedback',
            type: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            success: function (data) {
                if (data.status != false) {
                    $('.form-response-success').css('display', 'block');
                    $('.form-response-success .message').html('Успешных заявок ' + data.count + '<br />Дата последнего обращения: ' + data.last_date);
                }
            }
        });
    }

});
