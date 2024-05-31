<?php
require_once __DIR__ . '/Database.php';

class About extends Database {
    private $db;

    public function __construct() {
        $this->db = $this->db_connection();
    }

    public function select() {
        try {
            $sql = "SELECT * FROM about";
            $query = $this->db->query($sql);
            $about = $query->fetchAll();
            return $about;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function select_single() {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            try {
                $db_query = "SELECT * FROM about WHERE id = ?";
                $query = $this->db->prepare($db_query);
                $query->execute([$id]);
                $about = $query->fetch(); // Using fetch() as we expect only one row
                if ($about) {
                    return $about;
                } else {
                    header("HTTP/1.0 400 Bad Request");
                    header("Location: 404.php");
                    die();
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            // id neexistuje alebo nie je validne
            header("HTTP/1.0 400 Bad Request");
            header("Location: 404.php");
            die();
        }
    }
}

?>
