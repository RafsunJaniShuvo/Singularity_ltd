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
          <div class="card d-flex justify-content-center">
            <div class="row ">
               
                  <div class=" col-lg-12 col-md-8 col-sm-6 mt-3">
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
                                  <a href="{{route('user.delete',$item->id)}}" data-id="{{$item->id}}" class="btn btn-danger delete_user"> Delete </a>
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
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
        {{-- <script>
          $(document).ready(function(){
            $(document).on('click','.delete_user',function(){
              let product_id =$(this).data('id');
              console.log(product_id);
                  $.ajax({
                    url:"{{route('user.delete')}}",
                    method:'GET',
                    data:{product_id:product_id},
                    success: function(res){
                      console.log(res);
                    },
                    error:function(err){
                      console.log(err);
                    }
                });
            });
        })
        </script> --}}
            
        
  
      </body>
</html>