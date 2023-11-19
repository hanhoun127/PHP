<?php 

$conn=mysqli_connect("localhost","root","","isil");
if ($conn-> connect_error) {
    die("une erreure".$conn->connect_error);
}

if(isset($_POST['search'])){
    
    $input= $_POST['student'];

    $select="SELECT * FROM students where ((nom='$input' ) OR (prenom='$input' ) OR ( email='$input')) ";
    

    $result= $conn->query($select);
    if ($result->num_rows>0) { while ($row=$result->fetch_assoc()) {
        echo"<tr>
    <td><label>nom:".'&nbsp'.'&nbsp'."</label>".$row['nom']."</br>
    <label>prenom:".'&nbsp'.'&nbsp'."</label>".$row['prenom']."</br>
    <label>Email:".'&nbsp'.'&nbsp'."</label>".$row['email']."</br>
    <label>groupe:".'&nbsp'.'&nbsp'."</label>".$row['groupe']."</br></td>
    </tr>";
                                                            }
   
    }
    header('location:../student/searchStudent.php');
}
?>