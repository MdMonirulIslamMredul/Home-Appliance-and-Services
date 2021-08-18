<?php
require_once "DbConnection.php";

function showAllUsers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM editor ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


?>