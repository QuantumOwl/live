<!-- Main Content -->


<section class="content-wrap">

  <!-- Banner -->
  <section class="youplay-banner banner-top youplay-banner-parallax">
    <div class="image" style="background-image: url('assets/images/banner-bg.png'); opacity:1">
    </div>
    
    <?php
if (isset($loggedUser)) {

if ($loggedUser->admin == '1'){
           ?>
           
           <div class="info container align-right">
           <a class="btn btn-lg" style="background-color:black;" href="?page=newGame">Add New Game</a>
           </div>
           
           <?php
          }
          
}
 ?>
  </section>
  <!-- /Banner -->
  
  


 
  <!-- Images With Text -->
   <div class="h4"></div>
  <div class="youplay-carousel" data-autoplay="5000">
    <a class="angled-img" href="?page=pokemon">
      <div class="img">
        <img src="assets/images/poke.jpg" alt="">
      </div>
      <div class="over-info">
        <div>
          <div>
            <h4>POKEMON</h4>
          </div>
        </div>
      </div>
    </a>
    <a class="angled-img" href="?page=vanguard">
      <div class="img">
        <img src="assets/images/van.jpg" alt="">
      </div>
      <div class="over-info">
        <div>
          <div>
            <h4>CardFight VANGUARD</h4>
          </div>
        </div>
      </div>
    </a>
    <a class="angled-img" href="?page=dragon">
      <div class="img">
        <img src="assets/images/dragon.jpg" alt="">
      </div>
      <div class="over-info">
        <div>
          <div>
            <h4>DRAGON BALL<br> SUPER</h4>
          </div>
        </div>
      </div>
    </a>
    <a class="angled-img" href="?page=yugioh">
      <div class="img">
        <img src="assets/images/yugi.jpg" alt="">
      </div>
      <div class="over-info">
        <div>
          <div>
            <h4>YU-GI-OH</h4>
          </div>
        </div>
      </div>
    </a>
    <a class="angled-img" href="?page=magic">
      <div class="img">
        <img src="assets/images/magic.jpg" alt="">
      </div>
      <div class="over-info">
        <div>
          <div>
            <h4>MAGIC: <BR> THE GATHERING</h4>
          </div>
        </div>
      </div>
    </a>
  </div>
   <div class="h4"></div>
  <!-- /Images With Text -->



  <script type="text/javascript">
  $(".countdown").each(function() {
      var tz = $(this).attr('data-timezone');
      var end = $(this).attr('data-end');
          end = moment.tz(end, tz).toDate();
      $(this).countdown(end, function(event) {
        $(this).text(
          event.strftime('%D days %H:%M:%S')
        );
      });
  })
  </script>
