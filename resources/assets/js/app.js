/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jquery.fancybox');
require('./bootstrap-select.min');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

$(window).on('load', function () {
    console.log('doc ready');

    $(".se-pre-con").fadeOut("slow");

    $("#js-click-welcome").click(function () {
        $('html,body').animate({
                scrollTop: $('.purpose').offset().top -77},
            'slow');
    });
    $('a.group').fancybox();

    $('.selectpicker').selectpicker({
        style: 'btn-info',
    });

})


