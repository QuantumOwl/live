<!-- Main Content -->
<section class="content-wrap full youplay-login">
  
  <!-- Banner -->
  <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('assets/images/banner-bg.png'); opacity:1"></div>

    <div class="info">
      
        <div class="container align-center">
          <div class="youplay-form">
            <h2>Register <br>New Game</h2>
            <div>



      <form method="post" action="?page=doNewGame">
        <div class="form-group">
          <label for="name">Game Name</label>          
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label for="cost">Cost &nbsp;&nbsp;</label>          
          <input type="number" min="0"step="0.25" value="5.00"data-number-to-fixed="2" data-number-stepfactor="100" name="cost">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Register</button>
        
        
      </form>

  
  

            </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- /Banner -->

</section>
<!-- /Main Content -->
