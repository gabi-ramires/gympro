<?php

namespace Model;
require_once __DIR__ . '/../Model/DB.php';
use DB\Database;

class Login {

    private $dataBase;

    public function __construct() {
        $this->dataBase = new Database();
    }

    /**
     * Verifica se a senha informada no login está correta
     */
    public function login($username, $password) {
        $sql = "SELECT `senha` FROM `personais` WHERE `usuario` LIKE 'karinetavares'";
        $res = $this->dataBase->getRow($sql);

        if(password_verify($pass, $hash)) {
            echo 'Senha correta!';
        } else {
            echo "Senha incorreta!";
        }
        return $res;
    }
}

//$new = new Login();
//$res = $new->login('a','b');
//var_dump($res);

?>
