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
                  
                        <input type="text" id="id_up" value="{{$user->id}}" hidden>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="up_name" placeholder="name" value={{$user->name}}>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="up_email" placeholder="name@example.com" value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="up_pass" placeholder="password" value="{{$user->password}}">
                        </div>
                        <div class="mb-3">
                            <button type="" class="btn btn-primary" id="update">update</button>
                        </div>
                
                </div>
              </div>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click','#update',function(){
               // alert("update");
               let up_id =$('#id_up').val();
                let up_name =$('#up_name').val();
                let up_email =$('#up_email').val();
                let up_pass =$('#up_pass').val();
                console.log(up_id,up_name,up_email,up_pass);
                $.ajax({
                    url:"{{route('user.update')}}",
                    method : 'POST',
                    data:{up_id:up_id, up_name:up_name,up_email:up_email,up_pass:up_pass},
                    success:function(res)
                    {
                        if(res.status=='success'){
                            alert('User Updated Successfully');
                        }
                    },
                    error:function(err)
                    {
                            alert(err);
                        
                    }
                })
            }) 
            
        })
    </script>
  </body>
</html>