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
                    User
                </div>
                <div class="card-body ">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                  </div>
                    
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input  type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="pass" placeholder="password">
                        </div>
                        <div class="mb-3">
                            <button type="" class="btn btn-primary " id="save">Save</button>
                        </div>
                    
                </div>
              </div>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click','#save',function(){
                let name =$('#name').val();
                let email = $('#email').val();
                let pass = $('#pass').val();
                //console.log(name,email,pass);
                $.ajax({
                    url:"{{route('user.store')}}",
                    method : 'POST',
                    data:{name:name, email:email,pass:pass},
                    success:function(res)
                    {
                        if(res.status=='success'){
                            alert('Data Added Successfully');
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