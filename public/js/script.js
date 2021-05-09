jQuery(document).ready(function($){
    // CREATE
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var book_phone = {
            bp_name: jQuery('#bp_name').val(),
            bp_tel: jQuery('#bp_tel').val(),
        };
        var state = jQuery('#btn-save').val();
        var type = "POST";
        var id = jQuery('#id').val();
        var ajaxurl = 'book_phone';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: book_phone,
            dataType: 'json',
            success: function (data) {
                var book_phone = '<tr id="book_phone' + data.id + '"><td>' + data.id + '</td><td>' + data.bp_name + '</td><td>' + data.bp_tel + '</td>';
                if (state == "add") {
                    jQuery('#book_phone-list').append(book_phone);
                } else {
                    jQuery("#book_phone" + id).replaceWith(book_phone);
                }
            },
        });
    });
});
