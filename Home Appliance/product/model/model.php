<?php 

require_once 'db_connect.php';


function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `products` where PID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($Product_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products` WHERE Name LIKE '%$Product_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products (Name,Model,Category,Brand,Color, BuyingPrice, SellingPrice,Quantity,Displayable,Description)
VALUES (:name, :Model, :Category, :Brand, :Color, :Quantity, :BuyingPrice, :SellingPrice, :Displayable, :Description)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':Model' => $data['Model'],
            ':Category' => $data['Category'],
            ':Brand' => $data['Brand'],
            ':Color' => $data['Color'],
        	':BuyingPrice' => $data['BuyingPrice'],
        	':SellingPrice' => $data['SellingPrice'],
            ':Quantity' => $data['Quantity'],
        	':Displayable' => $data['Displayable'],
            ':Description' => $data['Description']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE products set Name = ?,Model =?,Category = ?,Brand = ?,Color = ?, BuyingPrice = ?, SellingPrice = ?, Quantity =?, Displayable = ?,Description = ? where PID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'],$data['Model'],$data['Category'],$data['Brand'],$data['Color'], $data['BuyingPrice'], $data['SellingPrice'],$data['Quantity'],
            $data['Displayable'],$data['Description'] , $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE `PID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function addoCart($data){
    $conn = db_conn();
    $selectQuery = "INSERT into cart (ID,PID)
VALUES ( :ID, :PID)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':ID' => $data['ID'],
            ':PID' => $data['PID']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}