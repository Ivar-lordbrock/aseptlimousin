<?php

    // Récuperation input formulaire
    
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $tel=$_POST['tel'];
    $email= $_POST['email'];
    $souhait= $_POST['souhait'];  
    $departement=$_POST['departement'];
    $atelier = $_POST['atelier'];
    $naissance= $_POST['naissance'];
    $adresse = $_POST['adresse'];
    $postal = $_POST['codePostal'];
    $ville= $_POST['ville'];
    $caisse= $_POST['choixCaisse'];
    $autreCaisse= $_POST['autreCaisse'];


    
    // message format HTML
      $messageHTML = "

        $nom <br>
        $prenom <br>
        $tel <br>
        $email <br>
        $souhait <br>
        $departement <br>
        $naissance <br>
        $adresse <br>
        $postal <br>
        $ville <br>
        $caisse <br>

        autre caisse : $autrecaisse <br>
        ";


        foreach($atelier as $value){
            $messageHTML.= $value; 
            $messageHTML.="<br>"; 
        }
        
        

echo $messageHTML;