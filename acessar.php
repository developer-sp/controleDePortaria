<?php
     function acessar(){
        try{
            $conn = new PDO("mysql:host=localhost; dbname=test", "root","");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
     }

?>