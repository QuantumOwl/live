<!-- Main Content -->
<section class="content-wrap full youplay-login">
  
 <?php


$game = $_GET['game'] ?? '';

?>
  <!-- Banner -->
  <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('assets/images/banner-bg.png'); opacity:1"></div>

    <div class="info">
      
        <div class="container align-center">
          <div class="youplay-form">
            <h2>Register Tournament</h2>
            <div>



      <form method="post" action="?page=doTournamentCreate">
        <div class="form-group">
          <label for="date">Date</label>          
          <input type="date" class="form-control" name="date" autofocus>
        </div>
        <div class="form-group">
          <label for="time">Time</label>          
          <input type="time" class="form-control" name="time">
        </div>
        <input type="hidden" name="game" value="<?php echo strtoupper($game); ?>">
        <div class="form-group">
          <label for="participants">Number of Participants</label>
          <input type="number" class="form-control" name="participants" placeholder="Participants" min="12" max="30">
        </div>
        <div class="form-group">
          <label for="cost">Cost</label>
          <input type="number" class="form-control" name="cost" placeholder="Cost" min="0">
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
