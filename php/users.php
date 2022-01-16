<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users LEFT JOIN messages ON users.unique_id = messages.incoming_msg_id  WHERE NOT unique_id = {$outgoing_id} ORDER BY created_at DESC";
    
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "Not enough registered users";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
        
    }
    echo $output;
?>