<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User!</title>
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
                          <th scope="col">Email</th>
                          <th scope="col">Password</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                      @foreach ($data as $key=>$item)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->password}}</td>
                          <td>
                              <span class="btn-group">
                                  <a href="{{route('user.edit',$item->id)}}" class="btn btn-success">Edit </a>
                                  <a href="{{route('user.delete',$item->id)}}" class="btn btn-danger"> Delete </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>