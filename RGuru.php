<?php
require_once 'Database.php';

    class Rguru {
        private $conn;

        // Constructor
        public function __construct(){
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
        }

            // Execute queries SQL
        public function runQuery($sql){
            $stmt = $this->conn->prepare($sql);
            return $stmt;
        }

        public function insert($kode, $name, $alias, $aliasT, $kmapel){
            try{
              $stmt = $this->conn->prepare("INSERT INTO guru (KODE, NAMA, Alias, Alias_T, Kode_Mapel) VALUES(:kode, :name, :alias, :aliasT, :kmapel)");
              $stmt->bindparam(":KODE", $kode);
              $stmt->bindparam(":NAMA", $name);
              $stmt->bindparam(":Alias", $alias);
              $stmt->bindparam(":Alias_T", $aliasT);
              $stmt->bindparam(":Kode_Mapel", $kmapel);
              $stmt->execute();
              return $stmt;
            }
            catch(Exception $e){
              echo $e->getMessage();
            }
          }
    }
?>