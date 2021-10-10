<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Post Details</title>
</head>
<body>
   <section style="padding: top 60px;">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
  
                      <div class="card-header">
                      <a href="/posts" class="btn btn-success"> Show All Post</a>
                      
                          <h2>Post Details</h2> 
                      </div>

                      <div class="card-body">

                        <h1>{{$post->title}}</h1>
                        <p>{{$post->desc}}</p>

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