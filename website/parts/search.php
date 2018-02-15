<!-- Main Content -->
<section class="content-wrap">

  <!-- Banner -->
  <div class="youplay-banner youplay-banner-parallax banner-top xsmall">
    <div class="image" style="background-image: url('assets/images/banner-bg.png'); opacity:1">
    </div>

    <div class="info">
      <div>
        <div class="container">
          <h1>Tournaments</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- /Banner -->

<section >
  <div class="container youplay-search">

    
      <div class="col-md-15">
        
        <?php

$dbHostname = 'localhost';
$dbDatabase = 'miguel_besosa';
$dbUsername = 'miguel.besosa';
$dbPassword = '0604';
// Create connection
$conn = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbDatabase);
$conn2 = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbDatabase);


   
$sql = "SELECT * FROM `tournaments`";
$result = $conn->query($sql);


  

 while($row = $result->fetch_assoc()) {
  $sql2 = "SELECT * FROM `{$row['id']}{$row['game']}`";
  $result2 = $conn2->query($sql2);

  
echo '
     <!-- Single Product Block -->
     
        <a  class="angled-bg">
          <div class="row">
            <div class="col-md-3 col-xs-4">
              <div class="angled-img">
                <div class="img">
                  <img src="assets/images/';
                
echo "{$row['game']}";
                  
echo '.jpg" alt="">
                </div>
              </div>
              
            </div>
            
            <div class="col-md-9 col-xs-8">
              <div class="row">
                <div class="col-xs-6 col-md-9">
                  <h3>';
 echo "{$row['game']}";                 
                  
echo '</h3>
                <div class="rating">
                    <h3>MAX PARTICIPANTS : ';
 echo "{$row['max_participants']}";                    
                    
echo                    '<br><br> COST : $';
echo "{$row['cost']}"; 
echo'.00</h3>

                  </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                  <div class="countdown h2" data-end="';
                  
echo "{$row['date']}";
echo " {$row['time']}"; 
                  
echo '" data-timezone="America/Puerto_Rico"></div>
                  
                </div>
                 </div>
            </div>
          </div>
          
        </a>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse';
echo "{$row['id']}";
                        
echo                        '" aria-expanded="true" aria-controls="collapseOne">
                            Registered in Tournament <span class="icon-plus"></span>
                        </a>
                    </h4>
          </div>
          <div id="collapse';
echo "{$row['id']}";
          
echo          '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>';
        
        while($row2 = $result2->fetch_assoc()) {
         
echo         '<tr>
            <th scope="row">';
echo            "{$row2['id']}";
echo'</th>
            <td>';
echo            "{$row2['username']}";
 echo           '</td>
          </tr>';
         
        }
        
        
 echo '</tbody>
      </table>
      <a href="index.php?page=doTournamentRegister&b=';
      echo"{$row['id']}{$row['game']}";
      echo'&c=';
      echo $_SESSION['username'];
      echo'"class="btn active btn-success">Register in this Tournament </a>

              </div>
          </div>
        </div>
<div><br></div>
        
        <!-- /Single Product Block -->
        
     ';
    }


$conn->close();

?>

        

    </div>

</section >
  </div>
  
