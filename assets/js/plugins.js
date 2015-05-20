// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.


$(window).bind("load", function() { //wait for fool load window

    $(document).ready(function () {

        //var $menu = $("#side-navigation");
        //
        //$(window).scroll(function(){
        //    if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
        //        $menu.removeClass("default").addClass("fixed");
        //    } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
        //        $menu.removeClass("fixed").addClass("default");
        //    }
        //});//scroll
        //
        //side menu
        var h_hght = 500; // высота шапки
        var h_mrg = 0;     // отступ когда шапка уже не видна

            jQuery(window).scroll(function(){
                var top = jQuery(this).scrollTop();
                var elem = jQuery('#side-navigation');
                if (top+h_mrg < h_hght) {
                    elem.css('top', (h_hght-top));
                    elem.removeClass('fix');
                } else {
                    elem.css('top', h_mrg);
                    elem.addClass('fix');
                }
            });

        var toTop = $('#up');
        toTop.hide();


        $(window).scroll(function(){
            if($(window).scrollTop() > 100){
                toTop.fadeIn(300);
            }
            if($(window).scrollTop() < 100){
                toTop.fadeOut(300);
            }
        });

//Обработка нажатия на кнопку "Вверх"
        $("#up").click(function(){
//Необходимо прокрутить в начало страницы
            var curPos=$(document).scrollTop();
            var scrollTime=curPos/1.73;
            $("body,html").animate({"scrollTop":0},scrollTime);
        });

//Обработка нажатия на кнопку "Вниз"
        $("#down").click(function(){
//Необходимо прокрутить в конец страницы
            var curPos=$(document).scrollTop();
            var height=$("body").height();
            var scrollTime=(height-curPos)/1.73;
            $("body,html").animate({"scrollTop":height},scrollTime);
        });




    }); /*end ready function*/
});//end of wait for fool load window

