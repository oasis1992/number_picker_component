$(document).ready(function () {
    $('.btn-picker').click(function (e) {
        e.preventDefault();
        const type = $(this).attr('data-type')
        const fieldName = $(this).attr('data-field');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());

        if(type === 'min') {
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
                $('#number_picker_' + fieldName).html(currentVal - 1)
            }
            return
        }

        // type is max
        if(currentVal < input.attr('max')) {
            input.val(currentVal + 1).change();
            $('#number_picker_' + fieldName).html(currentVal + 1)
        }
    })
})