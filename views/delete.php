<?php
    include_once ("connection.php");
    include_once("models/Template.php");
    $change = new Template("templates/delete.html");
    

$change->write();
