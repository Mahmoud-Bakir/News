<?php 
header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Methods: GET, OPTIONS");
$hostname="localhost";
$username="root";
$password="";
$database="news_db";
$conn=new mysqli($hostname,$username,$password,$database);
$query = $conn->prepare('SELECT * FROM randoms');
$query->execute();
$array=$query->get_result();
$response=[];
while ($news= $array->fetch_assoc()) {
       $response[]=$news;
}
echo json_encode($response);

?>