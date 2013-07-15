<?php
    if (isset($_POST['qiming'])){ 
        $mysqli = new mysqli("localhost", "root", "root", "campus_conquest");
        $result = $mysqli->query("select * from q_states");
        
        while ($a = $result->fetch_assoc()){
            echo json_encode($a); 
        }
    } 
?>
