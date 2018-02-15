<?php
class indTournament {
    public $id = -1;
    public $username;
    
    
    
    
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM tournaments WHERE id = ?', [$id]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new indTournament();
        
        $u->id = $record['id'];
        $u->username = $record['username'];
        
        
        
        return $u;
    }
    

    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `tournaments` (`id`, `username`) VALUES (NULL, ?);";
            
            getResultFromSQL($sql, [$this->username]);
        }
    }
}
?>