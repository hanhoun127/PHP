<?php 
    $conn=mysqli_connect("localhost","root","","isil");

    if ($conn-> connect_error) {
        die("une erreure".$conn->connect_error);
    }

    $select="SELECT* from recours";
    $result=$conn->query($select);


    if ($result->num_rows>0) { while ($row=$result->fetch_assoc()) {
        echo"<tr>
        <td>".$row['module']."</td>
        <td>".$row['nature']."</td>
        <td>".$row['note_affiche']."</td>
        <td>".$row['note_reel']."</td>
        <td>".$row['status']."</td>
        <td><a href='editRecours.php' class='btn btn-primary'>Edit</td>
        </tr>";
        }
    }
?>