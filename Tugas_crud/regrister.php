<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      background-image: url("https://images.hdqwalls.com/download/anime-girl-moescape-alone-standing-4k-nz-2048x1152.jpg");
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <div class="container ">
    <div class="card mt-5 w-50 justify-content-center mx-auto ">
      <h5 class="card-header mx-auto">regrister</h5>
      <div class="card-body">
        <form action="connect_register.php" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="examplformControlInput1" placeholder="email" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleForControlInput1" class="form-label">username</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username"
              name="username">
          </div>
          <div class="mb-3">
            <label for="exampleForControlInput1" class="form-label">password</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="password"
              name="password">
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary text-bg-success">REGISTER</button>
          </div>
      </div>
      </form>
      <br>
      <p class="text-center">sudah punya akun? <a href="login.php">login akun</a></p>
</body>

</html>