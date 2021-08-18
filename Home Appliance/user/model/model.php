<?php 

require_once 'db_connect.php';




function add($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user (U_ID,Name, Email, User_Name, Password, Gender, DOB , Address)
VALUES (:U_ID , :Name, :Email, :Username, :Password, :Gender, :DOB , :Address)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':U_ID' => $data['u_id'],
            ':Name' => $data['name'],
        	':Email' => $data['email'],
        	':Username' => $data['username'],
        	':Password' => $data['password'],
        	':Gender' => $data['gender'],
            ':DOB' => $data['dob'],
            ':Address' => $data['Address']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function check($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE username= :username AND password = :password ";

    try{
        $stmt = $conn->prepare($selectQuery);
         $stmt->execute([
            ':username' => $data['username'],
            ':password' => $data['password']
        ]);
    
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
/*
function showUser($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` where username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function updateUser( $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Email= ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['username']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword( $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Password = ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['password'], $data['username']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
*/