<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Post</title>
</head>
<body>
   <section style="padding: top 60px;">
       <div class="container">
          <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="card">
                      <div class="card-header">
                     

                          <h2>Edit Post</h2> 
                      </div>

                      <div class="card-body">

                          @if(Session::has('update-post'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('update-post')}}
                          @endif      
                        </div>


                          <form action="{{route('update.post')}}" method="POST">
                              @csrf
                              <input type="hidden" name="id" value="{{$post->id}}">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="title" class="form-control" value="{{$post->title}}">
                            </div>

                            <div class="form-group">
                                <label for="desc">Post Description</label>
                               <textarea name="desc" class="form-control" id="desc" rows="3">{{$post->desc}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Update Post</button>

                          </form>
                      </div>
                  </div>

              </div>
          </div>

       </div>

   </section>


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>