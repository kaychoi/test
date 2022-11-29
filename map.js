//script.js

var map;
var button = document.getElementById('button');
button.addEventListener('click', changeCenter);
var button1 = document.getElementById('button1');
button1.addEventListener('click', changeCenter1);


function initMap() {
  var area1 = { lat: 34.04762907527862 ,lng: -118.2843198801161 };
  map = new google.maps.Map( document.getElementById('map'), {
      zoom: 12,
      center: area1
    });
    
  new google.maps.Marker({
    position: area1,
    map: map,
    label: "area1"
  });
  
}

function changeCenter(){
  var area2 = { lat: 34.048055775853484, lng: -118.29951191205205 };
  map.panTo(area2);
  map.setZoom(16);
  new google.maps.Marker({
    position: area2,
    map: map,
    label: "area2"
  });
}

function changeCenter1(){
    var area3 = { lat: 34.063181078570615, lng: -118.30240000191453 };
    map.panTo(area3);
    map.setZoom(16);
    new google.maps.Marker({
        position: area3,
        map: map,
        label: "area3"
      });
  }

