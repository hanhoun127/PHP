<?php 
    $conn=mysqli_connect("localhost","root","","isil");

    if ($conn-> connect_error) {
        die("une erreure".$conn->connect_error);
    }

    $select="SELECT* from students";
    $result=$conn->query($select);


    if ($result->num_rows>0) { while ($row=$result->fetch_assoc()) {
        echo"<tr>
        <th style='width:60px'><img style='width:60px' src='../img/student.png'></th>
        <td><label>nom:".'&nbsp'.'&nbsp'."</label>".$row['nom']."</br>
        <label>prenom:".'&nbsp'.'&nbsp'."</label>".$row['prenom']."</br>
        <label>Email:".'&nbsp'.'&nbsp'."</label>".$row['email']."</br>
        <label>groupe:".'&nbsp'.'&nbsp'."</label>".$row['groupe']."</br></td>
        </tr>";
        }
    }
?>