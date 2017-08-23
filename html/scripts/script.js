"use strict";

$(window).on("load", function () {
    $(".loading-screen").addClass("loaded");
    window.setTimeout(function () {
        $("body").addClass("done");
    }, 300);
    window.setTimeout(function () {
        $("body").css({ "-webkit-transform:": "translateZ(0)", transform: "translateZ(0)", "will-change": 'transform' });
        $(".loading-screen").remove();
    }, 1200);
});

var inputs = $(".input-group input, .input-group textarea");

inputs.each(function (e, a) {
    if ($(a).val().length !== 0 || $(a).val() !== '') $(a).parent().find('label').animate({ top: "0" }, 100);
});

inputs.on('focus', function (e) {

    $(e.target).parent().find('label').animate({ top: "0" }, 100);
}).on('blur', function (e) {

    var target = $(e.target);
    if (target.val().length === 0 || target.val() === '') target.parent().find('label').animate({ top: '25px' }, 100);
});

$("#sendEmail").on("submit", function (e) {
    e.preventDefault();

    $(".error").each(function (e, a) {
        $(a).css({ display: 'none' });
    });
    $(".sending").css({ display: 'table' });
    $.ajax({
        type: 'post',
        url: '../email.php',
        data: $("#sendEmail").serialize(),
        dataType: "json",
        success: function success(data) {
            $(".sending").css({ display: 'none' });
            if (data.error === true) {
                for (var key in data) {
                    if (key === 'error') continue;
                    if (data.hasOwnProperty(key)) {
                        $("#sendEmail #" + key).parent().find(".error").css({ display: 'block' }).text(data[key]);
                    }
                }
            } else if (data.error === false) {
                if (data.success === 'yes') {
                    $(".form-done.success").css({ display: 'table' }).animate({ opacity: 1 }, 500).animate({ opacity: 0 }, 6500, function () {
                        $(this).css({ display: 'none' });
                    });
                } else {
                    $(".form-done.fail").css({ display: 'table' }).animate({ opacity: 1 }, 500).animate({ opacity: 0 }, 6500, function () {
                        $(this).css({ display: 'none' });
                    });
                }
            }
        },
        fail: function fail(data) {
            $(".sending").css({ display: 'none' });
            $(".form-done.fail").css({ display: 'table' }).animate({ opacity: 1 }, 500).animate({ opacity: 0 }, 6500, function () {
                $(this).css({ display: 'none' });
            });
        }
    });
    return false;
});

var showing = false;

$("#slideDown").on('click', function (e) {
    $("#" + $(e.target).attr("data-target")).slideToggle("fast", function () {
        e.target.textContent = showing ? "Mostrar mais" : "Mostrar menos";
        showing = !showing;
    });
});