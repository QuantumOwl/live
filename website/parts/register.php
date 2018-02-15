<!-- Main Content -->
<section class="content-wrap full youplay-login">

  <!-- Banner -->
  <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('assets/images/banner-bg.png'); opacity:1"></div>

    <div class="info">
      
        <div class="container align-center">
          <div class="youplay-form">
            <h2>Register</h2>
            <div name="registerErrors">
              
              
            </div>
            <div>



      <form method="post" action="index.php?page=doRegister">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
          <input type="hidden" name="action" value="login">
        </div>
        <div class="form-group">
          <label for="password1">Password</label>
          <input type="password" class="form-control" name="password1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="password2">Confirm Password</label>
          <input type="password" class="form-control" name="password2" placeholder="Password">
        </div>
        
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" name="firstName" placeholder="John">
        </div>
        <div class="form-group">
          <label for="LastName">Last Name</label>
          <input type="text" class="form-control" name="lastName" placeholder="Doe">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="john_doe@hotmail.com">
        </div>
        <button type="submit"  name="registerButton" class="btn btn-primary">Register</button>
        
        
      </form>

  
  

            </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- /Banner -->

</section>
<!-- /Main Content -->
