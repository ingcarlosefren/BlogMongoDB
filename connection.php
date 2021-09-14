<?php
require 'vendor/autoload.php';

    try{
        // Setup MongoDB connection
        $connection = new MongoDB\Client('mongodb://cefa-user:7869097@150.136.170.184:27017/?authSource=cefa-data');

        /**********
        ** YOUR CODE HERE:
        Assign to $connection the connection to MongoDB
        **********/
        $database=$connection ->BlogDB;

        // Select the "posts" collection in the database "blog"
        $collection = $database->posts;

        /**********
        ** YOUR CODE HERE:
        Assign to $collection the the "posts" collection of the database "blog"
        **********/
        //echo 'Conexion exitosa...';
    }catch(MongoConnectionException $e){
        var_dump($e);

    }
?>
