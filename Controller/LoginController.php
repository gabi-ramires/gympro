<?php
namespace Controller;
require_once __DIR__ . '/../Model/Login.php';
use Model\Login;

class LoginController {
    public function handleRequest() {
        header('Content-Type: application/json');

        $response = [];

        try {
            $input = file_get_contents('php://input');
            $data = json_decode($input, true);

            if (!isset($data['action'])) {
                throw new Exception('Ação não especificada');
            }

            $action = $data['action'];

            if (method_exists($this, $action)) {
                $this->$action($data);
            } else {
                throw new Exception('Ação inválida');
            }
        } catch (Exception $e) {
            $response = [
                'status' => false,
                'msg' => $e->getMessage()
            ];
        }

        echo json_encode($response);
    }

    /**
     * Verifica se a senha informada no login está correta
     * @param $data['username']
     * @param $data['password']
     * @return array
     */
    private function login($data) {
        $response = [];

        try {
            // Verificações de segurança
            if (!isset($data['username']) || !isset($data['password'])) {
                throw new Exception('Usuário e senha são obrigatórios');
            }
            if (empty($data['username']) || empty($data['username'])) {
                throw new Exception('Usuário e senha não podem estar vazios');
            }
 
            $username = trim($data['username']);
            $password = trim($data['password']);
            $password = password_hash($password, PASSWORD_DEFAULT);

            // Faz login
            $loginModel = new Login();
            $loginModel->login($username, $password);
            if (false) {
                $response = [
                    'status' => true,
                    'msg' => 'Login bem-sucedido'
                ];
            } else {
                throw new Exception('Credenciais inválidas');
            }
        } catch (Exception $e) {
            $response = [
                'status' => false,
                'msg' => $e->getMessage()
            ];
        }

        echo json_encode($response);
    }
}

// Crie uma instância do controlador e manuseie a requisição
$controller = new LoginController();
$controller->handleRequest();
?>
