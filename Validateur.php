<?php
class Validateur {
    
    public function estCodeBarreValide($code) {
        return preg_match('/^\d{13}$/', $code);
    }
    
    public function estDateExpirationValide($date) {
        $dateExpiration = strtotime($date);
        $aujourdhui = strtotime(date('Y-m-d'));
        return $dateExpiration > $aujourdhui;
    }
}
?> 
