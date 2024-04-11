<?php
    require_once("result.php");
    if(isset($_POST["peach"])){
        $fruit = "もも";
    }elseif(isset($_POST["strawberry"])){
        $fruit = "いちご";
    }
    $output = new Result();
    $output->output($fruit);
?>