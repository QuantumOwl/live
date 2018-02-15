

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


   
$sql = "SELECT * FROM `tournaments` WHERE `game` LIKE 'MAGIC'";
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


  </div>
  
  
  
  
  
  
  
  $sql2 = "SELECT * FROM `". {$row['id']}.{$row['game']} ."`";
  $result2 = $conn->query($sql2);





$dbHostname = 'localhost';
$dbDatabase = 'miguel_besosa';
$dbUsername = 'miguel.besosa';
$dbPassword = '0604';

$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);

// sql to create table
$sql = "CREATE TABLE " .  . "MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    
} 

$conn->close();







<!-- Single Product Block -->
        <a  class="angled-bg">
          <div class="row">
            <div class="col-md-3 col-xs-4">
              <div class="angled-img">
                <div class="img">
                  <img src="assets/images/{$row['game']}.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-9 col-xs-8">
              <div class="row">
                <div class="col-xs-6 col-md-9">
                  <h3>strtoupper({$row['game']})</h3>
                </div>
                 </div>
            </div>
          </div>
        </a>
<!-- /Single Product Block -->



<?php

$dbHostname = 'localhost';
$dbDatabase = 'miguel_besosa';
$dbUsername = 'miguel.besosa';
$dbPassword = '0604';
// Create connection
$conn = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbDatabase);
// Check connection

   
$sql = "SELECT * FROM `tournaments`";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()) {
echo "<tr>

<td>{$row['id']}</td>
<td>{$row['date']}</td>
<td>{$row['time']}</td>
<td>{$row['game']}</td>
<td>{$row['max_participants']}</td>

</tr>

<br>

";
    }


$conn->close();

?>





<?php

$dbHostname = 'localhost';
$dbDatabase = 'miguel_besosa';
$dbUsername = 'miguel.besosa';
$dbPassword = '0604';
// Create connection
$conn = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbDatabase);
// Check connection

   
$sql = "SELECT * FROM `tournaments`";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()) {
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
                </div>
                 </div>
            </div>
          </div>
        </a>
        <!-- /Single Product Block -->
     ';
    }


$conn->close();

?>


<!-- Single Product Block -->
        <a href="store-product-1.html" class="angled-bg">
          <div class="row">
            <div class="col-md-3 col-xs-4">
              <div class="angled-img">
                <div class="img">
                  <img src="assets/images/poke.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-9 col-xs-8">
              <div class="row">
                <div class="col-xs-6 col-md-9">
                  <h3>POKEMON</h3>
                  <div class="rating">
                    <h3>MAX PARTICIPANTS <br><br> COST</h3>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 align-right">
                  <div class="countdown h2" data-end="2018-02-23 12:00" data-timezone="UTC-4"></div>
                  
                </div>
              </div>
            </div>
          </div>
        </a>
        <!-- /Single Product Block -->