<?php
use Model\Login;
require_once __DIR__ . '/../Model/Login.php';
$loginModel = new Login();

// Chamando um método do modelo
$loginModel->testMethod();