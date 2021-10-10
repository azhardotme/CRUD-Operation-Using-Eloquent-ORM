<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>All Post</title>
</head>
<body>
   <section style="padding: top 60px;">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          All Post <a href="/add-post" class="btn btn-success">Create a new Post</a>
                      </div>
                    
                      <div class="card-body">

                      @if(Session::has('post_deleted'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('post_deleted')}}
                        </div>
                          @endif
                        
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Post Title</th>
                                    <th>Post Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->desc}}</td>
                                    <td>
                                        <a href="/posts/{{$post->id}}" class="btn btn-info">Details</a>
                                    </td>
                                    <td>
                                        <a href="/edit-post/{{$post->id}}" class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                               @endforeach
                                </tbody>

                            </table>
                            <form>
                         
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