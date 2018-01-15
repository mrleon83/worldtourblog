    <style>
       #map {
        height: 500px;
        width: 100%;
        border: 2px solid #000;
       }
    </style>

<div class="row">
  <div class="col-md-12" id="heading2">
    <h4>Where are Cat &amp; Leon ? </h4>
    <div id= "place"></div>
    </div>
</div>
</br>



    <div id="map"></div>
    <script>


var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();
      var uluru;
      var place;
      switch(mm)
      {
      case 11:
        if(dd < 13)
        {
        uluru = {lat: 52.1017, lng: -0.949877};
        place = "England!";
        }
        if(dd == 14)
        {
        uluru = {lat:19.0760, lng: 72.8777};
        place  = "Mumbai!";
        }
        if(dd >= 15 && dd <= 30)
        {
        uluru = {lat:6.0535, lng: 80.2210};
        place  = "Sri Lanka!";
        }
        break;
      case 12:
        if(dd == 1)
        {
        place = "Kuala Lumpa!";
        uluru = {lat:3.1390, lng: 101.6869};
        }
        if(dd >= 2 && dd <= 5)
        {
        place = "Vietnam!";
        uluru = {lat:21.0278, lng:105.8342};
        }
        if(dd >= 6 && dd <= 7)
        {
        place = "Singapore!";
        uluru = {lat: 1.3521, lng:103.8198};
        }
        if(dd >= 8 && dd <= 18)
        {
        place = "gold coast!";
        uluru = {lat:28.0167, lng:153.4000};
        }
        if(dd >= 19 && dd <= 29)
        {
        place = "Adelaide!";
        uluru = {lat:34.9285, lng:138.6007};
        }
        if(dd >= 30)
        {
        place = "Sydney!";
        uluru = {lat:33.8688,lng:151.2093};
        }
      break; 
      case 1:
      if(dd == 1 || dd == 2)
      {
        place = "Sydney!";
        uluru = {lat:33.8688,lng:151.2093};
      }
      if(dd == 3)
      {
        place = "Hawaii - Honolulu!";
        uluru = {lat:21.3069, lng:157.8583};
      }
      if(dd >= 4 && dd <= 7)
      {
        place = "Hawaii - Maui!";
        uluru = {lat:20.7984, lng:156.3319};
      }
      if(dd == 8)
      {
        place = "Hawaii - Honolulu!";
        uluru = {lat:21.3069, lng:157.8583};
      }
      if(dd >= 9 && dd<= 11)
      {
        place = "USA - San Francisco!";
        uluru = {lat:37.7749, lng:122.4194};
      }
      if(dd >= 12)
      {
        place = "UK - Woodend!";
        uluru = {lat:52.1363, lng:1.0996};
      }
      break;  
    }


      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

     document.getElementById("place").innerHTML = place;

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlxsWj_XIwQL1QqR94V11q7vFPYca3m6k&callback=initMap">
    </script>
  </body>
</html>
      

