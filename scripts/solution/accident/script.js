var lat = 46.852969;
var lon = 2.349903;
var mymap = null;
var radars_list = [];
var accidents_list = [];
var markersClusterRadars = new L.MarkerClusterGroup();
var markersClusterAccidents = new L.MarkerClusterGroup();

function radarObj(date, long, lat){
    this.long = long;
    this.lat = lat;
    this.date = new Date(0);
    this.date.setUTCSeconds(date/1000);
}

radarObj.prototype.render = function() {
    var marker = L.marker([this.lat, this.long], {icon: blueIcon});
    markersClusterRadars.addLayer(marker);
};

function accidentObj(date, grav, long, lat){
    this.long = long;
    this.lat = lat;
    this.grav = grav;
    this.date = new Date(0);
    this.date.setUTCSeconds(date/1000);
}

accidentObj.prototype.render = function() {
    if (this.grav == 2){
        var marker = L.marker([this.lat, this.long], {icon: redIcon});
    } else if (this.grav == 1 ){
        var marker = L.marker([this.lat, this.long], {icon: orangeIcon});
    } else {
        var marker = L.marker([this.lat, this.long], {icon: yellowIcon});
    }
    markersClusterRadars.addLayer(marker);
};

var blueIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png',
//  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
//  shadowSize: [41, 41]
});

var yellowIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-yellow.png',
//  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
//  shadowSize: [41, 41]
});

var orangeIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png',
//  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
//  shadowSize: [41, 41]
});

var redIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
//  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
//  shadowSize: [41, 41]
});

function initMap() {
    mymap = L.map('map').setView([lat, lon], 7);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(mymap);
    mymap.addLayer(markersClusterRadars);
    mymap.addLayer(markersClusterAccidents);
}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });

window.onload = function(){
    initMap(); 
    
    var stats = [];
    for (let i=2005; i<=2018; i++){
        stats.push([0, 0, 0]);
    }
    console.log(stats);
    
    for (let i=0; i<radar.length ; i++){
        var r = new radarObj(radar[i][0], radar[i][1], radar[i][2]);
        radars_list.push(r);
    }
    radar = null;
    
    for (let i=0; i<accidents.length ; i++){
        var r = new accidentObj(accidents[i][0], accidents[i][1], accidents[i][2], accidents[i][3]);
        accidents_list.push(r);
        stats[r.date.getFullYear()-2005][r.grav]++;
    }
    accidents = null;
    
    html = ""
    for (let i=2005; i<2018; i++){
        html += "<tr><th>"+i+"</th><td>"+stats[i-2005][0]+"</td><td>"+stats[i-2005][1]+"</td><td>"+stats[i-2005][2]+"</td></tr>"
    }
    $("#table_stat").html(html)
};

$("#year").ionRangeSlider({
    values: [2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018],
    onFinish: function (data) {
        var val = data.from + 2005;
    },
});

$("#update").click(function(){
    markersClusterRadars.clearLayers();
    var year = $("#year").val();
    var mortal = $("#case_mortal").prop('checked');
    var injured = $("#case_injured").prop('checked');
    var unscathed = $("#case_unscathed").prop('checked');
    var radar = $("#radar_visible").prop('checked');

    if (radar){
        for (let i=0; i < radars_list.length; i++){
            if (radars_list[i].date.getFullYear() <= year){
                radars_list[i].render();
            }
        }
    }
    
    if (radar){
        for (let i=0; i < accidents_list.length; i++){
            if (accidents_list[i].date.getFullYear() == year){
                if (
                    (mortal & accidents_list[i].grav == 2) |
                    (injured & accidents_list[i].grav == 1) |
                    (unscathed & accidents_list[i].grav == 0)
                   ){
                    accidents_list[i].render();
                }
            }
        }
    }
});
