<?php
include_once("models/Template.php");
class Create{
    public function render($data)
    {        
        $header = "Member";

        $change = new Template("templates/create.html");
        $change->replace("NAME", $header);
        $change->write();
    }
}
