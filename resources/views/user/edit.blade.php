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
        <div class="row d-flex justify-content-center ">
            <div class="card mt-5 col-8">
                <div class="card-header">
                    User Edit Form
                </div>
                <div class="card-body ">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                  </div>
                    <form action="{{route('user.update',$user->id)}}" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name" value={{$user->name}}>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="pass" placeholder="password" value="{{$user->password}}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">update</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>