<?php
    $conn = pg_connect("postgres://pksfjeakmhhvga:d399c1e2e761dbec8269fed1278dd57061d8ada8b45dcd8c429df771e114c609@ec2-44-198-215-235.compute-1.amazonaws.com:5432/dcoboa1dd6vgou");

    if(!$conn){
        die("Can not connect database");
    } 
?>