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

}

?>
