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
    if (isset($_POST['add'])) {

        $fn=$_POST['firstname'];
        $ln=$_POST['lastname'];
        $e=$_POST['email'];
        $g=$_POST['group'];
//insert the elements into the students table
        $query=$con->prepare("INSERT INTO students (nom,prenom,email,groupe) VALUES('$fn','$ln','$e','$g')");
        $query->execute() ;
    }
?>
