<?php 
function conexion(){
    try{
        global $bdd;
        $bdd = new PDO('mysql:host=localhost;dbname=zeroimpactshop;charset=utf8','root','');
    }

    catch(Exception $exp){
        die('Erreur : '.$exp->getMessage());
    }
}
?>