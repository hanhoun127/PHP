<?php 

$conn=mysqli_connect("localhost","root","","isil");
if ($conn-> connect_error) {
    die("une erreure".$conn->connect_error);
}

if(isset($_POST['infoS'])){
    
    $fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $g=$_POST['group'];

    $select="SELECT * FROM recours where id_student = (SELECT id from students 
    where ((nom='$fn') AND (prenom='$ln') AND (groupe='$g')) ";
    $result=$conn->query($select);


    if ($result->num_rows>0 ) { while ($row=$result->fetch_assoc()) {
        echo"<tr>
        <td>".$row['module']."</td>
        <td>".$row['nature']."</td>
        <td>".$row['note_affiche']."</td>
        <td>".$row['note_reel']."</td>
        <td><a href='editRecours.php' class='btn btn-primary'>Edit</td>
        </tr>";
        }
    }
   header('location:../recours/studentRecours.php'); 
}

?>