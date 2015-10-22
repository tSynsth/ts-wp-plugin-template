jQuery(function ($) {
	// jQuery code comes here

    $(document).ready(function () {
        ts_ptshortcodeajax();
    });

    function ts_ptshortcodeajax() {

        var parent = $('*[class*="ts-ptshortcodeajax-"]');

        $.each(parent, function (i, value) {

            var item = $(this);

            var button = item.find('.btn'),
                callback = item.find('.callback');

            button.on('click', function () {

                var post_id = $(this).data('id');
                var field = $(this).data('field');

                $.ajax({
                    url: TSPTSC.ajax_url,
                    type: 'post',
                    data: {
                        action: 'ptshortcodeajax',
                        post_id: post_id,
                        field: field
                    },
                    success: function (response) {
                        //alert(response);
                        callback.html(response);
                    }
                });
            });
        });
    }
});