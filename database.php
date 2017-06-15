<?php
/*Login gegevens voor je database*/
$user = 'root';
$pass = '';
try{
    /*Probeert een verbinding te maken met de database*/
    $conn = new PDO("mysql:host=localhost;dbname=blogs",$user,$pass);
}catch (PDOException $error){
    echo $error;
    /*Als er een fout is, dan laat hij de foutmelding zien*/
}

/*Zorgt ervoor dat de SQL query klaar staat*/
$selectBlog = $conn->prepare("SELECT * FROM blogs");
/*Voert de SQL query uit*/
$selectBlog->execute();
/*Haalt de gegevens op die uit de query komen en stop deze
in de variabele blogs
*/
$blogs = $selectBlog->fetchAll();
