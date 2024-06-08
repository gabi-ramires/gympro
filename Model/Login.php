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
     * Verifica se usuario e senha informadas no login estão corretos
     * @param string $username
     * @param string $password
     * @return bool true, false
     */
    public function login($username, $password) {
        $sql = "SELECT `senha` FROM `personais` WHERE `usuario` LIKE '{$username}'";
        $res = $this->dataBase->getRow($sql);

        return password_verify($password, $res['senha']);
    }

    public function getInfosPersonal($username) {
        $sql = "SELECT * FROM `personais` WHERE `usuario` LIKE '{$username}'";
        $res = $this->dataBase->getRow($sql);

        return $res;
    }
}

//$new = new Login();
//$res = $new->login('a','b');
//var_dump($res);

?>
