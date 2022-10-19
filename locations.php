<!-- <!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html> -->
<!-- <div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br>
            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
        </div>
    </div> -->
    

    <!-- </date_interval_create_from_date_string($row->date); -->
<!DOCTYPE html>
<html>
  
<head>
    <style type="text/css">
  
        /* Set the size of the div element 
        that contains the map */
        #map {
            height: 400px;
            width: 400px;
        }
          
        h2 {
            color: #308d46;
        }
    </style>
</head>
  
<body>
    <h2>
        Add Google Map on Your 
        Webpage: Geeksforgeeks
    </h2>
  
    <!--The div element for the map -->
    <div id="map"></div>
  
    <!--Add a script by google -->
    <script src="https://maps.googleapis.com/maps/api/js?key=<AIzaSyAFuYEf34_8Y8Ey91I5QH52e-75HNTtB94>&callback=initMap&libraries=&v=weekly"
        async>
    </script>
  
    <script>
  
        // Initialize and add the map
        function initMap() {
  
            // The location of Geeksforgeeks office
            const gfg_office = {
                lat: 28.50231,
                lng: 77.40548
            };
  
            // Create the map, centered at gfg_office
            const map = new google.maps.Map(
                    document.getElementById("map"), {
  
                // Set the zoom of the map
                zoom: 17.56,
                center: gfg_office,
            });
        }
    </script>
</body>
  
</html>