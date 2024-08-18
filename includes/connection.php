<?php
require_once 'interface.php';
const DB_NAME = 'neuroapp';
const DB_USER = 'neuroapp';
const DB_PASS = 'Neu26-@mor!11';
const DB_HOST = 'localhost';

class DB implements DatabaseInterface {
    private ?PDO $connection = null;
    private string $database;
    private string $user;
    private string $password;
    private string $host;
    private string $db_charset = 'utf8';

    public function __construct(
        string $database = DB_NAME,
        string $user = DB_USER,
        string $password = DB_PASS,
        string $host = DB_HOST,
    ) {
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->host = $host;

        $this->connection();
    }
    /*Conectar a base de datos*/
    public function connection(): void {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database;charset=$this->db_charset", $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
    /*Comprobar conexión base de datos*/
    public function isConnected(): bool {
        return $this->connection instanceof PDO;
    }

    public function query(string $sql, array $params = []): ?array
    {
        // TODO: Implement query() method.
    }

    public function fetch(string $sql, array $params = []): ?array
    {
        // TODO: Implement fetch() method.
    }
}