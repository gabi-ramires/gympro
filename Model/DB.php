<?php
namespace DB;

class Database {
    private $host = "localhost";
    private $db_name = "gympro";
    private $username = "root";
    private $password = "";
    private $socket = "/opt/lampp/var/mysql/mysql.sock";
    private $conn;

    // Método para obter a conexão
    public function conn() {
        if ($this->conn === null) {
            $this->conn = new \mysqli($this->host, $this->username, $this->password, $this->db_name, null, $this->socket);

            // Verifica a conexão
            if ($this->conn->connect_error) {
                die("Erro de conexão: " . $this->conn->connect_error);
            }
        }

        return $this->conn;
    }

    public function getRows($sql) {
        $conn = $this->conn();
        if ($conn === null) {
            die("Erro: Conexão não foi estabelecida.");
        }

        $result = $conn->query($sql);

        if ($result === false) {
            die("Erro na consulta: " . $conn->error);
        }

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getRow($sql) {
        $conn = $this->conn();
        if ($conn === null) {
            die("Erro: Conexão não foi estabelecida.");
        }

        $result = $conn->query($sql);

        if ($result === false) {
            die("Erro na consulta: " . $conn->error);
        }

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows['0'];
    }
}
?>
