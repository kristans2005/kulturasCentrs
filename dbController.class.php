<?php


class dbController {

    public $dbConnection;

    function __construct($dbConnections)
    {
        $this->dbConnection = $dbConnections;
    }

    public function editPost($id, $name, $place, $date){
        $sql = (' UPDATE pienakumi
                SET name = :name, place = :place, date = :date
                WHERE id = '. $id .'; ');
        $stmt = $this->dbConnection->dbConn->prepare($sql);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':place', $place);
        $stmt->execute();
    }

    public function showAll(){
        $result = $this->dbConnection->dbConn->query(' SELECT * FROM pienakumi ');
        $result->execute();
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function selectPost($id){
        $result = $this->dbConnection->dbConn->query(' SELECT * FROM pienakumi WHERE id = ' . $id );
        $result->execute();
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function delete($id){
        $sql = ('DELETE FROM pienakumi WHERE id = :id');
        $stmt = $this->dbConnection->dbConn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function addPost($name, $place, $date){
        $sql = 'INSERT INTO pienakumi (date, name, place) VALUES (:date, :name, :place)';
        $stmt = $this->dbConnection->dbConn->prepare($sql);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':place', $place);
        $stmt->execute();

    }

}