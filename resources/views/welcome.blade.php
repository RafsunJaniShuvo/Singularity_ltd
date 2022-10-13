
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

        <div class="container mt-3">
            <div class="row">
                <div class="card-header">
                  <b>Singularity Limited</b>  
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-6">
                            <a href="{{route('adduser')}}" class="btn btn-success">Create User</a>
                            <a href="{{route('user.manage')}}" class="btn btn-secondary">Manage User</a>
                        </div>
                        <div class="col-6" >
                          <a href="{{route('addoutlet')}}"  class="btn btn-success"> Create Outlet</a>
                          <a href="{{route('outlet.manage')}}"  class="btn btn-secondary">Manage Outlet</a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
   
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  </body>
</html>