@extends('layouts.home')

@section('main')
    <div class="col-lg-12 transportation">
    <div style="background:#eee;border:1px solid #ccc;padding:5px 10px; text-align:center"><span style="font-size:25px "><span style="font-family:trebuchet\ ms,helvetica,sans-serif ">Transportation System:</span></span></div>
        

		<h1 style="text-align:center" class="mark">কোথা হতে কোথা যেতে চান ?</h1>
    <form id="calculate-route" name="calculate-route" action="#" method="get" style="text-align:center">
      <label for="from" class="mark">Starting Point (A):</label>
	  	  <select class="form" id="from">
	  @foreach($transport as $transportation)
    <option>{{$transportation->source}}</option>
        @endforeach
		  </select>
     <!-- <input type="text" id="from" name="from" required="required" placeholder="An address" size="30" />-->
      <a id="from-link" href="#" class="mark">Get my position</a>
      <br />

      <label for="to" class="mark">Ending Point (B):</label>
	  	  <select class="form" id="to">
	  @foreach($transport as $transportation)
    <option>{{$transportation->destination}}</option>
        @endforeach
		  </select>
    <!--  <input type="text" id="to" name="to" required="required" placeholder="Another address" size="30" /> -->
      <a id="to-link" href="#" class="mark">Get my position</a>
      <br />

      <input type="submit" value="OK" />
      <input type="reset" />
    </form>
    <div id="map"></div>
    <p id="error"></p>

		
	


    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
      function calculateRoute(from, to) {
        // Center initialized to Naples, Italy
        var myOptions = {
          zoom: 10,
          center: new google.maps.LatLng(40.84, 14.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);

        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
          origin: from,
          destination: to,
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: mapObject,
                directions: response
              });
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );
      }

      $(document).ready(function() {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
        }

        $("#from-link, #to-link").click(function(event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));

          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK)
                $("#" + addressId).val(results[0].formatted_address);
              else
                $("#error").append("Unable to retrieve your address<br />");
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });

        $("#calculate-route").submit(function(event) {
          event.preventDefault();
		  console.log($("#from").val()+" "+$("#to").val());
          calculateRoute($("#from").val(), $("#to").val());
        });
      });
    </script>
    <style type="text/css">
      #map {
        width: 1100px;
        height: 550px;
		 margin: auto;
		 
		
      }
    </style>
 
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9UpcpoOEyBu1Z9bxxnjhc7wj8Omb9e8g&callback=initMap">
    </script>
 
   	
		
    </div>

@endsection