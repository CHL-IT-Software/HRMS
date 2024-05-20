<style>
    #map {
        height: 400px;
        }
</style>

<div id="map"></div>
<script>
    var lokasi = "{{ $presensi->lokasi_in }}"
    var lok = lokasi.split(",");
    var latitude = lok[0]
    var longitude = lok[1]
    var map = L.map('map').setView([latitude, longitude], 17);
    var marker = L.marker([latitude, longitude]).addTo(map);
    var circle = L.circle([latitude, longitude], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 50
}).addTo(map);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>
