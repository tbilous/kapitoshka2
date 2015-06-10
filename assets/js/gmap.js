/**
 * Created by 222 on 21.05.2015.
 */
$(document).ready(function () {


    var templateUrl = blabla.stylesheet_directory;

    var point = templateUrl+'/assets/img/map_point.png';


    function initialize() {
        var latlng = new google.maps.LatLng(48.267640, 25.943953);
        var settings = {
            zoom: 18,
            center: latlng,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("map"), settings);
        var companyImage = new google.maps.MarkerImage(templateUrl+'/assets/img/map_point.png',
            new google.maps.Size(100,50),
            new google.maps.Point(0,0),
            new google.maps.Point(50,50));
        var companyShadow = new google.maps.MarkerImage(templateUrl+'/assets/img/shadow.png',
            new google.maps.Size(130,50),
            new google.maps.Point(0,0),
            new google.maps.Point(65, 50));
        var companyPos = new google.maps.LatLng(48.267640, 25.943953);
        var companyMarker = new google.maps.Marker({
            position: companyPos,
            map: map,
            icon: companyImage,
            shadow: companyShadow,
            title:"Капітошка",
            zIndex: 3});
    }
    initialize();
});