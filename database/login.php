<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body { 
        background-image: url("https://wallpapercave.com/wp/wp4981488.jpg"); 
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body>
  <div class="container ">

    <div class="card mt-5 w-50 justify-content-center mx-auto">
      <h5 class="card-header mx-auto">Login</h5>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary text-bg-info">LOGIN</button>
        </form>
        <br> 
          <p class="text-center">belum punya akun? <a href="register.php">register akun</a></p>
      </div>
    </div>
  </div>
</div>
  </body>
  </html>