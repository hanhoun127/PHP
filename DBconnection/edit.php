<?php
//connection with database
try{
    $con=new PDO('mysql:host=localhost;dbname=isil','root','');
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo 'une erreure '.$e->getMessage()."";
die;
}

//recover the inputs elements
if (isset($_POST['edit'])) {
    $status = $_POST["status"];
}
?>
