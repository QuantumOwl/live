<!-- Footer -->
<footer class="youplay-footer-parallax">
  <div class="wrapper" style="background-image: url('assets/images/footer.png')">

    <!-- Social Buttons -->
    <div class="social">
      <div class="container">
        <h3>Connect socially with <strong>Cano's Gaming</strong></h3>

        <div class="social-icons">
          <div class="social-icon">
            <a href="#!">
              <i class="fab fa-facebook-square" style="font-size: 7em;"></i>
              <span>Like on Facebook</span>
            </a>
          </div>
          <div class="social-icon">
            <a href="#!">
              <i class="fab fa-twitter-square" style="font-size: 7em;"></i>
              <span>Follow on Twitter</span>
            </a>
          </div>
          <div class="social-icon">
            <a href="#!">
              <i class="fab fa-twitch" style="font-size: 7em;"></i>
              <span>Watch on Twitch</span>
            </a>
          </div>
          <div class="social-icon">
            <a href="#!">
              <i class="fab fa-youtube-square" style="font-size: 7em;"></i>
              <span>Watch on Youtube</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Social Buttons -->

    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <strong>Cano's Gaming</strong> &copy; 2018. All rights reserved
      </div>
    </div>
    <!-- /Copyright -->

  </div>
</footer>
<!-- /Footer -->

</section>
<!-- /Main Content -->



<!-- jQuery -->
<script type="text/javascript" src="../assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Hexagon Progress -->
<script type="text/javascript" src="../assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Jarallax -->
<script type="text/javascript" src="../assets/bower_components/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth Scroll -->
<script type="text/javascript" src="../assets/bower_components/smoothscroll-for-websites/SmoothScroll.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="../assets/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Countdown -->
<script type="text/javascript" src="../assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>

<!-- Moment.js -->
<script type="text/javascript" src="../assets/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="../assets/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
<!-- Youplay -->
<script type="text/javascript" src="../assets/youplay/js/youplay.min.js"></script>

<script src="main.js" type="text/javascript"></script>
<script src="triangle.js" type="text/javascript"></script>

<!-- init -->
<script>
if(typeof youplay !== 'undefined') {
    youplay.init({
        // enable parallax
        parallax:         true,

        // set small navbar on load
        navbarSmall:      false,

        // enable fade effect between pages
        fadeBetweenPages: true,

        // twitter and instagram php paths
        php: {
            twitter: './php/twitter/tweet.php',
            instagram: './php/instagram/instagram.php'
        }
    });
}
</script>

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




</body>
</html>
