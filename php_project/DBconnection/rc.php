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
if (isset($_POST['add2'])) {

    $module = $_POST ["module"];
    $nature = $_POST ["nature"];
    $note_affiche = $_POST ["note_affiche"];
    $note_reel = $_POST ["note_reel"];
    $status = $_POST["status"];
//insert the elements into the students table
    $query=$con->prepare("INSERT INTO recours (module,nature,note_affiche,note_reel,status) VALUES('$module','$nature','$note_affiche','$note_reel','$status');");
    $query->execute() ;
    //go to listStudent
    header('location:../recours/listRecours.php');
}
?>
