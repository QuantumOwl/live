<?php

$maxSessionTime = 60 * 60 * 24; // 1 dia pq me molestaba mientras programaba xD




session_start();
date_default_timezone_set('EST');

$action = (isset($_GET['page'])) ? $_GET['page'] : '';

include 'db.php';
include './classes/User.php';
include './classes/Tournaments.php';
include './classes/Games.php';

if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);

    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            //showError('Unauthorized access! Session destroyed!');
        }
    }
}

include './parts/header.php';

if ($action == 'login') {
    include './parts/login.php';
} else if ($action == 'logout') {
    session_destroy();
    header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);

    if (is_null($u)) {
        
        include './parts/login.php';
        showError('The user doesn\'t exist.');
    } else if ($u->validatePassword($_POST['password'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['username'] = $u->username;
        $_SESSION['loginTime'] = time();
        $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
        header('Location: index.php');
    } else {
        
        include './parts/login.php';
        showError('The entered password is incorrect!');
    }
} else if ($action == 'register') {
    include './parts/register.php';
} else if ($action == 'tournamentCreate') {
    include './parts/tournamentCreate.php';
}else if ($action == 'doTournamentRegister') {
 


$dbHostname = 'localhost';
$dbDatabase = 'miguel_besosa';
$dbUsername = 'miguel.besosa';
$dbPassword = '0604';

$table = $_GET['b'];
$username1 = $_GET['c'];
$sql = "INSERT INTO $table (`id`, `username`) VALUES (NULL, '$username1');";

$conn = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbDatabase);

if ($conn->query($sql) === TRUE) {
    
} else {
 
}

$conn->close();

 
    


        include './parts/body.php';
        
        
}else if ($action == 'doTournamentCreate') {
  
        $u = new Tournaments();

        
        $u->date = $_POST['date'];
        $u->time = $_POST['time'];
        $u->game = $_POST['game'];
        $u->participants = $_POST['participants'];
        $u->cost = $_POST['cost'];
       
        $u->save();




$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);
$stmt = $db->prepare("SELECT MAX(id) as gg FROM tournaments");
$stmt->execute();
$test = $stmt->fetch(PDO::FETCH_ASSOC);
 $test['gg'];
 
 // sql to create table
    $sql = "CREATE TABLE ". $test['gg'].$_POST['game']." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL UNIQUE)";
    
    

    // use exec() because no results are returned
    $db->exec($sql);
        
    


        include './parts/body.php';
        
        
    
    
} else if ($action == 'newGame') {
    include './parts/newGame.php';
}else if ($action == 'doNewGame') {
  
        $u = new Games();

        
        $u->name = $_POST['name'];
        
       
        $u->save();
        
        include './parts/body.php';
        
    
    
}else if ($action == 'doRegister') {
    $u = User::loadFromUsername($_POST['username']);

    if ($u) {
        include './parts/register.php';
        showError('The username already exist.');
    } else {
        $u = new User();

        $u->username = $_POST['username'];
        $u->password = $_POST['password1'];
        $u->email = $_POST['email'];
        $u->name = $_POST['firstName'];
        $u->lastname = $_POST['lastName'];
        $u->save();
        
        include './parts/body.php';
        
    }
} else if ($action == 'pokemon') {
    include './parts/pokemon.php';
} else if ($action == 'yugioh') {
    include './parts/yugioh.php';
} else if ($action == 'vanguard') {
    include './parts/vanguard.php';
} else if ($action == 'dragon') {
    include './parts/dragon.php';
} else if ($action == 'magic') {
    include './parts/magic.php';
} else if ($action == 'search') {
    include './parts/search.php';
} else {
    include './parts/body.php';
}

include './parts/footer.php';



/*echo '<pre>' . print_r($_SESSION, true)  . '</pre>';
if (isset($_SESSION['loginTime'])) {
    echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}
*/
function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}

function showSuccess($msg) {
    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
}

?>
