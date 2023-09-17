<?php 
class Club 
{
    private $id ; 
    private $nom ; 
    private $description ; 
    private $adresse; 
    private $domaine ; 




    public function __construct( $id ,   $nom ,   $description ,   $adresse , $domaine   )
    {
        $this->id= $id ; 
        $this->nom= $nom ; 
        $this->description=$description ; 
        $this->adresse = $adresse ; 
        $this->domaine =$domaine ;
    } 
public function afficher()
{
    echo $this->id . "<br>" ;
    echo $this->nom . "<br>" ;
    echo $this->description . "<br>" ;
    echo $this->adresse . "<br>" ;
    echo $this->domaine . "<br>" ;
} 

public function getUsers()
{
    $sql = "SELECT * FROM users" ; 
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
    {
        echo $row['users_firstname'] . '<br>' ; 
    }
}




}


$cl = new Club(1,"Club Robotique","Test","Adresse ghazela","Electromecanique") ; 
$cl->afficher() ; 
unset($c1) ; 


?>