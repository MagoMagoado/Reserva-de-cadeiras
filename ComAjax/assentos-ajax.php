<?php
    $Request = file_get_contents("php://input");
    $lugares = json_decode($Request);
    
    echo json_encode($lugares);
?>