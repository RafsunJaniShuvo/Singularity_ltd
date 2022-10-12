<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>outlet!</title>
  </head>
  <body>
    

    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="card mt-5 col-8">
                <div class="card-header">
                    Outlet!!!
                </div>
                <div class="card-body ">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                  </div>
                    <form action="{{route('outlet.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="Latitude" class="form-label">Latitude</label>
                            <input type="number" class="form-control" name="latitude" id="Latitude" placeholder="Latitude">
                        </div>
                        <div class="mb-3">
                            <label for="Longitude" class="form-label">Longitude</label>
                            <input type="number" class="form-control" name="longitude" id="Longitude" placeholder="Longitude">
                        </div>
                        <div class="mb-3">
                            <label for="Image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Image">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>