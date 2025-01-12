
$(document).ready(function () {
    const myCarouselElement = document.querySelector('#carouselExampleIndicators')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
    })
    setInterval(function () {carousel.next()}, 3000);
    $("#subs_button").on('click', function() {
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
                    $('#response').css("color", "var(--bs-primary)");
                    $('#subscribe_email').val('');
                },
                error: function (xhr) {
                    $('#response').html('<p>Error: ' + xhr.responseText + '</p>');
                    $('#response').css("color", "var(--bs-secondary-i)")
                }
            });
        } else {
            $('#response').html('<p>Error: Please enter your email</p>');
            $('#response').css("color", "orangered");
        }
    })

    $("#register_btn").on('click', function() {
        let emailVal = $('#email_id').val()
        if (emailVal.length > 0) {
            let formData = {
                email: $('#email_id').val(),
                status: 1,
            };

            // Send AJAX POST request
            $.ajax({
                url: '/api/subscribe',
                type: 'POST',
                data: formData,
                success: function (response) {
                    $('#responseReg').html('<p>Success: ' + response.message + '</p>');
                    $('#responseReg').css("color", "var(--bs-primary)");
                    $('#email_id').val('');
                },
                error: function (xhr) {
                    $('#responseReg').html('<p>Error: ' + xhr.responseText + '</p>');
                    $('#responseReg').css("color", "var(--bs-secondary-i)")
                }
            });
        } else {
            $('#responseReg').html('<p>Error: Please enter your email</p>');
            $('#responseReg').css("color", "orangered");
        }
    });

    $("#get_started").on('click', function() {
        let emailVal = $('#emailSignupId').val()
        if (emailVal.length > 0) {
            let formData = {
                email: $('#emailSignupId').val(),
                status: 1,
            };

            // Send AJAX POST request
            $.ajax({
                url: '/api/subscribe',
                type: 'POST',
                data: formData,
                success: function (response) {
                    $('#responseSt').html('<p>Success: ' + response.message + '</p>');
                    $('#responseSt').css("color", "var(--bs-primary)");
                    $('#emailSignupId').val('');

                },
                error: function (xhr) {
                    $('#responseSt').html('<p>Error: ' + xhr.responseText + '</p>');
                    $('#responseSt').css("color", "orangered")
                }
            });
        } else {
            $('#responseSt').html('<p>Error: Please enter your email</p>');
            $('#responseSt').css("color", "orangered");
        }
    });

    $('#contact-form').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Gather form data
        let formData = {
            email: $('input[name="emailId"]').val(),
            name: $('input[name="nameId"]').val(),
            phone: $('input[name="phoneId"]').val(),
            company: $('input[name="companyId"]').val(),
            textVal: $('#text-value').val(),
        };


        // Send AJAX POST request
        $.ajax({
            url: '/api/contact_add', // Replace with your API endpoint
            type: 'POST',
            data: formData,
            success: function (response) {
                $('#responseContact').html('<p>Success: ' + response.message + '</p>');
                $('#contact-form').trigger("reset");
            },
            error: function (xhr) {
                $('#responseContact').html('<p>Error: ' + xhr.responseText + '</p>');
            }
        });
    });

    $("#contact_us_cta").on('click', function() {
        window.location.href = "/contact";
    });
});
