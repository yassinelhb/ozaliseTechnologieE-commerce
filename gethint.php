<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=hanout;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}

?>
<?php
// Array with names
$reponse = $bdd->query("SELECT * from produit");
             $a= array();  
               while ($donnees = $reponse->fetch() ){
                array_push($a,$donnees['referance']);
                    }

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {

               $reponse = $bdd->query("SELECT * from produit where referance='$name'");
               
               while ($donnees = $reponse->fetch() ){
                $hint= '  
                       <tr>
                       <td><input type="radio" name="radio_id" value="'.$donnees['id'].'" class="id_radio"></td>
                        <td>'.$donnees['id'].'</td>
                        <td>'.$donnees['famille'].'</td>
                        <td>'.$donnees['model'].'</td>
                        <td>'.$donnees['referance'].'</td>
                        <td>'.$donnees['designation'].'</td>
                        <td>'.$donnees['Quantite'].'</td>
                        <td>'.$donnees['Prix'].'</td>
                      </tr>';
                    }
                    
            
            
                
            } else {
                $reponse = $bdd->query("SELECT * from produit where referance='$name'");
               
               while ($donnees = $reponse->fetch() ){
                 $hint.= '  
                       <tr>
                       <td><input type="radio" name="radio_id" value="'.$donnees['id'].'" class="id_radio"></td>
                        <td>'.$donnees['id'].'</td>
                        <td>'.$donnees['famille'].'</td>
                        <td>'.$donnees['model'].'</td>
                        <td>'.$donnees['referance'].'</td>
                        <td>'.$donnees['designation'].'</td>
                        <td>'.$donnees['Quantite'].'</td>
                        <td>'.$donnees['Prix'].'</td>
                      </tr>';
                }
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "<tr><td colspan=\"9\"><h3 style=\"text-align:center\">Aucun produit a cette référance</h3></td></tr>" : $hint;
?>