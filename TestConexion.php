<?php
require 'vendor/autoload.php';

    try{
        $connection = new MongoDB\Client('mongodb://db-user:pass@ip-hostname:27017/?authSource=bd-autentication');
        if($connection){
            $database=$connection ->BlogDB;
            $collection = $database->posts;
            $result = $collection->findOne();
            echo 'Conexion Exitosa y activa...';
            //busqueda especifica
            $collection2 = (new MongoDB\Client('mongodb://db-user:pass@ip-hostname:27017/?authSource=bd-autentication'))->BlogDB->posts;
            $distinct = $collection2->distinct('comments.author');

            foreach($distinct as $document){
                var_dump($document);
            }
        }else{
            echo 'Conexion fallida';
        }
       
    }catch(MongoConnectionException $e){
        var_dump($e);

    }


?>
