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
//getStudent 
function getStudent($id){
    $select = 'SELECT * FROM students WHERE id=:id';
    $query = $this->db->prepare($select);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $ligne = $query->fetch();
    return $ligne;
}


//display recourses list function
    function getRecourses(){
        $select='SELECT students.nom,students.prenom,students.groupe,recours.id,
        recours.module,recours.nature,recours.note_affiche,recours.note_reel,recours.status
         FROM recours JOIN students ON recours.id_student=students.id';
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
    function addRecourse($module, $nature, $note_affiche, $note_reel, $fn, $ln, $g){
        //:fn<-marqueur nomme
        $query = $this->db->prepare("INSERT INTO recours (id_student,module, nature, note_affiche, note_reel) 
        VALUES ((SELECT id FROM students WHERE nom=:fn AND prenom=:ln AND groupe=:g),:module,:nature,:note_affiche, :note_reel)  ");
        //bindParam()<-requetes MySQL prepares avec PDO ,va lier un parametre a un nom specifier
        $query->bindParam(':module', $module);
        $query->bindParam(':nature', $nature);
        $query->bindParam(':note_affiche', $note_affiche);
        $query->bindParam(':note_reel', $note_reel);
        $query->bindParam(':fn', $fn);
        $query->bindParam(':ln', $ln);
        $query->bindParam(':g', $g);
        $query->execute();
    }
//update student infos function
    function updateStudent($id,$fn,$ln,$em,$gp){
        $query = $this->db->prepare("UPDATE students SET nom=:fn, prenom=:ln, email=:em, groupe=:gp WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->bindParam(':fn', $fn);
        $query->bindParam(':ln', $ln);
        $query->bindParam(':em', $em);
        $query->bindParam(':gp', $gp);
        $query->execute();
    }
//favorable&unfavorable set
function status($status, $id){
    $query = $this->db->prepare("UPDATE recours SET status = :s WHERE id = :id");
    $query->bindParam(':id', $id);
    $query->bindParam(':s', $status);
    $query->execute();
}

//delete student function
    function removeStudent($id){
        $query="DELETE FROM students WHERE id=$id";
        $resault=$this->db->exec($query);
        return $resault;
    }
// //email validate function
//     function validerEmail($email) {
//         // Utiliser une expression régulière pour valider l'adresse e-mail
//         $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
//         // Utiliser la fonction preg_match pour faire la correspondance avec l'expression régulière
//         if (preg_match($pattern, $email)) {
//             // L'adresse e-mail est valide
//             return true;
//         } else {
//             // L'adresse e-mail n'est pas valide
//             return false;
//         }
//     }
// //name validate function
//     function validername($name) {
//         // Utiliser une expression régulière pour valider le nom 
//         $pattern = '/^[a-zA-Z]$/';

//         // Utiliser la fonction preg_match pour faire la correspondance avec l'expression régulière
//         if (preg_match($pattern, $name)) {
//             // Le nom est valide
//             return true;
//         } else {
//             // Le nom n'est pas valide
//             return false;
//         }
//     }
// function search student
function searchStudent($input)
{
    $select = "SELECT * FROM students where ((nom LIKE '%$input%' ) OR (prenom LIKE '%$input%') OR ( email LIKE '%$input%@gmail.com')) ";
    $result = $this->db->query($select);
    $ligne = $result->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as associative array
    return $ligne;
}
    }

?>