<?php
class Tournaments {
    public $id = -1;
    public $date;
    public $time;
    public $game;
    public $participants;
    public $cost;
    
    
    
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM tournaments WHERE id = ?', [$id]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new Tournaments();
        
        $u->id = $record['id'];
        $u->date = $record['date'];
        $u->time = $record['time'];
        $u->game = $record['game'];
        $u->participants = $record['participants'];
        $u->cost = $record['cost'];
        
        
        return $u;
    }
    
    public static function loadFromGame($game) {
        $records = getResultFromSQL('SELECT * FROM tournaments WHERE game = ?', [$game]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new Tournaments();
        
        $u->id = $record['id'];
        $u->date = $record['date'];
        $u->time = $record['time'];
        $u->game = $record['game'];        
        $u->participants = $record['participants'];
        $u->cost = $record['cost'];
        
        
        return $u;
    }
    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `tournaments` (`id`, `date`, `time`, `game`, `max_participants`,`cost`) VALUES (NULL, ?, ?, ?, ?, ?);";
            
            getResultFromSQL($sql, [$this->date, $this->time, $this->game, $this->participants, $this->cost]);
        }
    }
    
    /*
    public function validatePassword($password) {
        return ($password == $this->password);
    }
    */
}
?>