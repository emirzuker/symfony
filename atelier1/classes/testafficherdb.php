<?php 
  include 'C:/xampp/htdocs/atelier1/classes/debcon.php' ; 
class testdbd extends debcon
{
   


    public function getUsers()
    {
        $sql = "SELECT * FROM club" ; 
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch())
        {
            echo $row['id'] . '<br>' ;
            echo $row['nom'] . '<br>' ;
            echo $row['description'] . '<br>' ; 
            echo $row['adresse'] . '<br>' ;  
            echo $row['domaine'] . '<br>' ;  
        }
    }
}

$test = new testdbd() ; 
$test->getUsers() ; 

?>