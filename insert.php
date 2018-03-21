<?php 
$conn = mysqli_connect('localhost',"root","","api_db");
if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
    $name = $_REQUEST["name"];
    $description = $_REQUEST["description"];
    $price = $_REQUEST["price"];
    $category_id = $_REQUEST["category_id"];
    $created = $_REQUEST["created"];
    $modified = $_REQUEST["modified"];

    $query = "INSERT INTO products (`name`,`description`,`price`,`category_id`,`created`,`modified`) VALUES ('$name','$description','$price','$category_id','$created','$modified')";
    $result = $conn->query($query);
    if ($result == 1)
    {
        $data["message"] = "data saved successfully";
        $data["status"] = "Ok";
    }
    else
    {
        $data["message"] = "data not saved successfully";
        $data["status"] = "error";    
    }
}
else
{
    $data["message"] = "Format not supported";
    $data["status"] = "error";    
}
    echo json_encode($data);