<?php  
    class StudentRecours{
        private $db;
//class construct
function __construct(){

    $user='root';
    $pass='';
    $dsn='mysql:host=localhost;dbname=isil';
    //create connection
    try{
        $dbh=new PDO($dsn,$user,$pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
    }catch(PDOException $e){
        die("ERREUR! : ".$e->getMessage());
    }
   $this->db=$dbh;
}
//display students list function
    function getStudents(){
        $select='SELECT* from students';
        $resault=$this->db->query($select);
        $ligne=$resault->fetchall();
        return $ligne;
    }
//display recourses list function
    function getRecourses(){
        $select='SELECT* from recours';
        $resault=$this->db->query($select);
        $ligne=$resault->fetchall();
        return $ligne;
    }
//add student fucntion
    function addStudent($fn,$ln,$em,$gp){
        //?<-marqueur interogatif
        $query=$this->db->prepare("INSERT INTO students (nom,prenom,email,groupe) VALUES(?,?,?,?)");
        //bindValue()<-requetes MySQL prepares avec PDO ,va elle associer directement une valeur a un paramatere
        $query->bindValue(1, $fn);
        $query->bindValue(2, $ln);
        $query->bindValue(3, $em);
        $query->bindValue(4, $gp);
        $query->execute();
    }
//add Recourse fucntion
    function addRecourse(){
        //:fn<-marqueur nomme
        $Query=$this->db->prepare("INSERT INTO recours (module,nature,note_affiche,note_reel) VALUES(:m,:n,:na,:nr) WHERE id_student=(SELECT id from student where ((nom='$fn') AND (prenom='$ln') AND (groupe='$g'))");
        //bindParam()<-requetes MySQL prepares avec PDO ,va lier un parametre a un nom specifier
        $Query->bindParam(':m,$module');
        $Query->bindParam(':n,$nature');
        $Query->bindParam(':na,$note_affiche');
        $Query->bindParam(':nr,$note_reel');
        $Query->execute();
    }
//update student infos function
    function updateStudent($data,$db){
        $update="UPDATE students SET nom='".$data['firstname']."',
        prenom='".$data['lastname']."',email='".$data['email']."',
        groupe='".$data['group']."' WHERE id='".$data['id']."'";
        $resault=$this->db->exec($update);
        return $resault;
    }
//update recourse function
    function updateRecourse($data,$db){
        $update="UPDATE recours SET module='".$data['module']."',
        nature='".$data['nature']."',note_affiche='".$data['note_affiche']."',
        note_reel='".$data['note_reel']."' WHERE id='".$data['id']."'";
        $resault=$this->db->exec($update);
        return $resault;
    }
//favorable&unfavorable set
    function status(){
        $insert="INSERT INTO recours (status) VALUSE (:s)";
        $Query->bindParam(':s,$status');
        $Query->execute();
    }
//delete student function
    function removeStudent($id){
        $query="DELETE FROM student WHERE id=$id";
        $resault=$this->db->exec($query);
        return $resault;
    }
//email validate function
    function validerEmail($email) {
        // Utiliser une expression régulière pour valider l'adresse e-mail
        $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
        // Utiliser la fonction preg_match pour faire la correspondance avec l'expression régulière
        if (preg_match($pattern, $email)) {
            // L'adresse e-mail est valide
            return true;
        } else {
            // L'adresse e-mail n'est pas valide
            return false;
        }
    }
//name validate function
    function validername($name) {
        // Utiliser une expression régulière pour valider le nom 
        $pattern = '/^[a-zA-Z]$/';

        // Utiliser la fonction preg_match pour faire la correspondance avec l'expression régulière
        if (preg_match($pattern, $name)) {
            // Le nom est valide
            return true;
        } else {
            // Le nom n'est pas valide
            return false;
        }
    }
//function search student
    function searchStudent($searchTerm){
        if(isset($_POST['search'])){
    
            $input= $_POST[$searchTerm];
        
            $select="SELECT * FROM students where ((nom LIKE '%$input%' ) OR (prenom LIKE '%$input%') OR ( email LIKE '%$input%')) ";
            
        
            $result= $conn->query($select);
            if ($result->num_rows>0) { while ($row=$result->fetch_assoc()) {
                echo"<tr><th style='width:60px'><img style='width:60px' src='../img/student.png'></th>
            <td><label>nom:".'&nbsp'.'&nbsp'."</label>".$row['nom']."</br>
            <label>prenom:".'&nbsp'.'&nbsp'."</label>".$row['prenom']."</br>
            <label>Email:".'&nbsp'.'&nbsp'."</label>".$row['email']."</br>
            <label>groupe:".'&nbsp'.'&nbsp'."</label>".$row['groupe']."</br></td>
            </tr>";
            }
            
                
        }} 
    }
    }

?>