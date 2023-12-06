<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <body>
        <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="manga.jpg" width="500" height="600"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="home.php" method="POST">
        <h3 align="center">TOKO ONLINE MANGA</h3>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" name = 'username' class="form-control form-control-lg"
              placeholder="Masukkan Email" />
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name = 'password' class="form-control form-control-lg"
              placeholder="Masukkan Password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>

        </body>
    </head>
</html>