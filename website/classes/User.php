<?php
class User {
    public $id = -1;
    public $username;
    public $password;
    public $name;
    public $lastname;
    public $email;
    public $admin;
    public $wins;
    public $losses;
    
    
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM users WHERE id = ?', [$id]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->name = $record['name'];
        $u->lastname = $record['lastname'];
        $u->email = $record['email'];
        $u->admin = $record['admin'];
        $u->losses = $record['losses'];
        $u->wins = $record['wins'];
        
        return $u;
    }
    
    public static function loadFromUsername($username) {
        $records = getResultFromSQL('SELECT * FROM users WHERE username = ?', [$username]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->name = $record['name'];
        $u->lastname = $record['lastname'];
        $u->email = $record['email'];
        $u->admin = $record['admin'];
        $u->losses = $record['losses'];
        $u->wins = $record['wins'];
        
        return $u;
    }
    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastname`, `email`) VALUES (NULL, ?, ?, ?, ?, ?);";
            
            getResultFromSQL($sql, [$this->username, $this->password, $this->name, $this->lastname, $this->email]);
        }
    }
    /*
    public function delete($id) {
        
            $sql = 'DELETE * FROM users WHERE id = ?', [$id];
            
            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        
    }
    */
    public function validatePassword($password) {
        return ($password == $this->password);
    }
}
?>