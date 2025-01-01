
$(document).ready(function () {
    $("#subs_button").on('click', function() {
        console.log("Hello clic");
        let emailVal = $('#subscribe_email').val()
        if (emailVal.length > 0) {
            let formData = {
                email: $('#subscribe_email').val(),
                status: 1,
            };

            // Send AJAX POST request
            $.ajax({
                url: '/api/subscribe',
                type: 'POST',
                data: formData,
                success: function (response) {
                    $('#response').html('<p>Success: ' + response.message + '</p>');
                },
                error: function (xhr) {
                    $('#response').html('<p>Error: ' + xhr.responseText + '</p>');
                }
            });
        } else {
            console.log("Please add your email")
        }
    })
});
