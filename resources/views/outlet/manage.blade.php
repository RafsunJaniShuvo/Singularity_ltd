<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Outlet!</title>
  </head>
  <body>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 mt-3">
                  <div class="card">
                    <table class="table table-striped table-hover " >
                      <thead>
                        <tr>
                          <th scope="col">Sl. NO</th>
                          <th scope="col">Name</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Latitube</th>
                          <th scope="col">Longitude</th>
                          <th scope="col">Image</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                      @foreach ($outlet as $key=>$item)
                        <tr onclick="initMap({{$item->latitude}},{{$item->longitude}})" >
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$item->name}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->latitude}}</td>
                          <td>{{$item->longitude}}</td>
                          <td>
                            <img src="{{url('upload/outlet/'.$item->image)}}" width="40%" alt="{{$item->name}}}">
                          </td>
                          <td>
                              <span class="btn-group">
                                  <a href="{{route('outlet.edit',$item->id)}}" class="btn btn-success">Edit </a>
                                  <a href="{{route('outlet.delete',$item->id)}}" class="btn btn-danger"> Delete </a>
                              </span>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                  </table>
                  </div>
                    
                    
                </div>
            </div>
        </div>

        <div class="container">
          <div id="map" style="width:100%;height:300px"></div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  <script>

    //show map
    
    // function showMap(lat,long){
    //   console.log(lat,long);
    //   var coord = {lat:lat, lng:long};
    //   console.log(coord);
    //   new google.maps.Map(
    //     document.getElementById("map"),
    //     {
    //       zoom:10,
    //       center: coord
    
    //     }
    //   );
    //   // console.log('ok');
    // }

    // $(document).ready(function(){
    //   showMap(23.76260166709028, 90.43657077033156);
    // })
   
    
    
    // var directionsDisplay,
    //     directionsService,
    //     map;
    
    // function initialize() {
    //   var directionsService = new google.maps.DirectionsService();
    //   directionsDisplay = new google.maps.DirectionsRenderer();
    //   var chicago = new google.maps.LatLng(41.850033, -87.6500523);
    //   var mapOptions = { zoom:7, mapTypeId: google.maps.MapTypeId.ROADMAP, center: chicago }
    //   map = new google.maps.Map(document.getElementById("map"), mapOptions);
    //   directionsDisplay.setMap(map);
    // }
    
    // initialize();
        
   
    let map;

function initMap(lat,long) {
  console.log(lat,long);
    const myLatLng = { lat: lat, lng: long };
    map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom: 13,
    });
    new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Outlet!",
    });
}
window.initMap = initMap;
  
    </script>
   
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNwfzUAhZpeUx_L328LvK3Tx4UChvVObc&callback=initMap">
    </script>
  </body>
</html>

