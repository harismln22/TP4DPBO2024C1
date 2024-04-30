<?php
  include_once ("connection.php");
  include_once ("models/Template.php");
  $change = new Template("templates/edit.html");
  
$change->write();

