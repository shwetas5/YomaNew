<?php $this->load->view('header'); 
$count = count($sitemaster_records);
?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Yoma(<?php echo $count?>)</h4>
       <ul class="nav flex-column">
<?php foreach($sitemaster_records as $key => $sitemaster_record){ ?>
    <li class="nav-item">
      <a class="nav-link" href="#"><?php echo $sitemaster_record['smSitecode'] ?></a>
<input id="latitude" type="hidden" value="<?php echo $sitemaster_record['smLatitude'] ?>" name="">
<input id="longitude" type="hidden" value="<?php echo $sitemaster_record['smLongitude'] ?>" name="">
    </li>
    <?php } ?>

  </ul><br>
      
    </div>

    <div class="col-sm-9" id="map">
      
    </div>
  </div>
</div>

<script>
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("map"),{
          zoom: 13,
          center: locationRio,
          gestureHandling: 'cooperative'
        });
    map.setTilt(50);
        
    // Multiple markers location, latitude, and longitude
    var  markers = [
        <?php if(!empty($sitemaster_records)){
            foreach($sitemaster_records as $key => $sitemaster_record){
                echo '["'.$sitemaster_record['smSitecode'].'", '.$sitemaster_record['smLatitude'].', '.$sitemaster_record['smLongitude'].'],';
            }
        }
        ?>
    ];
     //console.log(markers);
    //alert(markers);                    
    // Info window content
    /*var infoWindowContent = [
        <?php if($result2->num_rows > 0){
            while($row = $result2->fetch_assoc()){ ?>
                ['<div class="info_content">' +
                '<h3><?php echo $row['name']; ?></h3>' +
                '<p><?php echo $row['info']; ?></p>' + '</div>'],
        <?php }
        }
        ?>
    ];*/
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(12);
        map.setCenter(position);
        google.maps.event.removeListener(boundsListener);
    });
    
}

// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
</script>


