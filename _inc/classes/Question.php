<?php

    class Question extends Database{
        
        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function select(){

            try{
                $sql = "SELECT * FROM  question";
                $query =  $this->db->query($sql);
                $question = $query->fetchAll();
                return $question;

            }catch(PDOException $e){
                echo $e->getMessage();
            }

        }
    }

?>