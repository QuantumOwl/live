<!-- Main Content -->
<section class="content-wrap full youplay-login">

  <!-- Banner -->
  <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('assets/images/banner-bg.png'); opacity:1"></div>

    <div class="info">
      <div>
        <div class="container align-center">
          <div class="youplay-form">
            <h1>Login</h1>

           

            <div>
<div class="row">
  <div class="col-sm-3">
    &nbsp;
  </div>

      <form method="post" action="index.php?page=doLogin">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" autofocus>
          <input type="hidden" name="action" value="login">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="h6"></div>
        
          <a href="?page=register"class="btn btn-primary h6">Register</a>
        
      </form>
      

  <div class="col-sm-3">
    &nbsp;
  </div>
</div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Banner -->

</section>
<!-- /Main Content -->
