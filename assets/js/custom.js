$(document).ready(function () {
    $('.js-signup').on('click', function (e) {
        $.ajax({
            type: "POST",
            url: "signup_add.php",
            data: {
                'email': $('.js-email').val(),
                'pass': $('.js-pass').val(),
                'secret': $('.js-secret').val(),
            },
            success: function (res) {
                e.preventDefault();
                alert(res);
                (res.includes('success')) && window.location.reload();
            }
        });
    });
    $('.js-signin').on('click', function () {
        $.ajax({
            type: "POST",
            url: "login.php",
            data: {
                'email': $('.js-email').val(),
                'pass': $('.js-pass').val(),
            },
            success: function (res) {
                res ? location.href = "comments.php" : alert("Invalid credentials");
            }
        });
    });
    $('.js-forget').on('click', function () {
        $.ajax({
            type: "POST",
            url: "forget_check.php",
            data: {
                'email': $('.js-email').val(),
                'secret': $('.js-secret').val(),
            },
            success: function (res) {
                $('.js-pass').html(res);
            }
        });
    });
    $('.js-comment-btn').on('click', function (e) {
        $.ajax({
            type: "POST",
            url: "comment_add.php",
            data: {
                'comment': $('.js-comment-text').val(),
            },
            success: function (res) {
                e.preventDefault();
                res && $('.js-wrapper').html(res);
                $('.js-comment-text').val('');
            }
        });
    });
    $('.js-filter').on('click', function () {
        $.ajax({
            type: "POST",
            url: "filter.php",
            success: function (res) {
                $('.js-wrapper').html(res);
            }
        });
    });
});