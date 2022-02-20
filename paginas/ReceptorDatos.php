<?php
//log in
    //contraseña
    $ContraseñaLog_in=$_POST['passwordL'];
        echo "La contraseña es: " . $ContraseñaLog_in ;
    //email
    $EmailLog_in=$_POST['emailL'];
        echo "El email es: " . $EmailLog_in ;
    //telefono
    $TelefLog_in=$_POST['telefonoL'];
        echo "El telefono es" . $EmailLog_in ;
//sign up
    //genero
    $generoSign_up=$_POST['genero'];
        echo "el genero es " . $generoSign_up;
    //pais 
        //otro=>text
         $TelefSign_in=$_POST['otro'];
            echo "Si introduce otro pais que no está en la lista" . $EmailLog_in ;

    $PaisSign_up=$_POST['pais'];
        echo "el pais es" . $PaisSign_up;
    //contraseña
    $ContraseñaSign_in=$_POST['passwordS'];
        echo "La contraseña es: " . $ContraseñaSign_in ;
    //email
    $EmailSign_in=$_POST['emailS'];
        echo "El email es: " . $EmailSign_in ;
    //telefono
    $TelefSign_in=$_POST['telS'];
        echo "El telefono es" . $TelefSign_in ;
    //Recuerdame
    $TelefSign_in=$_POST['RecuerdameS'];
        echo "A activado recuerdame" . $TelefSign_in ;
   
?>