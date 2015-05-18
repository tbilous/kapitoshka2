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


// Карта Google с кастомным маркером
//alert(directory_uri.stylesheet_directory_uri);
var th_path = directory_uri.stylesheet_directory_uri;
//alert(th_path);
th_path2 = th_path+'/assets/img/map_point.png'
//alert(th_path2);
function initialize() {
    var latlng = new google.maps.LatLng(48.268077, 25.942986);
    var settings = {
        zoom: 18,
        center: latlng,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("map"), settings);
    var companyImage = new google.maps.MarkerImage(th_path2,
        new google.maps.Size(100,50),
        new google.maps.Point(0,0),
        new google.maps.Point(50,50));
    var companyShadow = new google.maps.MarkerImage('img/map_shadowt.png',
        new google.maps.Size(130,50),
        new google.maps.Point(0,0),
        new google.maps.Point(65, 50));
    var companyPos = new google.maps.LatLng(48.268, 25.9432);
    var companyMarker = new google.maps.Marker({
        position: companyPos,
        map: map,
        icon: companyImage,
        shadow: companyShadow,
        title:"Капітошка",
        zIndex: 3});
}

$(window).bind("load", function() { //wait for fool load window

    $(document).ready(function () {
        initialize();
    });

    $(document).ready(function(){
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
    });


});//end of wait for fool load window

